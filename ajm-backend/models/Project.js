const connection = require('../config/database');

exports.createProject = async (userId, name, description, budget, duration) => {
    const [result] = await connection.execute(
        'INSERT INTO projects (user_id, name, description, budget, estimated_duration) VALUES (?, ?, ?, ?, ?)',
        [userId, name, description, budget, duration]
    );
    return result.insertId;
};

exports.getProjectsByUserId = async (userId) => {
    const [rows] = await connection.execute(
        'SELECT * FROM projects WHERE user_id = ?',
        [userId]
    );
    return rows;
};
