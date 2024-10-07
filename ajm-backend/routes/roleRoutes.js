// routes/roleRoutes.js
const express = require('express');
const router = express.Router();
const roleController = require('../controllers/roleController');

// Créer un rôle
router.post('/create', roleController.createRole);

// Associer un rôle à un utilisateur
router.post('/assign', roleController.assignRoleToUser);

// Récupérer tous les rôles
router.get('/', roleController.getRoles);

module.exports = router;
