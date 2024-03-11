<form action="{{route('estudiantes.update',$student->id)}}" method="POST">
    @csrf
    @method('PUT');
    <input type="text" name="student_name" placeholder="Nombre" value="{{$student->student_name}}">
    @error('student_name')
    <div>
        <p style="color: red;">{{ $message }}</p>
    </div>
    @enderror
    <input type="text" name="id_student" placeholder="Matricula" value="{{$student->id_student}}">
    <button>
        Editar
    </button>
</form>