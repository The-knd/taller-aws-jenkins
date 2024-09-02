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

        stage('Deploy Application') {
            steps {
                script {
                    // Desplegar la aplicación usando docker-compose
                    sh 'sudo docker compose up -d --build'
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
            sh 'sudo docker ps'
        }
        success {
            echo 'Deployment successful!'
        }
        failure {
            echo 'Deployment failed.'
        }
    }
}
