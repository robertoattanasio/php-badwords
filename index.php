<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

<?php 
    $paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis nemo ad veniam doloribus reprehenderit debitis eius voluptates mollitia aperiam. Inventore dolor veniam repellendus debitis magni voluptatem suscipit explicabo recusandae similique. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, quidem ut eos mollitia eveniet sint iusto fugiat fugit deserunt, possimus nihil quaerat natus saepe facere molestiae? Sint quia inventore voluptatum.';
    $badWord = $_GET['badWord'];
?>

<h1>La parola da oscurare sarà '<?php echo $badWord;?>'</h1>

<p>
    <?php
    echo str_replace($badWord,'***',$paragraph);
    ?>
</p>

<h3>La lunghezza del paragrafo è <?php echo strlen($paragraph);?> caratteri</h3>
    
</body>
</html>