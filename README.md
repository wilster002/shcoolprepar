                                                                   SchoolPrepare

                                                                   
SchoolPrepare est une application web de gestion pédagogique développée avec le framework Symfony. Elle est conçue pour offrir une interface fluide et distincte entre les enseignants et les étudiants, en suivant rigoureusement l'architecture MVC.

                                                             Technologies utilisées
Langage : PHP 7.4+
Framework : Symfony
Moteur de template : Twig
Gestionnaire de dépendances : Composer
Versionnage : Git

                                                               Architecture du projet
Le projet respecte le design pattern MVC pour une maintenance facilitée :
Modèle : Gestion des données (via Doctrine ORM à venir).
Vue (View) : Interfaces utilisateur développées avec Twig.
Contrôleur : Orchestration de la logique applicative et des routes.

                                                            Fonctionnalités actuelles
                                                            
Accueil Dynamique : Point d'entrée unique avec routage intelligent.
Espace Enseignant : Tableau de bord dédié à la gestion des cours et notes.
Espace Étudiant : Interface de consultation des ressources et résultats.
Routage Flexible : Utilisation des annotations PHP pour une gestion claire des URLs.

                                                    Installation et Exécution
                                                    
                                                    
Suivez ces étapes pour installer le projet localement :
Étape 1 : Cloner le dépôt
Bash
git clone https://github.com/wilster002/shcoolprepar.git
cd shcoolprepar
Étape 2 : Installer les dépendances
Bash
composer install
Étape 3 : Lancer le serveur local

Bash
symfony serve -d
# Ou si vous n'avez pas le CLI Symfony :
php -S 127.0.0.1:8000 -t public
Puis ouvrez votre navigateur à l'adresse : http://127.0.0.1:8000

                                                      Structure des dossiers
                                                      
Plaintext
src/
 └── Controller/      # Logique de contrôle (Accueil, Enseignant, etc.)
templates/            # Fichiers Twig (Vues HTML)
config/               # Configuration des routes et services
public/               # Point d'entrée (index.php, CSS, Images)

                                                        Diagrammes (Conception)
                                          
Cas d’utilisation : Analyse des interactions acteurs (Enseignant/Étudiant).
Entité–Relation (ERD) : Modélisation de la future base de données (Classes, Utilisateurs).

                                                            Auteur
                                                       
Wilster - Développement et architecture - Mon GitHub
