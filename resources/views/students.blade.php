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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                            <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                        </svg>
                    </button>
                </td>
                <td class=" border-b border-l border-r rounded-r-lg p-10 ">
                    <button class="modal_button_delete" type="button" data-target="#delete{{$student->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z" clip-rule="evenodd" />
                        </svg>
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

@endsection