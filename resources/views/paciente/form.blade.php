
























<div class="card">
    <div class="card-body">
         <div class="box box-info padding-1">
            <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        {{ Form::label('nombre') }}
                        {{ Form::text('nombre', $paciente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        {{ Form::label('apellido') }}
                        {{ Form::text('apellido', $paciente->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
                        {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        {{ Form::label('cedula') }}
                        {{ Form::text('cedula', $paciente->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
                        {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        {{ Form::label('correo') }}
                        {{ Form::text('correo', $paciente->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
                        {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        {{ Form::label('Contraseña') }}
                        {{ Form::text('Contraseña', $paciente->Contraseña, ['class' => 'form-control' . ($errors->has('Contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
                        {!! $errors->first('Contraseña', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    
                           
                                    <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                
                            </div>
                        </div>
        </div>
    </div>
</div>
