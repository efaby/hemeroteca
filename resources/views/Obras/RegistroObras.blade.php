 @extends ('layout.templateAdministacion')
 @section('content')

 {!!Form::model(['route'=>'obrasRegistros.store', 'method'=>'POST', 'id' => 'frmTest'])!!}
     @include('Obras.form.formRegistroObra')
     {!!Form::hidden('bandera',1)!!}
  {!!Form::submit('Guardar Datos',['class'=>'btn btn-primary'])!!}

 <div class="modal-footer">
    <table class="table ">

        <tbody>
            <tr>
                <td style="text-align: left;"><img src="{{asset("imagenes/inpc.png")}}" width="30%" /></td>                
            </tr>
        </tbody>
    </table>

</div>
{!!Form::close()!!}


<script type="text/javascript">

    $('document').ready(function(){


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


@stop