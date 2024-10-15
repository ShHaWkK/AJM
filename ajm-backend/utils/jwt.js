// utils/jwt.js
const jwt = require('jsonwebtoken');

exports.sign = (payload, secret, options) => jwt.sign(payload, secret, options);

exports.verify = (token, secret) => {
    try {
        return jwt.verify(token, secret);
    } catch (err) {
        return null;
    }
};
