pipeline {
    agent any

    stages {
        stage('Clonar Repositorio') {
            steps {
                git 'https://github.com/the-knd/taller-aws-jenkins.git'
            }
        }

        stage('Construir Imagen Docker') {
            steps {
                script {
                    dockerImage = docker.build("php-crud-app")
                }
            }
        }

        stage('Ejecutar Contenedor Docker') {
            steps {
                script {
                    dockerImage.run('-p 8080:80')
                }
            }
        }
    }
}
