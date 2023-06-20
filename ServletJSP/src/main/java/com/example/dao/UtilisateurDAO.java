package com.example.dao;

import com.example.models.Utilisateur;
import java.util.ArrayList;
import java.util.List;

public class UtilisateurDAO {
    private static List<Utilisateur> utilisateurs = new ArrayList<>();

    public static void ajouterUtilisateur(Utilisateur utilisateur) {
        utilisateurs.add(utilisateur);
    }

    public static List<Utilisateur> getUtilisateurs() {
        return utilisateurs;
    }
}
