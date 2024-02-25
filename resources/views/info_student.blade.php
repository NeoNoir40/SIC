
<div id="update{{$student->id}}" class="modal_edit">
    <div  class="modal__container grid gap-4  bg-black  sombrita  ">
        <form  enctype="multipart/form-data" action="{{url('estudiantes',$student->id)}}" method="POST">
            <h1 class="font-bold  text-[30px] sombrita-txt text-[#5902e2]">Editar Alumno</h1>
            @csrf
            @method('PUT')
            <input class="px-20  py-2 border rounded-md  text-center " type="text" name="student_name" placeholder="Nombre" value="{{$student->student_name}}">
            @error('student_name')
            <div class="text-red-500" style="color: red;">{{ $message }}</div>
            @enderror
            <input class="px-20 py-2 border rounded-md  text-center" type="text" name="last_name" placeholder="Apellido" value="{{$student->last_name}}" >
            <input class="px-20 py-2 border rounded-md  text-center" type="text" name="id_student" placeholder="Matricula" value="{{$student->id_student}}">
            @error('id_student')
            <div class="text-red-500" style="color: red;">{{ $message }}</div>
            @enderror
            <input class="px-20 py-2 border rounded-md  text-center" type="date" name="birth_date" placeholder="Fecha de nacimieneto" value="{{$student->birth_date}}">
            <input class="px-20 py-2 border rounded-md  text-center" type="text" name="comments" placeholder="Descripción del alumno" value="{{$student->comments}}">
            <div class="flex flex-row gap-2">
                <button class="bg-[#7603f5] p-2 rounded hover:opacity-50 transition-all hover:scale-110 text-white mt-2" type="submit">
                    Actualizar
                </button>
                <a  href="" class="close_modal l bg-red-500 p-2 rounded hover:opacity-50  transition-all hover:scale-110 text-white mt-2">
                    Cancelar
                </a>
            </div>
        </form>

    </div>
</div>





<div  id="delete{{$student->id}}" class="modal_delete">
    <div class="modal__container   sombrita  ">
        <form class="grid  gap-4 p-10 text-center" enctype="multipart/form-data" action="{{ url('estudiantes',$student->id) }}" method="POST">
            <h1 class="font-bold text-[30px] sombrita-txt text-[#5902e2]">Eliminar Alumno</h1>
            @csrf
            @method('DELETE')
            <div class="grid place-items-center ">
                <div>
                    <h1 class="font-bold text-[30px] sombrita-txt text-[#5902e2]">¿Estás seguro de eliminar al alumno: {{ $student->student_name }} {{ $student->last_name }}?</h1>
                </div>
                <div>
                <button class="bg-[#7603f5] p-2 rounded hover:opacity-50 transition-all hover:scale-110 text-white mt-2" type="submit">
                    Sí
                </button>
                <a href="" type="button" class="close_modal  bg-red-500 p-2 rounded hover:opacity-50  transition-all hover:scale-110 text-white mt-2">
               No
                </a>
            </div>
            </div>
        </form>
    </div>
</div>
