Hay que crear un archivo .env para poder desplegar el proyecto:

MYSQL_ROOT_PASSWORD=root
MYSQL_DATABASE=LMH_BD
MYSQL_USER=alumnoDAW
MYSQL_PASSWORD=passLMH

PMA_USER=${MYSQL_USER}
PMA_PASSWORD=${MYSQL_PASSWORD}

