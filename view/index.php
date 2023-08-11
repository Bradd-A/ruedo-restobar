<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md text-center flex flex-col items-center p-8">
        <div class="mb-6">
            <img src="../img/iconlogin.png" alt="icono-login" class="w-32 h-32 object-contain mx-auto">
        </div>
        <form action="dashboard.php" class="w-full max-w-xl mx-auto">
            <div class="mb-4">
                <label for="email" class="text-left block font-medium mb-1">Correo electrónico</label>
                <input type="email" id="email" name="email" class="w-full p-3 border rounded" placeholder="correo@example.com">
            </div>
            <div class="mb-4">
                <label for="password" class="text-left block font-medium mb-1">Contraseña</label>
                <input type="password" id="password" name="password" class="w-full p-3 border rounded" placeholder="********"> 
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded hover:bg-blue-600">Ingresar</button> 
        </form>
    </div>
</body>
</html>
