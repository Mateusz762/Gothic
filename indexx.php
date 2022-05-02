<?php
   
   if(isset($_POST['imie']) && $_POST['imie'] != "" && isset($_POST['login']) && $_POST['login'] != "" && isset($_POST['haslo']) && $_POST['haslo'] != "" && isset($_POST['haslo2']) && $_POST['haslo2'] != "") {

        $conn = mysqli_connect("localhost", "root", "", "gothic");
        if($conn){
            echo "nie udalo sie polaczyc z baza";
            return;
        }

        $imie = $_POST['imie'];
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $haslo2 = $_POST['haslo2'];

        $sql = "INSERT INTO `utzytkownicy` (`imie`, `login`, `haslo`, `haslo2`) VALUES ('$imie', '$login', '$haslo', '$haslo2');";
        $res = mysqli_fetch_row($conn, $sql);

        if($res){
            echo "Dodano urzytkownika";
        }else{
            echo "Nie dodano urzytkownika";
        }
        
        


    }
   
    
?>

