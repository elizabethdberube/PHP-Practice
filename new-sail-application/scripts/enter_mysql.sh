#!/bin/bash

cd "$(dirname "$0")"
cd ..

eval "$(cat .env)"

export MYSQL_PORT=$FORWARD_DB_PORT

MYSQL_ROOT_HOST=127.0.0.1 mysql -u root --password=$DB_PASSWORD 
