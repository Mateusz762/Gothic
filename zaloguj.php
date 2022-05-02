<!doctype html>
<html>
<head>
     <meta charset="utf-8">
    <link rel="stylesheet" href="Stylee.css">
    <link rel="stylesheet" href="font-awesome-5.15.3/css/font-awesome.min.css">
    <title>Gothic</title>
</head>
<body>
<div class="login">
    <header>
        <h1>Gothic</h1>
    </header>
    <h2>Login:</h2>
    <form action="index.php" method="post">
    <div textbox>
      <input type="text" placeholder="login" name="login" value="">
      <input type="password" placeholder="haslo" name="haslo" value="">
    </div>
   <button>Zaloguj sie</button>
   <br />
   <a href="http://localhost/gothic/rejestracja.html">Rejestracja</a>
    </form>
</div>
<?php
 <?php
    
 require_once "connect.php";
 $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

 if($polaczenie->connect_errno!=0)
 {
     echo "Error:".$polaczenie->connect_errno. "Opis:".$polaczenie->connect_error;
 }else
 {
 $login = $_POST['login'];
 $haslo = $_POST['haslo'];

 $sql = "SELECT * FROM `uzytkownicy` WHERE user = 'Adam'AND pass = 'qwerty'";
 
 if($rezultat = $polaczenie->query($sql))
 {
     $ilu_userow = $rezultat->num_rows;
     if($ilu_userow>0){
         $wiersz = $rezultat->fetch_assoc();
         $user = $wiersz['user'];

         $rezultat->free_result();
         echo $user;
     }
 }else{
    

 }
 $polaczenie->close();
 }

?>
?>
<script>
    
</script>
</body>
</html>