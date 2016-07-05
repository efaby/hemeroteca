

 {!!Form::open(['route'=>'isbn.store', 'method'=>'POST', 'id' => 'frmTest'])!!}

     @include('Obras.form.formRegistroIsbn')
<br>
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
   
            {!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!} 
          
            <a href="#" class="btn btn-primary" id="cancelar">Cancelar</a>
<br><br>
    </div>
    </div>
{!!Form::close()!!}

<script type="text/javascript">

$('document').ready(function(){

	$("#cancelar").click (function () {
		$(".modal-dialog .close").click()
	});

  $('#frmTest').on('submit',function(e){
    var $form = $(this);
    e.preventDefault(); //keeps the form from behaving like a normal (non-ajax) html form
    var url = $form.attr('action');
    var formData = {};
    //submit a POST request with the form data
    $form.find('input').each(function()
    {
        formData[ $(this).attr('name') ] = $(this).val();
    });
    $form.find('select').each(function()
    {
        formData[ $(this).attr('name') ] = $(this).val();
    });
    //submits an array of key-value pairs to the form's action URL
    
    $.ajax({
            type: "POST",
            url: url,
            data: formData,
            dataType: 'json',
            cache: false,            
        // Response.
        }).always(function(response, status) {
            // Check for errors.
            if (response.status == 422) {
                var errors = $.parseJSON(response.responseText);
                //errors = response.responseJSON;        
                associate_errors(errors, $form);
            } else {
              location.reload();
            }
    
    
    });
});

function associate_errors(errors, $form)
{
    $form.find('.form-group').removeClass('has-error').find('.help-text').text('');
    $.each(errors, function(field, message) {
        var $group = $form.find('#' + field + '-group');
        $group.addClass('has-error').find('.help-text').text(message);
    })
}

});
</script>
