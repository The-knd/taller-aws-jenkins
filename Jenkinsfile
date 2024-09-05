pipeline {
    agent {
            label 'App'
    }

    stages {
        stage('Clean Docker Environment') {
            steps {
                script {
                    // Detiene todos los contenedores en ejecución
                    sh """
                    if [ \$(docker ps -q) ]; then
                        sudo docker stop \$(docker ps -q)
                    fi
                    """
                    // Elimina todos los contenedores detenidos
                    sh """
                    if [ \$(docker ps -a -q) ]; then
                        sudo docker rm \$(docker ps -a -q)
                    fi
                    """
                }
            }
        }

        stage('Clonar Repositorio') {
            steps {
                git branch: 'main', url: 'https://github.com/The-knd/taller-aws-jenkins.git'
            }
        }

        stage('Construir Imagen Docker') {
            steps {
                script {
                    sh 'sudo docker build -t php-crud-app .'
                }
            }
        }

        stage('Ejecutar Contenedor Docker') {
            steps {
                script {
                     sh 'sudo docker run -p 8080:80 php-crud-app'
                }
            }
        }
    }
}
