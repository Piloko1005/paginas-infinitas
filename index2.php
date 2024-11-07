<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider Interactivo</title>
    <link rel="stylesheet" href="css/index2.css">
</head>
<body>
    <div class="container" id="container">
        <div class="info" id="info">
            <h1 id="title" class="title">Nombre del Cuento</h1>
            <p id="description" class="title">Informacion del cuento</p>
            <button onclick="alert('Botón clickeado')" class="title">Leer Cuento</button>
        </div>
        <div class="slider">
            <img src="imagen1.jpg" alt="Imagen 1" onclick="showInfo('Título 1', 'Descripción de la imagen 1', 'fondo1.jpg')">
            <img src="imagen2.jpg" alt="Imagen 2" onclick="showInfo('Título 2', 'Descripción de la imagen 2', 'fondo2.jpg')">
            <img src="imagen3.jpg" alt="Imagen 3" onclick="showInfo('Título 3', 'Descripción de la imagen 3', 'fondo3.jpg')">
        </div>
    </div>

    <script>
        function showInfo(title, description, backgroundImage) {
            document.getElementById('title').innerText = title;
            document.getElementById('description').innerText = description;
            document.getElementById('container').style.backgroundImage = `url(${backgroundImage})`;
        }
    </script>
</body>
</html>
