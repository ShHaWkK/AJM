// controllers/userController.js
const db = require('../config/db');

// Récupérer tous les utilisateurs
exports.getUsers = (req, res) => {
    db.query('SELECT * FROM users', (err, results) => {
        if (err) return res.status(500).json({ error: 'Database error' });
        res.json(results);
    });
};

// Récupérer les rôles d'un utilisateur spécifique
exports.getUserRoles = (req, res) => {
    const { userId } = req.params;
    db.query(
        'SELECT r.name FROM roles r JOIN role_user ru ON r.id = ru.role_id WHERE ru.user_id = ?',
        [userId],
        (err, results) => {
            if (err) return res.status(500).json({ error: 'Database error' });
            res.json(results);
        }
    );
};
