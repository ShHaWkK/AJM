// config/auth.js
module.exports = {
    secret: process.env.JWT_SECRET,
    expiresIn: '1h',
  };
  