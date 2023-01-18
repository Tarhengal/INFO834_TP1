# INFO 834 - TP1

## But du TP :

1. Créer un dépôt Git sur Github pour le projet
2. Cloner votre projet sur votre machine
3. Créer dans votre dossier public_html (serveur distant PhPMyAdmin de l'école ou serveur local
sur votre ordinateur) un dossier « EtuServices » qui contiendra les fichiers 3 pages web qui nous
intéressent : accueil.php, login.php et services.php.
4. Créer sur votre BD MySQL une table utilisateurs pour stocker leur nom, leur prénom, leur
email et leur mot de passe.
5. Lancer le serveur Redis.
6. En utilisant votre environnement Python préféré (Idle, Spyder...), utiliser la bibliothèque Redis
(https://redis-py.readthedocs.io/en/latest/) après l'avoir installée.
7. Écrire le programme Python qui permet de lancer un client Redis pour la gestion des
connexions et utilisations des services Vente et Achat. A chaque fois que l’utilisateur se connecte
sur la page web de connexion, le serveur web vérifie si l'utilisateur est autorisé à se connecter et à
accéder aux services.
1/2
8. Si l'utilisateur est connu, des informations de connexion seront fournies à votre programme
Python qui à son tour demande à Redis de gérer le nombre de connexions. L'incrémentation ne se
fera que si l'utilisateur n'a pas dépassé les 10 connexions dans une fenêtre de 10mn. Dans le cas
contraire, la connexion ne sera pas autorisée.
9. Tester par l’intermédiaire de redis-cli et de votre serveur que tout fonctionne correctement.

## 