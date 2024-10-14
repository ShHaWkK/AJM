const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true,
  devServer: {
    port: 8084, // Spécifie le port 8084 pour le développement local
  }
})
