














    
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
                    <div class="card-header bg-teal">
                        <div class="float-left">
                            <span class="card-title">Show Cobro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cobros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Servicios Id:</strong>
                            {{ $cobro->servicios_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pacientes Id:</strong>
                            {{ $cobro->pacientes_id }}
                        </div>
                        <div class="form-group">
                            <strong>Citas Id:</strong>
                            {{ $cobro->citas_id }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $cobro->valor }}
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