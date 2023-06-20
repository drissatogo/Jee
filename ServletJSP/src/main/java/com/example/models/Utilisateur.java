package com.example.models;

public class Utilisateur {
    private String nom;
    private String prenom;
    private String pseudo;
    private String email;
    private String motDePasse;

    // Constructeur, getters et setters

    public Utilisateur(String nom, String prenom, String pseudo, String email, String motDePasse) {
        this.setNom(nom);
        this.setPrenom(prenom);
        this.setPseudo(pseudo);
        this.setEmail(email);
        this.setMotDePasse(motDePasse);
    }

	

	public String getNom() {
		return nom;
	}

	public void setNom(String nom) {
		this.nom = nom;
	}

	public String getPrenom() {
		return prenom;
	}

	public void setPrenom(String prenom) {
		this.prenom = prenom;
	}

	public String getPseudo() {
		return pseudo;
	}

	public void setPseudo(String pseudo) {
		this.pseudo = pseudo;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getMotDePasse() {
		return motDePasse;
	}

	public void setMotDePasse(String motDePasse) {
		this.motDePasse = motDePasse;
	}

    // Autres méthodes si nécessaire
}
