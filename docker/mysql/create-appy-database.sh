#!/usr/bin/env bash

mysql --user=root --password="$MYSQL_ROOT_PASSWORD" <<-EOSQL
    CREATE DATABASE IF NOT EXISTS appy;
    GRANT ALL PRIVILEGES ON \`appy%\`.* TO '$MYSQL_USER'@'%';
EOSQL
