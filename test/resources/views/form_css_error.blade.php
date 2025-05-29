<!doctype html>
<html>
<head>
    <title>Formulario CSS Error</title>
    <style>
        .boton {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
        /* Falta la llave de cierre para provocar un error de CSS */
    </style>
</head>
<body>
    <h1>Formulario con error de CSS</h1>
    <form>
        <input type="text" name="nombre">
        <button type="submit" class="boton">Enviar</button>
    </form>
</body>
</html>
