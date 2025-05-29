<!doctype html>
<html>
<head>
    <title>Formulario JS Error</title>
    <script>
        function submitForm() {
            nonExistentFunction(); // Esto producirá un error de JavaScript
        }
    </script>
</head>
<body>
    <h1>Formulario con error de JavaScript</h1>
    <form onsubmit="submitForm(); return false;">
        <input type="text" name="nombre">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
