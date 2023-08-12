<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link rel="icon" href="../img/icons/ruedo_icon.ico" type="image/x-icon">
    <link href="../css/output.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-6 rounded shadow-md">
        <div class="width mb-4">
            <img src="../img/login_img.png" alt="icono-login">
        </div>
        <form action="dashboard_view.php">
            <div class="mb-4">
                <label for="email" class="block font-medium mb-1">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="w-full p-2 border rounded" placeholder="correo@example.com">
            </div>
            <div class="mb-4">
                <label for="password" class="block font-medium mb-1">Contraseña</label>
                <input type="password" id="password" name="password" class="w-full p-2 border rounded" placeholder="********">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Ingresar</button>
        </form>
    </div>
</body>
</html>