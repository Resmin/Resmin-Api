# Resmin-Api


### Installation

Install dependencies

    composer install --prefer-dist
    
Your parameters such as database, will be asked when you do composer install.
    
Run with built-in web server
     
     php app/console server:run
     
### Documentation
     
After running server you can access api documentation via
        
    http://your_url:your_port/api/doc
    
### Authentication    

First you need to get access token. Look "Auth" section at documentation.
 
If you want to access pages behind security, you have to send your access token with headers. Your header key is X-ACCESS-TOKEN
    
### Testing
    
We are using functional testing. Simply run for check all tests

    phpunit -c app/
    
For test spesific file you can add file path to your phpunit command
    
    phpunit -c app/ src/ResminApiBundle/Tests/YourTestFile.php

### Doctrine

Importing tables

    php app/console doctrine:mapping:import ResminApiBundle annotation
    
Validating entities

    php app/console doctrine:schema:validate
    
Creating getters/setters after entity changes

    php app/console doctrine:generate:entities ResminApiBundle
