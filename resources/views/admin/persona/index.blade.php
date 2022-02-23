@extends('adminlte::page')

@section('title', 'Home Persona')

@section('content_header')
    <h1>Home Persona</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <a href="{{route("admin.persona.create")}}" class="btn btn-secondary btn-sm float-right">Crete new Persona</a>
                <h5><strong>Data of Persona</strong></h5>
                
            </div>
            @if (session('personainsert'))
                <div class="alert alert-success">
                    <strong>{{session('personainsert')}}</strong>
                </div>
            @endif

            @if (session('personadelete'))
                <div class="alert alert-success">
                    <strong>{{session('personadelete')}}</strong>
                </div>
            @endif

            
            

            {{-- personainsert --}}
            <div class="card-body">
                
                @livewire('live-persona.table-persona')
                
                
            </div>
        </div>
    </div>
    
    



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    {{-- <link rel="stylesheet" href="style.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table-personas').DataTable({
                responsive : true,
                autoWidth: false, 

                "language": {
                "lengthMenu": "Mostrar " + `
                                    <select class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="-1">All</option>
                                    </select>
                                        ` + " registros por pagina",
                "zeroRecords": "No hay registros - Disculpa",
                "info": "Mostrando pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros encontrados",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search" : "Buscar:",
                "paginate" : {
                    "next" : "Siguiente" ,
                    "previous" : "Anterior" 
                }
                }

            });
        } );
    </script>
@stop