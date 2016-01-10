# Resmin-Api


### Installation

Install dependencies

    composer install --prefer-dist
    
Configure your parameters such as database    

    edit "app/config/parameters.yml" file
    
Run with built-in web server
     
     php app/console server:run
     
### Documentation
     
After running server you can access api documentation via
        
    http://your_url:your_port/api/doc
    
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