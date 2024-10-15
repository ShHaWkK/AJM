const mysql = require('mysql2');
require('dotenv').config();

const connectionConfig = {
    host: process.env.DB_HOST,
    user: process.env.DB_USER,
    password: process.env.DB_PASS,
    database: process.env.DB_NAME,
};

let connection;

function handleDisconnect() {
    connection = mysql.createConnection(connectionConfig);
    
    connection.connect((err) => {
        if (err) {
            console.error('Error connecting to the database:', err);
            setTimeout(handleDisconnect, 2000); // Reconnexion après 2 secondes en cas d'erreur
        } else {
            console.log('Connected to the database');
        }
    });

    connection.on('error', (err) => {
        console.error('Database error:', err);
        if (err.code === 'PROTOCOL_CONNECTION_LOST') {
            handleDisconnect(); // Reconnecte en cas de perte de connexion
        } else {
            throw err;
        }
    });
}

handleDisconnect();

module.exports = connection;
