@extends('plantilla')
@section('contenido')

</head>
<title>Formulario</title>
<h1 class="mt-4 display-1 text center">Ingresar</h1>
@if(session()->has('confirmacion'))
   {!! "<script> Swal.fire('Listo','Tu formulario llego al controlador','success')</script>" !!}
   <div class="alert alert-primary alert-dimissible fade show text-center" role="alert"> 
    <strong>{{session('confirmacion')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
@endif

    <nav class="navbar navbar-expand-lg navbar-dar bd-dark">
        <div class="container-fluid">
    <br>

    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong>Formulario Incompleto!</strong>{{$error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
        </div>  
        @endforeach
    @endif
    <div method="post" action="GuardarFormulario">
        @csrf
        <div>
            <label class="form-label" name="labelUsuario">Usuario</label>
            <input type="text" class="form-control" name="txtUsuario" value="{{old('txtUsuario')}}">
            <p class="fw-bold text-danger"> {{$errors->first('txtUsuario')}}</p>
        
        </div>   
        <br>
        <div>
        <label class="form-label"name="labelNo.Computadora">No.Computadora: </label>
                <input type="text" class="form-control" name="txtNo.Computadora" value="{{ old('txtNo.Computadora')}}">
                <p class="fw-bold text-danger"> {{$errors->first('txtNo.Computadora')}}</p>
        </div>   
        <br>
        <div>        
            
        <label class="form-label"name="labelTiempo">Tiempo: </label>
                <input type="text" class="form-control" name="txtTiempo" value="{{ old('txtTiempo')}}">
                <p class="fw-bold text-danger"> {{$errors->first('txtTiempo')}}</p>
        </div>   
        <br>
        <div>

        <label class="form-label"name="labelFecha">Fecha: </label>
                <input type="text" class="form-control" name="txtFecha" value="{{ old('txtFecha')}}">
                <p class="fw-bold text-danger"> {{$errors->first('txtFecha')}}</p>
        </div>
        <br>
        <div>
        <button type="submit" name="btGuardar"> Guardar</button>
            <div>
    </nav>

    <! --Contenido de la pagina-->
    @yield('contenido')

       <footer> ISC Mejia Morales Gerardo {{ date('y')}}</footer>


</body>
</html>