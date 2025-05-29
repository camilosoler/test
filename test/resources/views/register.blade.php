<!doctype html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
    <form method="POST" action="/register">
        @csrf
        <input type="text" name="name" placeholder="Nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Contraseña">
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
