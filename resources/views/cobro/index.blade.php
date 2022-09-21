@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header bg-teal">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cobro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cobros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Servicios</th>
										<th>Pacientes</th>
										<th>Fecha de cita</th>
										<th>Hora de atencio </th>

                                        <th>Valor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cobros as $cobro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cobro->servicio->nombre }}</td>
											<td>{{ $cobro->paciente->nombre}}</td>
											<td>{{ $cobro->cita->fecha_inicio }}</td>
                                            <td>{{ $cobro->cita->hora_inicio }}</td>

											<td>{{ $cobro->valor }}</td>

                                            <td>
                                                <form action="{{ route('cobros.destroy',$cobro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cobros.show',$cobro->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cobros.edit',$cobro->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cobros->links() !!}
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link href="path/to/select2.min.css" rel="stylesheet" />

    
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

  
