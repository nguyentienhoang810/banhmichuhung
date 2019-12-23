.PHONY: build
build:
	docker-compose build && docker-compose up -d

.PHONY: run
run: 
	docker-compose up -d

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