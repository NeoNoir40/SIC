@vite(['resources/js/app.js','resources/sass/app.scss'])
@extends('plantilla')
@section('titulo')
Lista estudiantes
@endsection
@section('contenido')
<div class="p-20">

    <div class="">
        <button class="modal_button m-4 bg-[#7603f5] p-2 rounded hover:opacity-50 transition-all hover:scale-110 text-white mt-2" type="submit"> Agregar estudiante
        </button>
    </div>
    <div class="modal">
        <div class="modal__container   bg-[#faf9f9]  sombrita  ">
            <form class="  grid  place-items-center gap-4 p-10 text-center" enctype="multipart/form-data" action="{{url('estudiantes')}}" method="POST">
                <h1 class="font-bold  text-[30px] sombrita-txt text-[#5902e2]">Agregar Alumno</h1>

                @csrf
                <input class="px-20  py-2 border rounded-md  text-center " type="text" name="student_name" placeholder="Nombre">
                @error('student_name')
                <div class="text-red-500" style="color: red;">{{ $message }}</div>
                @enderror
                <input class="px-20 py-2 border rounded-md  text-center" type="text" name="last_name" placeholder="Apellido">
                <input class="px-20 py-2 border rounded-md  text-center" type="text" name="id_student" placeholder="Matricula">
                @error('id_student')
                <div class="text-red-500" style="color: red;">{{ $message }}</div>
                @enderror
                <input class="px-20 py-2 border rounded-md  text-center" type="date" name="birth_date" placeholder="Fecha de nacimieneto">
                <input class="px-20 py-2 border rounded-md  text-center" type="text" name="comments" placeholder="Descripción del alumno">


                <div class="flex flex-row gap-2">
                    <button class="bg-[#7603f5] p-2 rounded hover:opacity-50 transition-all hover:scale-110 text-white mt-2" type="submit">
                        Crear
                    </button>
                    <a href="" class="close_modal l bg-red-500 p-2 rounded hover:opacity-50  transition-all hover:scale-110 text-white mt-2">
                        Cancelar
                    </a>
                </div>

            </form>

        </div>
    </div>

    <table id="table" class="table table-striped table-hover" style="width:100%">
        <thead class="bg-white text-black ">
            <tr class="">
                <th class="rounded-l-md border p-4 ">#</th>
                <th class="border">Nombre</th>
                <th class="border">Apellido</th>

                <th class="border">ID Estudiante</th>
                <th class="border">Comentarios</th>
                <th class="rounded-r-md border">Fecha de nacimiento</th>
                <th class="rounded-r-md border">
                    Editar </th>
                <th class="rounded-r-md border">
                    Eliminar </th>



            </tr>
        </thead>
        @foreach ($students as $student)
        <tbody>

            <tr class="text-justify">
                <td class="bg-gray-20 px-2 py-2 border-b border-l border-r ">
                    {{$student->id}}
                </td>
                <td class="px-2 py-2 border-b border-l border-r">
                    {{$student->student_name}}
                </td>
                <td class=" px-2 py-2 border-b border-l border-r">
                    {{$student->last_name}}
                </td>
                <td class="px-2 py-2 border-b border-l border-r">
                    {{$student->id_student}}
                </td>
                <td class=" px-2 py-2 border-b border-l border-r rounded-r-lg w-1/3">
                    {{$student->comments}}
                </td>
                <td class=" px-2 py-2 border-b border-l border-r rounded-r-lg ">
                    {{$student->birth_date}}
                </td>
                <td class="border-b border-l border-r rounded-r-lg p-10">
                    <button class="modal_button_edit" type="button" data-target="#update{{$student->id}}">
                        Editar
                    </button>
                </td>
                <td class=" border-b border-l border-r rounded-r-lg p-10 ">
                    <button class="modal_button_delete" type="button" data-target="#delete{{$student->id}}">
                       Eliminar
                    </button>
                </td>

            </tr>

        </tbody>
        @include('info_student')
            
        @endforeach
        
    </table>
</div>
<!-- Modal POST -->
<!-- Modal Update-->


<script src="{{ asset('js/modal.js') }}"></script>
<script src="{{ asset('js/tabla.js') }}"></script>

@endsection