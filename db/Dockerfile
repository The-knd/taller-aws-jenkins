FROM mysql:8.0.35
ENV MYSQL_ROOT_PASSWORD=rootpassword
ENV MYSQL_DATABASE=crud_db
COPY init.sql /docker-entrypoint-initdb.d/
