# AJM

## Objectifs du Site
- Présenter les services : Mettre en avant les services de création de sites web, maintenance et sécurité.
- Faciliter la prise de contact : Permettre aux utilisateurs de soumettre des formulaires pour demander des devis et des projets.
- Gérer les commandes : Offrir aux utilisateurs la possibilité de suivre leurs commandes et d'interagir via un système de ticketing.

## Fonctionnalités Principales
### Page d'Accueil
- Présentation des services offerts.
- Témoignages de clients.
- Appel à l'action pour contacter ou demander un devis.

### Formulaire de Demande de Devis
 - Description du projet (cahier des charges).
 - Budget prévu.
 - Durée estimée du projet.
 - Confirmation d'envoi par email à l'utilisateur.

### Espace Utilisateur
- Inscription et Connexion : Système d'authentification sécurisé.
- Tableau de Bord :
    - Suivi des commandes en cours.
    - Historique des projets passés.
    - Accès à un système de ticketing pour support et questions.

### Système de Ticketing
- Création de tickets pour support technique et questions.
- Suivi de l'état des tickets (ouvert, en cours, résolu).
- Notifications par email pour les mises à jour de tickets.

### Section Blog/Actualités
- Articles sur les nouveautés technologiques, conseils en création web, etc.
- Fonctionnalité de commentaires pour interagir avec les utilisateurs.

### Contact et Support
- Formulaire de contact général.
- Informations de contact direct (email, téléphone).


### Arborescence Backend:
```
ajm-backend
├── config/
│   ├── database.js         # Configuration de la base de données
│   └── auth.js             # Configuration de l'authentification
├── controllers/
│   ├── authController.js   # Contrôleur pour l'authentification
│   ├── userController.js   # Contrôleur pour les opérations sur les utilisateurs
│   ├── projectController.js # Contrôleur pour les projets
│   ├── quoteController.js  # Contrôleur pour les devis
│   ├── orderController.js  # Contrôleur pour les commandes
│   ├── ticketController.js # Contrôleur pour les tickets de support
│   ├── paymentController.js # Contrôleur pour les paiements
│   ├── invoiceController.js # Contrôleur pour les factures
│   ├── feedbackController.js # Contrôleur pour les feedbacks
│   ├── chatController.js   # Contrôleur pour les messages de chat
│   ├── reportController.js # Contrôleur pour les rapports
│   └── socialLoginController.js # Contrôleur pour les connexions via réseaux sociaux
├── middleware/
│   ├── authMiddleware.js   # Middleware pour vérifier l'authentification
│   └── roleMiddleware.js   # Middleware pour vérifier le rôle de l'utilisateur
├── models/
│   ├── User.js             # Modèle pour les utilisateurs
│   ├── Role.js             # Modèle pour les rôles
│   ├── Project.js          # Modèle pour les projets
│   ├── Quote.js            # Modèle pour les devis
│   ├── Order.js            # Modèle pour les commandes
│   ├── Ticket.js           # Modèle pour les tickets
│   ├── Payment.js          # Modèle pour les paiements
│   ├── Invoice.js          # Modèle pour les factures
│   ├── Feedback.js         # Modèle pour les feedbacks
│   ├── Chat.js             # Modèle pour les chats
│   ├── SocialLogin.js      # Modèle pour les connexions sociales
│   └── Report.js           # Modèle pour les rapports
├── routes/
│   ├── authRoutes.js       # Routes pour l'authentification
│   ├── userRoutes.js       # Routes pour les utilisateurs
│   ├── projectRoutes.js    # Routes pour les projets
│   ├── quoteRoutes.js      # Routes pour les devis
│   ├── orderRoutes.js      # Routes pour les commandes
│   ├── ticketRoutes.js     # Routes pour les tickets de support
│   ├── paymentRoutes.js    # Routes pour les paiements
│   ├── invoiceRoutes.js    # Routes pour les factures
│   ├── feedbackRoutes.js   # Routes pour les feedbacks
│   ├── chatRoutes.js       # Routes pour les chats
│   ├── socialLoginRoutes.js # Routes pour les connexions via réseaux sociaux
│   └── reportRoutes.js     # Routes pour les rapports
├── utils/
│   ├── jwt.js              # Génération et vérification des tokens JWT
│   ├── email.js            # Envoi d'emails
│   └── logger.js           # Logger pour l'application
├── app.js                  # Point d'entrée principal de l'application
├── package.json            # Fichier des dépendances npm
└── README.md               # Documentation du projet
```