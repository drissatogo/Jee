package com.drissa.servlet;

import com.example.models.Utilisateur;
import com.example.dao.UtilisateurDAO;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

@WebServlet("/accueil")
public class MonServlet extends HttpServlet {
    
	private static final long serialVersionUID = 1L;

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException{
		//List<Utilisateur> li= new  ArrayList<>();      
		String nom = request.getParameter("nom");
        String prenom = request.getParameter("prenom");
        String pseudo = request.getParameter("pseudo");
        String email = request.getParameter("email");
        String motDePasse = request.getParameter("motDePasse");
        
        
        
       
        // Création d'un nouvel utilisateur
        Utilisateur utilisateur = new Utilisateur(nom, prenom, pseudo, email, motDePasse);

        // Ajout de l'utilisateur à la liste des utilisateurs
        UtilisateurDAO.ajouterUtilisateur(utilisateur);

        // Stockage de l'utilisateur dans la session
        request.getSession().setAttribute("utilisateur", utilisateur);

        // Redirection vers la page d'accueil
     this.getServletContext().getRequestDispatcher("/WEB-INF/Accueil.jsp").forward(request, response);
    }
}
