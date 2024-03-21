#!/usr/bin/env bash

mysql --user=root --password="$MYSQL_ROOT_PASSWORD" <<-EOSQL
    CREATE DATABASE IF NOT EXISTS appY;
    GRANT ALL PRIVILEGES ON \`appY%\`.* TO '$MYSQL_USER'@'%';
EOSQL
