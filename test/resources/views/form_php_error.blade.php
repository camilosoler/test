<!doctype html>
<html>
<head>
    <title>Formulario PHP Error</title>
</head>
<body>
    <h1>Formulario con error de PHP</h1>
    @php
        non_existent_php_function(); // Esto generará un error de PHP
    @endphp
    <form>
        <input type="text" name="nombre">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
