@extends('adminlte::page')

@section('title', 'listar')

@section('content_header')
    <h1 class="p-3 mb-2 bg-secondary text-white">Registros De Usuarios</h1>
@stop

@section('content')
<a href="usuarios/create" class="btn btn-success btn-lg float-right">Registrar propietarios</a><br><br><br>

<table id="usuario" class="table table table-hover" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th scope="col">Nombre Del usuario</th>
        <th scope="col">fecha nacimiento</th>
        <th scope="col">sexo</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->fechaNacimiento}}</td>
            <td>{{$usuario->sexo}}</td>
            <td>
              <form action="{{ route ('usuarios.destroy',$usuario->id)}}" class="formeliminar" method="POST">
                  <a href="/usuarios/{{ $usuario->id}}/edit" class="btn btn-outline-success ">Editar</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-outline-danger">Eliminar</button>
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <img src="https://pixabay.com/get/g7a3ec9bd120b914d61a630c332d87cbfc3129382beadc8abb1a4745a51f43b28d489630a4caef7ca0d27a677c0955897_1920.png" class="img-fluid" alt="Responsive image">
@stop

@section('css')
    
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
    <link href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" rel="stylesheet" >
    
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js" ></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if (session('eliminar')=='ok')
    <script>
      Swal.fire(
      'Elimado!',
      'Eliminado correctamente.',
      'success'
    )
    </script>
    @endif
        
    <script >
  
      $('.formeliminar').submit(function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Quieres eliminar este elemto?',
            text: "Estas seguro que quieres eliminar",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar'
          }).then((result) => {
            if (result.isConfirmed) {
              
              this.submit();
            }
          })
      
      })
    </script>
    <script>
      $(document).ready(function() {
              $('#propietario').DataTable( {
                  "language": {
                      "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                  },
                  dom: 'Bfrtip',
                  buttons: [
                      'copy', 'csv', 'excel', 'pdf', 'print'
                  ]
              } );
          } );
      </script>
  
  

@stop