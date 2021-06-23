<?php 
    include('./config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Languages</title>
</head>
<body>
    <?php echo $lang['greeting'] ?>
    <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
    <a href="index.php?lang=heb"><?php echo $lang['lang_heb'] ?></a>
</body>
</html>