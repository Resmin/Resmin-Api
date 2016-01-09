# Resmin-Api

# Installation

# Doctrine

Importing tables

    php app/console doctrine:mapping:import ResminApiBundle annotation
    
Validating entities

    php app/console doctrine:schema:validate
    
Creating getters/setters after entity changes

    php app/console doctrine:generate:entities ResminApiBundle