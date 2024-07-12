<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Footer</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .footer {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -4px 12px rgba(0, 0, 0, 0.1);
        }

        .footer p {
            margin: 10px 0;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            padding: 5px 10px;
            border-radius: 15px;
            transition: all 0.3s ease;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .footer a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="footer">
    <p>
        &copy; <?php echo date("Y"); ?> Examen de Angie Evita. Apruebeme Profe.
    </p>
    <p>
        <a href="index.php">Inicio</a> |
        <a href="{{ route('alumnos.create') }}">Ingreso</a> |
        <a href="{{ route('alumnos') }}">Listado</a>
    </p>
</div>

</body>
</html>
