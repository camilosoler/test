<!doctype html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Inicio de Sesión</h1>
    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Contraseña">
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
