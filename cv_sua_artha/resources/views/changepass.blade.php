@extends('adminlte::page')

@section('title', 'Change Password')

@section('content_header')

@stop

@section('content')
    @role('owner')
    <h2>Oops!</h2>
    <h3>Halaman ini masih dalam pembangunan...</h3>

    @elserole ('admin')    
    <h2>Oops!</h2>
    <h3>Halaman ini masih dalam pembangunan...</h3>

    @else
    <h2>Oops!</h2>
    <h3>Halaman ini masih dalam pembangunan...</h3>
    
    @endrole
                         
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop