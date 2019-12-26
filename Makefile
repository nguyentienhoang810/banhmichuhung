.PHONY: build
build:
	docker-compose build && docker-compose up -d

.PHONY: run
run: 
	docker-compose up -d

.PHONY: migrate
migrate:
	docker-compose exec php php artisan migrate

.PHONY: seed
seed:
	docker-compose exec php php artisan db:seed --class=add_user

.PHONY: dumpdb
dumpdb:
	docker exec -it mysqlcontainer mysqldump -uroot -proot db_banhang_docker > ./mysql/db_banhang.sql

.PHONY: down
down: 
	docker-compose down

.PHONY: initdb
initdb:
	chmod 0775 mysql/init-mysql.sh
	zsh mysql/init-mysql.sh

.PHONY: exedb
exedb:
	chmod 0775 mysql/exec-db.sh
	zsh mysql/exec-db.sh