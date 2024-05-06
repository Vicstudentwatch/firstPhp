<?php  
    define('ADMIN','Joseph Parmuat');
    $firstName1 = 'juliet ';
    $lastName1 = 'Wanjiru';
    $playNumber = 4.7;
    $playNumber++;

    $peaopleArray = array('John','James','Judy');
    $peaopleArray[] = 'Nancy';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ADMIN : <?php echo  ADMIN;?> </h1>
    <p>user 1 : <?php echo $firstName1.$lastName1; ?></p>
    <p><?php echo str_replace('l','j',$firstName1); ?></p>
    <p><?php echo strtoupper($firstName1); ?></p>
    <p>play number <?php echo floor($playNumber); ?></p>
    <p>Third Person : <?php echo $peaopleArray[3]; ?></p>
    <?php for($i=0;$i<5;$i++){ echo '<p>hi there</p>';} ?>
    
</body>
</html>