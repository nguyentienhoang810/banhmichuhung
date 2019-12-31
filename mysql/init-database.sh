#!/usr/bin/env bash
mysql -u root -proot db_banhang_docker < "/docker-entrypoint-initdb.d/db_banhang.sql"