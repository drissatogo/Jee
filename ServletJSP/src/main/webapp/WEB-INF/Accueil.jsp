<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8" %>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body style= "background-color:gray">
<%
    String nom = request.getParameter("nom");
  %>
  <h1>Bienvenue <%= nom %> !</h1> 
  <form action="../MonServlet2" method="post"><input type="button" value="Deconecter"/></form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">EMAIL</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">${utilisateur.nom}</th>
      <td>${utilisateur.prenom}</td>
      <td>${utilisateur.email}</td>
    </tr>
   
  </tbody>
</table>
</body>
</html>
