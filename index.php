<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    
    <!-- Sezione PHP -->

    <?php
        // Paragrafo intero
        $mio_lorem = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo ut nam quae quaerat dicta error, quidem numquam aut dolore veniam enim temporibus fugit eveniet earum explicabo ex excepturi perspiciatis. Ut.';
        // Parola da censurare
        $censored_word = $_GET['censored'];
        // Stringa da sostituire per la censura
        $replacing_string = '***';
        // Paragrafo censurato
        $censored_lorem = str_replace($censored_word, $replacing_string, $mio_lorem);
    ?>


    <!-- Sezione HTML -->

    <!-- Lorem originale -->
    <h2>Paragrafo lorem:</h2>
    <p>
        <!-- Output variabile lorem -->
        <?php echo $mio_lorem; ?>
    </p>
    <h3>Lunghezza paragrafo:</h3>
    <!-- Output lunghezza lorem -->
    <span>
        <?php echo strlen($mio_lorem); ?>
    </span>
    <!-- Lorem censurato -->
    <h2>Paragrafo lorem con censura:</h2>
    <p>
        <?php echo $censored_lorem; ?>
    </p>
    <!-- Output lunghezza lorem censurato -->
    <span>
        <?php echo strlen($censored_lorem); ?>
    </span>
    <!-- Se uso ad esempio l'url localhost:8888/php-badwords/?censored=ipsum mi andrà a censurare la parola ipsum -->
</body>
</html>