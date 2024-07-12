<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #f0f2f5;
    }

    .navbar {
        position: sticky;
        top: 0;
        z-index: 1000;
        background: linear-gradient(135deg, #6e8efb, #a777e3);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 15px 0;
        display: flex;
        justify-content: center;
    }

    .navbar div {
        margin: 0 15px;
    }

    .navbar a {
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 25px;
        transition: all 0.3s ease;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .navbar .activo a {
        background-color: rgba(255, 255, 255, 0.2);
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    }

    .navbar a:hover {
        background-color: rgba(255, 255, 255, 0.1);
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<body>
    <div class="navbar">
        <div class="{{ setActivo('home') }}"><a href="{{ route('home') }}">Home</a></div>
        <div class="{{ setActivo('alumnos.create') }}"><a href="{{ route('alumnos.create') }}">Ingreso</a></div>
        <div class="{{ setActivo('alumnos') }}{{ setActivo('alumnos.show') }}"><a href="{{ route('alumnos') }}">Listado</a></div>
    </div>
</body>
