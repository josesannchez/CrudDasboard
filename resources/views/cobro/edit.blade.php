@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card">
                    <div class="card-header bg-teal ">
                        <span class="card-title">Update Cobro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cobros.update', $cobro->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cobro.form')

                        </form>
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
<script>
$('#pacientes_id').select2({
    id: '1',
    placeholder: "Seleccione y edite paciente",
    allowClear: true
    
});
$('#doctores_id').select2({
    id: '1',
    placeholder: "Seleccione  y edite doctor",
    allowClear: true
    
});
$('#servicios_id').select2({
    id: '1',
    placeholder: "Seleccione  y edite servicio",
    allowClear: true
    
});
$('#citas_id').select2({
    id: '1',
    placeholder: "Seleccione y edite la cita",
    allowClear: true
    
});
</script>
@stop

   
