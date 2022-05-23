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

            $sql = "INSERT INTO  $tab_nome(codice , nome , cognome , indirizzo)";
            $sql.= " VALUES ( $codice , '$nome' , '$cognome' , '$indirizzo')";
            if ($conn ->query($sql)){
                echo "Utente aggiunto correttamente";
            }
            else {
                echo "Errore nell'inserimento";
            }

        }
        $conn -> close();

?>