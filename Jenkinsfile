pipeline {
    agent any

    stages {
        stage('Clone Repo') {
            steps {
                git 'https://github.com/The-knd/taller-aws-jenkins.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker-compose build'
            }
        }

        stage('Run Containers') {
            steps {
                sh 'docker-compose up -d'
            }
        }

        stage('Test') {
            steps {
                // Aquí puedes agregar pruebas para verificar que el contenedor esté en funcionamiento
                sh 'curl -f http://localhost:8080 || exit 1'
            }
        }
    }

    // post {
    //     always {
    //         sh 'docker-compose down'
    //     }
    // }
}
