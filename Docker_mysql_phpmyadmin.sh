# Borrar los docker si existen
docker rm mi_mysql -f
docker rm mi_admin -f

docker network rm redmysql

# Crear una red que une al docker de mysql con el docker de phpmyadmin
docker network create redmysql

# Crear dockers publicos en el puerto 3306

docker run -d --name mi_mysql -p 3306:3306 -e MYSQL_ROOT_PASSWORD=test --network redmysql mysql:latest

# Crear docker phpmyadmin

docker run --name mi_admin -d -e PMA_HOST=mi_mysql -p 8080:80 --network redmysql phpmyadmin:latest

# Ejecutar la consola de mysql como root
# docker exec -it mysql_1 mysql -u root -ptest
