


















@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Doctore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('doctores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $doctore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $doctore->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $doctore->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $doctore->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $doctore->Contraseña }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
   
