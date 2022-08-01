BLACK		:= $(shell tput -Txterm setaf 0)
RED		:= $(shell tput -Txterm setaf 1)
GREEN		:= $(shell tput -Txterm setaf 2)
YELLOW		:= $(shell tput -Txterm setaf 3)
LIGHTPURPLE	:= $(shell tput -Txterm setaf 4)
PURPLE		:= $(shell tput -Txterm setaf 5)
BLUE		:= $(shell tput -Txterm setaf 6)
WHITE		:= $(shell tput -Txterm setaf 7)
RESET		:= $(shell tput -Txterm sgr0)

COMPOSE_FILE=./srcs/docker-compose.yml

all: start

start:
	@echo "$(GREEN)Building files for volumes ... $(RESET)"
	@mkdir -p ./home/${USER}/data/wp
	@mkdir -p ./home/${USER}/data/db
	@echo "$(GREEN)Building containers ... $(RESET)"
	@docker-compose -f $(COMPOSE_FILE) up --build

up:
	@echo "$(GREEN)Building files for volumes ... $(RESET)"
	@mkdir -p ./home/${USER}/data/wp
	@mkdir -p ./home/${USER}/data/db
	@echo "$(GREEN)Building containers in background ... $(RESET)"
	@docker-compose -f $(COMPOSE_FILE) up -d --build

debug:
	@echo "$(GREEN)Building files for volumes ... $(RESET)"
	@mkdir -p ./home/${USER}/data/wp
	@mkdir -p ./home/${USER}/data/db
	@echo "$(GREEN)Building containers with log information ... $(RESET)"
	@docker-compose -f $(COMPOSE_FILE) --verbose up

ps:	
	@echo "$(PURPLE)Listing all containers ... $(RESET)"
	docker ps -a

v:
	@echo "$(PURPLE)Listing volumes ... $(RESET)"
	docker volume ls

nt:
	@echo "$(PURPLE)Listing volumes ... $(RESET)"
	docker network ls

lg:
	@echo "$(PURPLE)Listing logs of mariadb ... $(RESET)"
	@-docker logs mariadb
	@echo "$(PURPLE)Listing logs of ngnix ... $(RESET)"
	@-docker logs ngnix
	@echo "$(PURPLE)Listing logs of wordpress ... $(RESET)"
	@-docker logs wordpress

st:
	@echo "$(PURPLE)DASHBOARD_____ $(RESET)"
	@echo "$(YELLOW)_CONTAINERS___ $(RESET)"
	@-docker ps -a
	@echo "$(YELLOW)_VOLUMES___ $(RESET)"
	@-docker volume ls
	@echo "$(YELLOW)_NETWORKS___ $(RESET)"
	@-docker network ls

down:
	@docker-compose -f $(COMPOSE_FILE) down

re:
	@docker-compose -f $(COMPOSE_FILE) up --build

clean:
	@echo "$(RED)Stopping containers ... $(RESET)"
	@docker-compose -f $(COMPOSE_FILE) down
	@-docker stop `docker ps -qa`
	@-docker rm `docker ps -qa`
	@echo "$(RED)Deleting all images ... $(RESET)"
	@-docker rmi -f `docker images -qa`
	@echo "$(RED)Deleting all volumes ... $(RESET)"
	@-docker volume rm `docker volume ls -q`
	@echo "$(RED)Deleting all network ... $(RESET)"
	@-docker network rm `docker network ls -q`
	@echo "$(RED)Deleting all data ... $(RESET)"
	@sudo rm -rf ./home/${USER}/data/wp
	@sudo rm -rf ./home/${USER}/data/db
	@echo "$(RED)Deleting all $(RESET)"

hosts:
	sudo cat /etc/hosts

.PHONY: start up debug ps v nt st lg down re clean hosts