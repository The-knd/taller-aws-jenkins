pipeline {
    agent {
            label 'App'
    }

    stages {
        stage('Clean Docker Environment') {
            steps {
                script {
                    // Detiene todos los contenedores en ejecución y elimina todos los contenedores detenidos
                    sh '''
                    if [ "$(sudo docker ps -q)" ]; then
                        sudo docker stop $(sudo docker ps -q)
                    fi

                    if [ "$(sudo docker ps -a -q)" ]; then
                        sudo docker rm $(sudo docker ps -a -q)
                    fi
                    '''
                }
            }
        }

        // stage('Check Apache Status') {
        //     steps {
        //         script {
        //             def status = sh(script: 'systemctl is-active apache2', returnStatus: true)
        //             if (status != 0) {
        //                 echo 'Apache is not running, starting it...'
        //                 sh 'sudo systemctl start apache2'
        //             } else {
        //                 echo 'Apache is already running.'
        //             }
        //         }
        //     }
        // }

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
                    sh 'sudo docker-compose up -d'
                }
            }
        }

        stage('Ver Logs de Contenedor') {
            steps {
                script {
                    sh 'sudo docker-compose logs'
                }
            }
        }
    }
}
