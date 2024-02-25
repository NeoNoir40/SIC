@extends('plantilla')

@section('titulo')
Iniciar sesión
@endsection
@section('contenido')
<div class="flex flex-col items-center justify-center h-full"> <!-- Añadido h-full para ocupar toda la altura del contenedor -->
    @vite(['resources/js/app.js','resources/sass/app.scss'])
    <div class="bg-[#faf9f9] rounded-md flex p-10 sombrita  ">
        <form class="flex flex-col items-center gap-4 p-10 text-center" action="{{url('alumnos')}}" method="POST">
        <h1 class="font-bold  text-[30px] sombrita-txt text-[#5902e2]">Agregar Alumno</h1>
            @csrf
            <input class="px-20 py-2 border rounded-md  text-center" type="text" name="id_student" placeholder="Matricula">
            @error('id_student')
            <div class="text-red-500" style="color: red;">{{ $message }}</div>
            @enderror
            <input class="px-20 py-2 border rounded-md  text-center" type="password" name="password_student" placeholder="Contraseña">
            @error('password_student')
            <div class=" text-red-500" style="color: red;">{{ $message }}</div>
            @enderror
            <button class="bg-[#7603f5] p-2 rounded text-white mt-2"  type="submit">
                Iniciar Session
            </button>
        </form>

    </div>
</div>
@endsection