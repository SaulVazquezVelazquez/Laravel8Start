@extends('adminlte::page')

@section('title', 'HomePersons')

@section('content_header')
    <a href="{{route('admin.persons.create')}}" class="btn btn-sm btn-secondary float-right">New Person</a></td>
    <h1>Home Persons</h1>
@stop

@section('content')
@if (session('infoDelete'))
    <div class="alert alert-success">
    <strong>{{session('infoDelete')}}</strong>
    </div>
@endif
@if (session('personsuccess'))
    <div class="alert alert-success">
    <strong>{{session('personsuccess')}}</strong>
    </div>
@endif



@livewire('admin.persons-index')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
