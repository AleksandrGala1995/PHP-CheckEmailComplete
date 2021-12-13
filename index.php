<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть e-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
   
    $emailPattern= "/^[a-zA-Z0-9\.\-\_]+@([a-zA-Z0-9\-]+\.)+[A-Za-z0-9\-]{2,4}$/";
   if (preg_match($emailPattern, $email))
   {
        echo "E-mail правильний"; 
   } else 
   {
      echo "E-mail неправильний"; 
   }
}
?>

</body>
</html>