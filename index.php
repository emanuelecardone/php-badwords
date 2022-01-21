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
        $mio_lorem = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo ut nam quae quaerat dicta error, quidem numquam aut dolore veniam enim temporibus fugit eveniet earum explicabo ex excepturi perspiciatis. Ut.';
    ?>

    <!-- Sezione HTML -->
    <h2>Paragrafo Lorem:</h2>
    <p>
        <?php echo $mio_lorem ?>
    </p>
    <h3>Lunghezza paragrafo:</h3>
    <span><?php echo strlen($mio_lorem) ?></span>
</body>
</html>