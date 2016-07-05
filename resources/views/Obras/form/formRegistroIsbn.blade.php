<div class="modal-header" >
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
          </button>
          <h3 class="text-center" id="myModalLabel">Código ISBN</h3>
</div>
<div class="col-md-12">
 {!!Form::label('codigo_isbn','Código ISBN')!!}
                <div id="codigo_isbn-group" class="form-group {!! $errors->has('codigo_isbn') ? 'has-error' : '' !!}">
                 {!!Form::text('codigo_isbn',null,['class'=>'form-control','placeholder'=>'----Ingreso ISBN------'])!!}
                
               </div> 
               </div>
    <div class="col-md-12">           
                   {!!Form::label('activo_pasivo','Estado')!!}
                 <div id="activo_pasivo-group" class="form-group {!! $errors->has('activo_pasivo') ? 'has-error' : '' !!}">
                {!! Form::select('activo_pasivo',['placeholder'=>'---seleccione opción---','activo' => 'Activo','pasivo' => 'Pasivo'])!!}       
                  <div class="help-text"></div>
                </div> 
             </div>
          