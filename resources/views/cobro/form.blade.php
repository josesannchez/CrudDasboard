














<div class="card">
    <div class="card-body">
        <div class="box box-info padding-1">
            <div class="row">
                    <div class="col-sm-6" >
                        <div class="form-group">
                            {{ Form::label('servicios_id') }}
                            {{ Form::select('servicios_id', $servicio, $cobro->servicios_id, ['class' => 'form-control' . ($errors->has('servicios_id') ? ' is-invalid' : ''), 'placeholder' => 'Servicios Id']) }}
                            {!! $errors->first('servicios_id', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                                            
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{ Form::label('pacientes_id') }}
                            {{ Form::select('pacientes_id', $paciente, $cobro->pacientes_id, ['class' => 'form-control' . ($errors->has('pacientes_id') ? ' is-invalid' : ''), 'placeholder' => 'Pacientes Id']) }}
                            {!! $errors->first('pacientes_id', '<div class="invalid-feedback">:message</div>') !!}
                        
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{ Form::label('citas_id') }}
                            {{ Form::select('citas_id', $cita, $cobro->citas_id, ['class' => 'form-control' . ($errors->has('citas_id') ? ' is-invalid' : ''), 'placeholder' => 'Citas Id']) }}
                            {!! $errors->first('citas_id', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{ Form::label('valor') }}
                            {{ Form::text('valor', $cobro->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
                            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div> <div class="col-sm-6">
                        <div class="form-group">
                            <div class="box-footer mt20">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        
                        </div>
                        </div>
            </div>
    </div>
</div>