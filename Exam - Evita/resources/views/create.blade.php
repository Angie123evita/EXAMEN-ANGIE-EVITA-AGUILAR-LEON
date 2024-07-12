@extends('layout')

@section('title', 'Crear Alumno')

@section('content')
<div class="form-container">
    <h2>Crear nuevo Alumno</h2>
    <form action="{{ route('alumnos.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
            @error('nombre')<span class="error">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="curso">Curso</label>
            <input type="text" id="curso" name="curso" value="{{ old('curso') }}">
            @error('curso')<span class="error">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="nota_1">Nota 1</label>
            <input type="number" step="0.01" id="nota_1" name="nota_1" value="{{ old('nota_1') }}">
            @error('nota_1')<span class="error">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="nota_2">Nota 2</label>
            <input type="number" step="0.01" id="nota_2" name="nota_2" value="{{ old('nota_2') }}">
            @error('nota_2')<span class="error">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label for="fecha_reg">Fecha de Registro</label>
            <input type="date" id="fecha_reg" name="fecha_reg" value="{{ old('fecha_reg') }}">
            @error('fecha_reg')<span class="error">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <button type="submit">Guardar</button>
        </div>
    </form>
</div>

<style>
    .form-container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #666;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #45a049;
    }

    .error {
        color: red;
        font-size: 0.9em;
        margin-top: 5px;
        display: block;
    }
</style>
@endsection
