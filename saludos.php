<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>saludos</title>
</head>
<body>
    <div class = "tope">
        <h1>🤑¡Hola de nuevo!🦀</h1><br>
    </div>
    <div class="contenido">
        <form action="" method="POST">
            <label for="idioma">Elije un idioma</label>
            <br><br>
            <select name="idioma" id="idioma" required>
                    <option value="">-- Selecciona --</option>
                    <option value="es">Español</option>
                    <option value="en">Inglés</option>
                    <option value="fr">Francés</option>
                    <option value="it">Italiano</option>
                    <option value="de">Alemán</option>
                    <option value="ja">Japonés</option>
                </select>
            <button type="submit" name="calcular">Enviar Respuesta</button>
        </form>
        <?php 
            if( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular']) ) {
                $idioma = $_POST['idioma'];
                
                if( $idioma == 'es' )
                    echo "<h2>Hola tio chavalete</h2>";
                else if( $idioma == 'en' )
                    echo "<h2>Hello fellow american 🦅🦅</h2>";
                else if( $idioma == 'fr' )
                    echo "<h2>oui oui oui croissant Bonjour Mbappe</h2>";
                else if( $idioma == 'it' )
                    echo "<h2>Ciao ciao mama mia</h2>";
                else if( $idioma == 'de' )
                    echo "<h2>Hallo sovietic union mustache </h2>";
                else if( $idioma == 'ja' )
                    echo "<h2>Konnichiwa boom boom 🔥🎇</h2>";
                else
                    echo "<h2>eyeyey mas despacio velocista</h2>";
                    
            }
            
        ?>
        <br><br>
        <a href="#">volver a elegir</a>
        <br>
        <a href="index.php">Volver a la bienvenida</a>
    </div>
</body>
</html>