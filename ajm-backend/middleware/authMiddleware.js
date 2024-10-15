const jwt = require('jsonwebtoken');
const authConfig = require('../config/auth');

module.exports = (req, res, next) => {
    const token = req.headers['authorization'];
    
    if (!token) {
        return res.status(403).send({ message: 'Aucun token fourni.' });
    }

    jwt.verify(token, authConfig.secret, (err, decoded) => {
        if (err) {
            return res.status(401).send({ message: 'Échec de l\'authentification.' });
        }

        req.user = decoded;
        next();
    });
};
