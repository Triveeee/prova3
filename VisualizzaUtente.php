<?php
    $codice = $_POST["codice"];
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $indirizzo = $_POST["indirizzo"];
    $localhost = "localhost";
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_nome = "my_database";
    $tab_nome = "utenti";

    //conessione al server
        $conn = new mysqli($host , $username , $password , $db_nome);
        if($conn ->connect_errno){
            echo "Impossibile connettersi al server: ". $conn ->connect_errno;
            exit;
        }
        else {
            //comandi SQL

            $sql =  "SELECT * FROM $tab_nome";
            $result = $conn -> query($sql);

            while($row = $result -> fetch_assoc()){
                echo $row['codice']. " ".$row['nome']. " " .$row['cognome']. " " .$row['indirizzo'];
            }
        }
        $conn -> close();

?>