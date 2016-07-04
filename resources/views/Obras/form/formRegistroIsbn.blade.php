<div class="modal-header" style="background-color:#008ae6">
       
        <h5 class="text-center" style="font-family:verdana;color:white">Codigos</h5>
</div>

            <div class="row" style="text-align:center">
              <div class="col-md-11" style="text-align:center">
                <div id="codigo_isbn-group" class="form-group {!! $errors->has('codigo_isbn') ? 'has-error' : '' !!}">
                 {!!Form::text('codigo_isbn',null,['class'=>'form-control','placeholder'=>'----Ingreso ISBN------'])!!}
                
               </div> 
                   {!!Form::label('activo_pasivo','Estado')!!}
                 <div id="activo_pasivo-group" class="form-group {!! $errors->has('activo_pasivo') ? 'has-error' : '' !!}">
                {!! Form::select('activo_pasivo',['placeholder'=>'---seleccione opción---','activo' => 'Activo','pasivo' => 'Pasivo'])!!}       
                  <div class="help-text"></div>
                </div> 
             </div>
           </div>

          
