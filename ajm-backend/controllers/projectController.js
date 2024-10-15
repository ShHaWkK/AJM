const projectModel = require('../models/Project');

exports.createProject = async (req, res) => {
    const { name, description, budget, estimated_duration } = req.body;
    try {
        const projectId = await projectModel.createProject(req.user.id, name, description, budget, estimated_duration);
        res.status(201).json({ projectId, message: 'Projet créé avec succès' });
    } catch (error) {
        res.status(500).json({ message: 'Erreur lors de la création du projet' });
    }
};

exports.getUserProjects = async (req, res) => {
    try {
        const projects = await projectModel.getProjectsByUserId(req.user.id);
        res.json(projects);
    } catch (error) {
        res.status(500).json({ message: 'Erreur lors de la récupération des projets' });
    }
};
