pipeline {
    agent any
    
    stages {
        stage('Clonar Repositorio') {
            steps {
                git 'https://github.com/tu-usuario/my-php-app.git'
            }
        }
        stage('Construir Imagen Docker') {
            steps {
                sh 'docker build -t my-php-app .'
            }
        }
        stage('Configurar Base de Datos') {
            steps {
                sh '''
                mysql -h your-rds-endpoint -u your-username -pyour-password -e "CREATE DATABASE IF NOT EXISTS your_database;"
                mysql -h your-rds-endpoint -u your-username -pyour-password your_database < sql/init.sql
                '''
            }
        }
        stage('Correr Aplicación en Docker') {
            steps {
                sh '''
                docker stop my-php-app || true
                docker rm my-php-app || true
                docker run -d -p 80:80 --name my-php-app my-php-app
                '''
            }
        }
    }
}
