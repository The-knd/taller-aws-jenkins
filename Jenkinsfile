pipeline {
    agent {
        label 'App'
    }

    stages {
        stage('Checkout Code') {
            steps {
                // Clonar el repositorio desde GitHub
                git url: 'https://github.com/The-knd/taller-aws-jenkins.git', branch: 'main'
            }
        }

        stage('Build Docker Images') {
            steps {
                script {
                    // Construir las imágenes Docker
                    sh 'docker-compose build'
                }
            }
        }

        stage('Deploy Application') {
            steps {
                script {
                    // Desplegar la aplicación usando docker-compose
                    sh 'docker-compose up -d'
                }
            }
        }

        stage('Run Tests') {
            steps {
                script {
                    // Aquí podrías agregar pruebas automatizadas si las tienes
                    echo 'Running tests...'
                }
            }
        }
    }

    post {
        always {
            // Mostrar los contenedores en ejecución
            sh 'docker ps'
        }
        success {
            echo 'Deployment successful!'
        }
        failure {
            echo 'Deployment failed.'
        }
    }
}
