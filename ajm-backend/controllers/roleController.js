// controllers/roleController.js
const db = require('../config/db');

// Créer un rôle
exports.createRole = (req, res) => {
    const { name, description } = req.body;
    db.query(
        'INSERT INTO roles (name, description) VALUES (?, ?)',
        [name, description],
        (err, results) => {
            if (err) return res.status(500).json({ error: 'Database error' });
            res.status(201).json({ message: 'Role created' });
        }
    );
};

// Associer un rôle à un utilisateur
exports.assignRoleToUser = (req, res) => {
    const { userId, roleId } = req.body;
    db.query(
        'INSERT INTO role_user (user_id, role_id) VALUES (?, ?)',
        [userId, roleId],
        (err, results) => {
            if (err) return res.status(500).json({ error: 'Database error' });
            res.status(200).json({ message: 'Role assigned to user' });
        }
    );
};

// Récupérer tous les rôles
exports.getRoles = (req, res) => {
    db.query('SELECT * FROM roles', (err, results) => {
        if (err) return res.status(500).json({ error: 'Database error' });
        res.json(results);
    });
};
