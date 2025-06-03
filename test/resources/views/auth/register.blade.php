<!doctype html>
<html>
<head>
    <title>Registro</title>
    <style>
        .boton {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
        
    </style>
</head>
<body>
    <h1>Registro</h1>
    <form method="POST" action="/register">
        @csrf
        <input type="text" name="name" placeholder="Nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Contraseña">
        <button type="submit" class="boton">Registrarse</button>
    </form>
</body>
</html>