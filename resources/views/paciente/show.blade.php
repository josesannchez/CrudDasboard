@extends('layouts.app')

@section('template_title')
    {{ $paciente->name ?? 'Show Paciente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-teal">
                        <div class="float-left">
                            <span class="card-title">Show Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $paciente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $paciente->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $paciente->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $paciente->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $paciente->Contraseña }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
