<?php
    if(isset($_POST["submit"])){
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $sexe = $_POST["sexe"];
        $age = $_POST["age"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $phoneform = "/^\+212([0-9]{9})/";
        $mailform = "/^[a-z]([a-z0-9])+(\.|-)?([a-z0-9]+)@([a-z0-9]+)\.([a-z]{2,4}$)/";

        if(!preg_match($phoneform,$tel) || !preg_match($mailform,$email) || !is_numeric($age) || is_numeric($nom) || is_numeric($prenom) || $age < 1){
            echo "Saisie incorrecte.";
        }
        else{
            $file = fopen("list.txt","a+");

            fputs($file,$nom." ".$prenom." ".$age." ".$sexe." ".$tel." ".$email."\n");
            fclose($file);
            echo "Enregistrement avec success.";
        }
        
    }
?>