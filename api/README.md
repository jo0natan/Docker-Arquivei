

git clone https://github.com/DanielArturoAlejoAlvarez/RESTFull-Laravel-8.5-Eloquent-API-Resources[NAME APP]



docker exec -it docker_php-fpm_1 php artisan migrate
docker exec -it docker_php-fpm_1 php artisan db:seed





get nfe by chave

curl -X GET http://127.0.0.1:27000/arquivei?busca={chave}


get all nfes
curl -X GET http://127.0.0.1:27000/arquivei
