

















  
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   

<div class="container-fluid ">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="card">
                    <div class="card-header bg-teal ">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title" class="badge bg-teal">
                                {{ __('Cita') }}
                            </span>

                             <div class="float-right" class="badge bg-teal">
                                <a href="{{ route('citas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tabla" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Pacientes Id</th>
										<th>Doctores Id</th>
										<th>Servicios Id</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										<th>Hora Inicio</th>
										<th>Hora Final</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($citas as $cita)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cita->paciente->nombre }}</td>
											<td>{{ $cita->doctore->nombre  }}</td>
											<td>{{ $cita->servicio->nombre  }}</td>
											<td>{{ $cita->fecha_inicio }}</td>
											<td>{{ $cita->fecha_fin }}</td>
											<td>{{ $cita->hora_inicio }}</td>
											<td>{{ $cita->hora_final }}</td>

                                            <td>
                                                <form class="eliminar" action="{{ route('citas.destroy',$cita->id) }} "  method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('citas.show',$cita->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success " href="{{ route('citas.edit',$cita->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm "><i class="fa fa-fw fa-trash "></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $citas->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

    @stop

@section('js')

<script>
$(document).ready(function() {
    $('#tabla').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>
@stop


