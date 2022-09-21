



























<div class="card ">
    <div class="card-body">
         <div class="box box-info padding-1">
            <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group" >
                            {{ Form::label('pacientes_id') }}
                            {{ Form::select('pacientes_id', $paciente, $cita->pacientes_id, ['class' => 'form-control' . ($errors->has('pacientes_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                            {!! $errors->first('pacientes_id', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="col-sm-6">        
                        <div class="form-group" >
                            {{ Form::label('doctores_id') }}
                            {{ Form::select('doctores_id', $doctore, $cita->doctores_id, ['class' => 'form-control' . ($errors->has('doctores_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                            {!! $errors->first('doctores_id', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{ Form::label('servicios_id') }}
                            {{ Form::select('servicios_id',$servicio, $cita->servicios_id, ['class' => 'form-control' . ($errors->has('servicios_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                            {!! $errors->first('servicios_id', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{ Form::label('fecha_inicio') }}
                            {{ Form::date('fecha_inicio', $cita->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
                            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{ Form::label('fecha_fin') }}
                            {{ Form::date('fecha_fin', $cita->fecha_fin, ['class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
                            {!! $errors->first('fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{ Form::label('hora_inicio') }}
                            {{ Form::time('hora_inicio', $cita->hora_inicio, ['class' => 'form-control' . ($errors->has('hora_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio']) }}
                            {!! $errors->first('hora_inicio', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{ Form::label('hora_final') }}
                            {{ Form::time('hora_final', $cita->hora_final, ['class' => 'form-control' . ($errors->has('hora_final') ? ' is-invalid' : ''), 'placeholder' => 'Hora Final']) }}
                            {!! $errors->first('hora_final', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        
                    
                            <div class="box-footer mt20">
                            <button type="submit" class="btn btn-primary">Reserva cita</button>
                            </div>
                    
                    </div>
        </div>      
    </div>
</div>
