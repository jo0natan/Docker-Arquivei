# Docker-Arquivei
 Laravel Docker Compose Arquivei - Jonatan Villela
 Laravel 7.30~
 PHP 7.3~

#how to in Linux

1 - git clone https://github.com/jo0natan/Docker-Arquivei.git

2 - cd Docker-Arquivei

(Attention:if you are using Debian distro do not use sudo. Use sudo only on Ubuntu)
3 - sudo docker-compose up -d   

4 - sudo docker exec -it laravel-arquivei bash

5 - composer install

6 - php artisan migrate
 
7 - php artisan db:seed

8 -  chown www-data:www-data ./storage/framework/cache/data/ && chown www-data:www-data ./storage/logs/*


Now you are all ready

# tests:

via curl get nfe by key

curl -X GET http://127.0.0.1:27000/api/arquivei?busca={chave}


get all nfe's

curl -X GET http://127.0.0.1:27000/api/arquivei
