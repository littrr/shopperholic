#!/usr/bin/env groovy

node('master') {
    stage('Build') {
        git url: 'https://NtimYeboah@bitbucket.org/NtimYeboah/shopperholic.git'

        // Start services (Let docker-compose build containers for testing)
        sh "./develop up -d"

        // Get composer dependencies
        sh "./develop composer install"

        // Create .env file for testing
        sh 'cp .env.example .env'
        sh './develop artisan key:generate'
        sh 'sed -i "s/REDIS_HOST=.*/REDIS_HOST=redis/" .env'
        sh 'sed -i "s/CACHE_DRIVER=.*/CACHE_DRIVER=redis/" .env'
        sh 'sed -i "s/SESSION_DRIVER=.*/SESSION_DRIVER=redis/" .env'
    }
    stage('Test') {
        sh "APP_ENV=testing ./develop test"
    }
}