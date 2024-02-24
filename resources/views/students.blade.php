
@vite(['resources/js/app.js','resources/sass/app.scss'])
@extends('plantilla')
@section('titulo')
Lista estudiantes
@endsection
@section('contenido')
<div class="p-20">
<table class="" >
<thead class="bg-[#5902e2] text-white ">
    <tr class="">
        <th class=" rounded-l-md " >#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>ID Estudiante</th>
        <th class="rounded-r-md">Comentarios</th>
    </tr>
</thead>
@foreach ($students as $student)
<tbody >
    <tr class="text-justify">
        <td class="bg-gray-20 px-2 py-2 border-b border-l border-r ">
            {{$student->id}}
        </td>
        <td class="px-2 py-2 border-b border-l border-r">
            {{$student->student_name}}
        </td>
        <td class=" px-2 py-2 border-b border-l border-r">
        {{$student->last_name}}
        </td >
        <td class="px-2 py-2 border-b border-l border-r">
            {{$student->id_student}}
        </td>
        <td class=" px-2 py-2 border-b border-l border-r rounded-r-lg w-1/3">
            {{$student->comments}}
        </td>
    </tr>
</tbody>
@endforeach
</table>
</div>
@endsection