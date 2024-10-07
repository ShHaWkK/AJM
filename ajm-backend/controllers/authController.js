// controllers/authController.js
const bcrypt = require('bcryptjs');
const jwt = require('jsonwebtoken');
const db = require('../config/db');
require('dotenv').config();

exports.register = async (req, res) => {
    const { name, email, password } = req.body;
    const hashedPassword = await bcrypt.hash(password, 10);
    db.query(
        'INSERT INTO users (name, email, password) VALUES (?, ?, ?)',
        [name, email, hashedPassword],
        (err, results) => {
            if (err) return res.status(500).json({ error: 'Database error' });
            res.status(201).json({ message: 'User registered' });
        }
    );
};

exports.login = (req, res) => {
    const { email, password } = req.body;
    db.query(
        'SELECT * FROM users WHERE email = ?',
        [email],
        async (err, results) => {
            if (err || results.length === 0) {
                return res.status(400).json({ error: 'User not found' });
            }
            const user = results[0];
            const isMatch = await bcrypt.compare(password, user.password);
            if (!isMatch) return res.status(400).json({ error: 'Invalid credentials' });
            
            const token = jwt.sign({ id: user.id, email: user.email }, process.env.JWT_SECRET, { expiresIn: '1h' });
            res.json({ token });
        }
    );
};
