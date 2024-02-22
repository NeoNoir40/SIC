@vite(['resources/js/app.js','resources/sass/app.scss'])

<form class="flex flex-col items-center  " action="{{url('alumnos')}}" method="POST">
    @csrf
    <input type="text" name="student_name" placeholder="Nombre">
    @error('student_name')
        <div class="text-red-500" style="color: red;">{{ $message }}</div>
    @enderror
    <input type="text" name="id_student" placeholder="Matricula">
    @error('id_student')
        <div class="text-red-500" style="color: red;">{{ $message }}</div>
    @enderror
    <input type="email" name="email_student" placeholder="Email">
    @error('email_student')
        <div class="text-red-500" style="color: red;">{{ $message }}</div>
    @enderror
    <input type="password" name="password_student" placeholder="Contraseña">
    @error('password_student')
        <div class="text-red-500" style="color: red;">{{ $message }}</div>
    @enderror

   
    <button type="submit">
        Registrar
    </button>
</form>