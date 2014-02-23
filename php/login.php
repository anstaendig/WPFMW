<?php
session_start();
require('datenbank.php');

class Login {
    
    public function checkLogin($user, $pw) {
    
        echo "Name: ".$user;
        echo "<br>Passwort: ".$pw; 
        // Neuen DB Handler, verbinde mit dieser und hole Datensatz
        $db = new DatenBank();
        $mysql = $db->connect();
        $sql = "SELECT * FROM benutzer WHERE name = '".$user."' AND passwort = '".$pw."'";
    
        // RETURN-WERT: Die Ressource oder false
        $result = $mysql->query($sql);
    
        /*
        $befehl = $mysql->query("SELECT version() AS version");
        $resultat = $befehl->fetch_object();
        echo "Wir arbeiten mit MySQL-Version {$resultat->version}";
        */
        
        // Überprüfen ob es sich um das gesuchte Obj handelt.
        if ($mysql->affected_rows == 1) {
                $row = $result->fetch_assoc();
                $_SESSION['name'] = $row['name'];
                $_SESSION['loggedin'] = true;
                $db->close();
                return true;
        }

        $db->close();
        return false;
    }
    
    public function holen() {
    
        $db = new DatenBank();
        $mysql = $db->connect();
        $sql = "SELECT * FROM benutzer";
        
        if ($mysql->affected_rows >=1) {
            $row = $result->fetch_assoc();
            echo "<br> hier aus db namae: ".$row["name"];
            echo "<br> hier aus db pw: ".$row["passwort"];
            $db-close();
            return true;
        }
        
    }
}

?>
