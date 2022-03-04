
docker network create redmysql

# Borrar los docker si existen

docker rm mi_mysql -f

# Crear dockers publicos en el puerto 3306

docker run -d --name mi_mysql -p 3306:3306 -e MYSQL_ROOT_PASSWORD=Monitor?2 --network redmysql mysql:latest

# Crear docker phpmyadmin

docker run --name mi_admin -d -e PMA_HOST=mi_mysql -p 8080:80 --network redmysql phpmyadmin:latest

# Ejecutar la consola de mysql como root
# docker exec -it mysql_1 mysql -u root -pMonitor?2
