<?php


include './inc/db.php';
include './inc/form.php';
$sql = 'SELECT * FROM user';
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<pre>';
print_r($user);
echo '</pre>';

mysqli_free_result($result);
mysqli_close($conn);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="Name" id="Name" placeholder="Name">
        <input type="text" name="lastname" id="lastname" placeholder="lastname">
        <input type="text" name="email" id="email" placeholder="email">
        <input type="submit" name="submit" value="send">
    </form>

    <?php foreach($users as $user4) : ?>
     <h1><?php echo htmlspecialchars($user4['Name']) ?></h1>
    <?php  endforeach; ?>
     
    <script src="./js/secript.js"></script>
</body>
</html>
