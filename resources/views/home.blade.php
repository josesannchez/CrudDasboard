

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

@stop

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">{{ __('Panel de control administrador') }}</div>
                <div class="card-body">
                <div class="section-body">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                          
                                <div class="row">
                                    <div class="col-sm-6">
                                    
                                    <div class="small-box bg-info">
                                            <div class="card-block">
                                            <h5>Pacientes</h5>                                               
                                                @php
                                                 use App\Models\Paciente;
                                                $cant_paciente = Paciente::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-users f-left"></i><span class="badge bg-teal">{{$cant_paciente}}</span></h2>
                                                <p class="btn btn-app bg-success"><a href="/pacientes" class="text-blue">Ver más</a></p>
                                            </div>                                            
                                        </div>                                    
                                    </div>
                                    <div  class="col-sm-6">
                                        <div class="card bg-purple disabled color-palette order-card">
                                            <div class="card-block">
                                            <h5>Doctores</h5>                                               
                                                @php
                                                use App\Models\Doctore;
                                                 $cant_doctores = Doctore::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-user-md"></i><span class="badge bg-teal">{{$cant_doctores}}</span></h2>
                                                <p class="btn btn-app bg-success"><a href="/doctores" class="text-blue">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div> 
                                    <div  class="col-sm-6">
                                        <div class="card bg-warning disabled color-palette order-card">
                                            <div class="card-block">
                                            <h5>Servicios</h5>                                               
                                                @php
                                                use App\Models\Servicio;
                                                 $cant_servicios = Servicio::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-list-alt"></i ><span class="badge bg-teal">{{$cant_servicios}}</span></h2>
                                                <p class="btn btn-app bg-success"><a href="/servicios" class="text-blue">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div> 
                                    <div  class="col-sm-6">
                                        <div class="card bg-olive disabled color-palette order-card">
                                            <div class="card-block">
                                            <h5>Citas</h5>                                               
                                                @php
                                                use App\Models\Cita;
                                                 $cant_citas = Cita::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-address-book"></i><span class="badge bg-teal">{{$cant_citas}}</span></h2>
                                                <p class="btn btn-app bg-success"><a href="/citas" class="text-blue">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>                                                                
                                    
                                    <div  class="col-sm-6">
                                        <div class="card bg-primary color-palette order-card">
                                            <div class="card-block">
                                                <h5>Cobros</h5>                                               
                                                @php
                                                 use App\Models\Cobro;
                                                $cant_cobros = Cobro::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-credit-card"></i><span class="badge bg-teal">{{$cant_cobros}}</span></h2>
                                                <p class="btn btn-app bg-success"><a href="/cobros" class="text-blue">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

           
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop


