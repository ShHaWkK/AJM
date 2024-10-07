// routes/userRoutes.js
const express = require('express');
const router = express.Router();
const userController = require('../controllers/userController');

// Récupérer tous les utilisateurs
router.get('/', userController.getUsers);

// Récupérer les rôles d'un utilisateur spécifique
router.get('/:userId/roles', userController.getUserRoles);

module.exports = router;
