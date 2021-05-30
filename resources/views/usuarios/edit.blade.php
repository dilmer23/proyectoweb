@extends('adminlte::page')

@section('title', 'Ediar')

@section('content_header')
<div class="p-3 mb-2 bg-primary text-white">
  <h1>Editar usuarios</h1>
</div>
@stop

@section('content')
<form action="/usuarios/{{$usuario->id}}" method="POST" class="formeditar">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$usuario->nombre}}" aria-describedby="emailHelp" required >
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">fecha Nacimiento</label>
        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento"required value="{{$usuario->fechaNacimiento}}">
      </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">sexo</label>
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="sexo"required value="{{$usuario->sexo}}">
            <option selected>Selecione el sexo</option>
            <option value="hombre">hombre</option>
            <option value="mujer">mujer</option>
            <option value="homo sexual">homo sexual</option>
          </select>
        </div>
        <a  class="btn btn-outline-secondary"href="/usuarios">Cancelar</a>
      <button type="submit" class="btn btn-primary">Guardar</button>
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
  
      $('.formeditar').submit(function(e) {
        e.preventDefault();
       
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Editado Correctamente',
          showConfirmButton: false,
          timer: 2000
        })
          this.submit();
      })
    </script>
@stop