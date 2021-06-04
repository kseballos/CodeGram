pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                //snDevOpsStep()
                echo "Building"
                //sh 'mvn -X clean install -DskipTests
                //git branch: 'master', credentialsId: 'e99c18ec-1db5-4a2a-a7a7-69b730fcbf14', url: 'https://github.com/kseballos/CodeGram.git'
                       
            }          
        }
        stage('Publish to UAT') {
            steps {
                //snDevOpsStep()
                echo "Testing"
                //sh 'mvn test'
               }
        }
        stage('Jenkins Deploy UAT') {
            steps {
               echo "Create Artifact"
               //sh 'mvn package'
            }
        }
        stage('Publish to PROD') {
            steps {
                //snDevOpsStep()
                snDevOpsChange(changeRequestDetails: """
                {
                     "setCloseCode": false,
                     "attributes": {
                               "start_date": "2021-06-30 08:00:00"
                               "end_date": "2021-07-02 08:00:00"
                               "short_description": "Sample description for change",
                               "description": "created a story"
                              }
                          }
                      )

    }
}
