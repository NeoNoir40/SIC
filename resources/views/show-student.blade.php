
@extends('plantilla')
@section('titulo')
Lista estudiantes
@endsection
@section('contenido')
<div class="flex flex-col items-center p-40 absolute mb-10">
    <h1 class="font-bold text-[30px] mb-10 text-[#7604F4]">Informacion del alumno</h1>
    <div class="bg-[#f0f0f0] flex flex-col justify-center sombrita  w-1/2 p-10  ">
    <p>Nombre del alumno <b>{{$student->student_name}}</b></p>
    <p>Apellido del alumno: <b>{{$student->last_name}}</b></p>
<p>Matricula: <b>{{$student->id_student}}</b></p>
<p>Fecha de nacimiento: <b>{{$student->birth_date}}</b></p>
<p>Comentarios: <b>{{$student->comments}}</b></p>
<p>Se creo el : <b>{{$student->created_at}}</b></p>
</div>
<div class="mt-10">
<a href="{{url('estudiantes')}}" class="bg-[#7603f5] p-2 rounded hover:opacity-50 transition-all hover:scale-110 text-white mt-2">Regresar</a>
</div>
</div>


@endsection