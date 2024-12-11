<?php
// Configura la cabecera para que la página se muestre como HTML
header("Content-type: text/html");

// Configura la URL de la página a la que deseas redirigir
$url = "Mitologia_Coceza.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/loader2.css">
    <meta http-equiv="refresh" content="5;url=<?php echo $url; ?>">
    <script>
        // Alternativamente, usar JavaScript para redirigir después de 5 segundos
        setTimeout(function() {
            window.location.href = "<?php echo $url; ?>";
        }, 2000); // 5000 milisegundos = 5 segundos
    </script>
</head>
<body style="place-items: center; padding-top: 260px;">
        <div class="loader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        </div>
</body>
</html>