<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8" %>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="accueil" method="post">
        <div><label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br><br>
        <label for="pseudo">Pseudo :</label>
        <input type="text" name="pseudo" id="pseudo" required><br><br>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="motDePasse">Mot de passe :</label>
        <input type="password" name="motDePasse" id="motDePasse" required><br><br>
        <label for="motDePasseConfirmation">Confirmer le mot de passe :</label>
        <input type="password" name="motDePasseConfirmation" id="motDePasseConfirmation" required><br>
        <input type="submit" value="S'inscrire"></div>
    </form>
    <a href="login"> A la page Login</a>
    
   
</body>
</html>
