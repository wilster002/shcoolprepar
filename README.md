SchoolPrepare
SchoolPrepare est une application web développée avec Symfony suivant l’architecture MVC. Elle propose une séparation claire entre l’espace Enseignant et l’espace Étudiant.



1. Technologies utilisées
- PHP
- Symfony
- Composer
- Git


2. Architecture du projet
Le projet respecte l’architecture MVC (Modèle - Vue - Contrôleur) :
• Model : Structure des données et logique métier.
• View : Templates Twig pour l’interface utilisateur.
• Controller : Gestion des routes et de la logique applicative.


4. Fonctionnalités actuelles
• Page d’accueil dynamique.
• Accès à l’espace Enseignant.
• Accès à l’espace Étudiant.
• Organisation des contrôleurs et templates.


6. Installation et exécution
   
Étape 1 : Cloner le projet
git clone https://github.com/wilster002/shcoolprepar.git
cd shcoolprepar

Étape 2 : Installer les dépendances
composer install

Étape 3 : Lancer le serveur
symfony serve

Puis ouvrir : http://127.0.0.1:8000

8. Structure du projet
src/
   └── Controller/
templates/
config/
public/


10. Diagrammes
• Diagramme de cas d’utilisation.
• Diagramme Entité–Relation préliminaire.


12. Dépôt Git
Lien du dépôt :
https://github.com/wilster002/shcoolprepar.git


14. Auteur
Projet réalisé dans le cadre d’un travail académique.
