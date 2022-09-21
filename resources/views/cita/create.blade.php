















@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card " >
                    <div class="card-header bg-teal">
                        <span class="card-title">Registrar cita</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('citas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cita.form')

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
    placeholder: "Seleccione al paciente",
    allowClear: true
    
});
$('#doctores_id').select2({
    id: '1',
    placeholder: "Seleccione al doctor",
    allowClear: true
    
});
$('#servicios_id').select2({
    id: '1',
    placeholder: "Seleccione el servicio",
    allowClear: true
    
});

</script>

@stop
       