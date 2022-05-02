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

    <?php
 if(isset($_GET["login"]) && $GET["haslo"] != ""){
    $conn = mysqli_connect('localhost', 'root', '', 'gothic'); 
 }else{
     echo "Witaj";
 }
 $login = $_GET['login'];
 $haslo = $_GET['haslo'];
 $sql = "SELECT login, haslo FROM utzytkownicy WHERE login = '$_GET[login]' AND  = '$GET[haslo] '";
 $res = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($res);
    echo "$row[0] $row[1]";
?>
</div>
<a href="http://localhost/gothic/index.php">Wyloguj</a>
<script>
    
</script>
</body>
</html>
