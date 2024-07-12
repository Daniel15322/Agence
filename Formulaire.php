<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "elaiz_trading";


        try {
            $conn = new PDO("mysql: host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            echo "la connexion a echoué:" . $e->getMessage();
        }

        if (isset($_POST['envoyer']))
        {
            $nom = $_POST['Nom'];
            $postnom = $_POST['Postnom'];
            $prenom = $_POST['Prenom'];
            $date = $_POST['Date'];
            $lnaissance = $_POST['Nombre des colis'];
            $email = $_POST['Numero'];
            echo $nom ,"<br>";
            echo $postnom ,"<br>";
            echo $prenom ,"<br>";
            echo $date ,"<br>";
            echo $lnaissance ,"<br>";
            echo $email ,"<br>";
            
            $sql = ("INSERT INTO `client`(`Nom`, `Postnom`, `Prenom`, `Nombre des colis`, `Date`, `Numero`) VALUES(:Nom, :Postnom, :Prenom, :Date, :Nombre des colis, :Numero)");
            $stmt = $conn->prepare($sql);

            $stmt -> bindParam(':Nom', $nom);
            $stmt -> bindParam(':Postnom', $postnom);
            $stmt -> bindParam(':Prenom', $prenom);
            $stmt -> bindParam(':Date', $date);
            $stmt -> bindParam(':Nombre des colis', $lnaissance);
            $stmt -> bindParam(':Numero', $email);
                $stmt->execute();
            echo "INSCRIPTION REUSSIE";
        }

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="awesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>
<section class="formulaire" id="formulaire">
    <div class="titre noir">
        <h2 class="titre-texte"><span>   F</span>ormulaire  d'<span>I</span>nscription</h2>
    </div>
    <form action="" methode="POST">
    <form  class="form" id="form">
    <div class="formulaireform">
        <h3>Bien remplir le formulaire</h3>
        <div class="inputboite">
            <input type="text" placeholder="Nom" id="nom" name="nom">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation"></i>
            <small>message d'erreur</small>
        </div>
        <div class="inputboite">
            <input type="text" placeholder="Postnom" id="postnom" name="postnom">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation"></i>
            <small>message d'erreur</small>
        </div>
        <div class="inputboite">
            <input type="text" placeholder="Prenom" id="prenom" name="prenom">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation"></i>
            <small>message d'erreur</small>
        </div>
        <div class="inputboite">
            <label for="">Genre</label>
            <select  id="genre" name="genre">
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
        </div>
        <div class="inputboite">
            <input type="number" placeholder="Nombre de colis" id="lnaissance" name="lnaissance">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation"></i>
            <small>message d'erreur</small>
        </div>
        <div class="inputboite">
            <label for="">Date de naissance</label>
            <input type="date" placeholder="" id="date" name="datenaissance">
        </div>
        <div class="inputboite">
            <input type="number" placeholder="Numero de télephone" id="email" name="email">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation"></i>
            <small>message d'erreur</small>
        </div>
        <div class="inputboite">
            <input type="submit" value="envoyer" name="envoyer">
        </div>
    </div>
</form>
</form>
</section>
<script src="script2.js"></script>
<div class="copyright">
    <p> © copyright 2024 <a href="#">Kings DANIEL</a> Tout droit reservé</p>
</div>
</body>
</html>
