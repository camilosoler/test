<!doctype html>
<html>
<head>
    <title>Login</title>

    <style>
        .boton {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
        
    </style>
</head>
<body>
    <h1>Inicio de Sesión</h1>
    <form method="POST" action="/login1">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Contraseña">
        <button type="submit" class="boton"Entrar</button>
    </form>
</body>
</html>