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
        stage('Clone') {
            steps {
                git 'https://github.com/Ajay-Chidambaram/jenkins-docker-app.git'
            }
        }

        stage('Build') {
            steps {
                sh 'docker build -t phpimg:latest /home/ubuntu/jenkins_slave/workspace/task/jenkins-docker-app/src/'
            }
        }

        stage('Deploy') {
            steps {
                sh 'cd /home/ubuntu/jenkins_slave/task/jenkins-docker-app'
                sh 'docker-compose up -d'
            }
        }
    }
}
