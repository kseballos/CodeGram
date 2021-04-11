pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                snDevOpsStep()                        
            }          
        }
        stage('Publish to UAT') {
            steps {
                snDevOpsStep()
                snDevOpsChange()
               }
        }
        stage('Jenkins Deploy UAT') {
            steps {
                snDevOpsStep()                             
            }
        }
        stage('Publish to PROD') {
            steps {
                snDevOpsStep()
                snDevOpsChange()
                }
        }
    }
}
