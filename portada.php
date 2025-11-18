<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido - Lujos JD</title>
    <link rel="stylesheet" href="estilos.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Fondo degradado PRO */
        .portada {
            height: 100vh;
            background: linear-gradient(135deg, #001b3f, #003f8a, #0277bd);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            animation: fadeIn 2s ease-in-out;
            color: white;
        }

        /* Logo redondo */
        .logo {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 25px;
            box-shadow: 0 0 25px rgba(255,255,255,0.4);
            animation: floating 3s infinite ease-in-out;
        }

        .logo img {
            width: 130px;
        }

        h1 {
            font-size: 46px;
            margin: 10px 0 0 0;
            text-shadow: 0 0 15px rgba(255,255,255,0.2);
        }

        h3 {
            margin: 10px 0 35px 0;
            font-size: 22px;
            opacity: 0.9;
        }

        /* Botón PRO */
        .btn-entrar {
            background: linear-gradient(90deg, #004c8c, #0277bd);
            padding: 15px 45px;
            border-radius: 12px;
            font-size: 22px;
            color: white;
            font-weight: bold;
            text-decoration: none;
            box-shadow: 0 6px 18px rgba(0,0,0,0.4);
            transition: 0.3s;
        }

        .btn-entrar:hover {
            transform: scale(1.1);
            background: linear-gradient(90deg, #002d55, #015c8b);
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        @keyframes floating {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }
    </style>

</head>
<body>

<div class="portada">

    <!-- LOGO -->
    <div class="logo">
        <img src="https://cdn-icons-png.flaticon.com/512/741/741407.png">
    </div>

    <h1>INTERNACIONAL DE LUJOS JD</h1>
    <h3>Sistema de inventario y ventas</h3>
    
    <!-- Botón -->
    <a class="btn-entrar" href="panel.php">Entrar al sistema</a>
</div>

</body>
</html>
