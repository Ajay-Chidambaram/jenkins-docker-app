pipeline {
    environment {
        registry = "chidambaram27/chidambaram-repo"
        registryCredential = 'docker'
        dockerImage = ''
    }

    agent {
        label "slave"
    }

    stages {
        stage('Clean-up') {
            steps {
                script {
                    try {
                        sh 'docker-compose -f /home/ubuntu/jenkins_slave/workspace/task/jenkins-docker-app/docker-compose.yml down'
                    } catch(Exception e) {
                        echo "Error ... " + e.toString()
                    }
                }
            }
        }

        stage('Clone') {
            steps {
                script {
                    git branch: 'main', url:'https://github.com/Ajay-Chidambaram/jenkins-docker-app.git'
                }
            }
        }

        stage('Build') {
            steps {
                sh 'docker build -t phpimg:latest /home/ubuntu/jenkins_slave/workspace/task/jenkins-docker-app/src/'
            }
        }

        stage('Deploy') {
            steps {
                sh 'docker-compose -f /home/ubuntu/jenkins_slave/workspace/task/jenkins-docker-app/docker-compose.yml up -d'
            }
        }
    }
}
