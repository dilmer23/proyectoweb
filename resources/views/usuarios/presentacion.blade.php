@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
@stop

@section('content')
<form action="/usuarios" method="POST" class="formguardar justify-content-center">
  @csrf
<div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Registra usuario</h5>
          <p class="card-text">aqui puedes registrar usuarios.</p>
          <a href="usuarios/create" class="btn-lg btn-primary">Registrar usuarios</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Consulta de Usuarios</h5>
          <p class="card-text">Aqui puedes consultar los usuarios registrados.</p>
          <a href="usuarios" class="btn-lg btn btn-danger">Consultar Uusuarios</a>
        </div>
      </div>
    </div>
  </div>
  <img src="https://pixabay.com/get/g7e9cfe82eb9fa0fb3360554e106f684f528e89236728a4ddf71875bc23cf8999d1446a258f5746194d973eed219293c5_1920.png" class="img-fluid" alt="Responsive image">
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
    <link href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" rel="stylesheet" >
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        
    <script >
  
      $('.formguardar').submit(function(e) {
        e.preventDefault();
       
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Guardado Correctamente',
          showConfirmButton: false,
          timer: 2000
        })
          this.submit();
      })
    </script>
@stop