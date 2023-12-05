-include .env

# Fallback

help:
	@make --help

# Image

envirenments:
	@cp .env.template .env

build:
	@docker build -t ${IMAGE_NAME} .

remove:
	@docker rm ${IMAGE_NAME}

run:
	@docker run --rm -d -it --name ${IMAGE_NAME} \
	-v ./src:/var/app/src \
	-v ./vendor:/var/app/vendor \
	-v ./composer.json:/var/app/composer.json \
	-v ./composer.lock:/var/app/composer.lock \
	${IMAGE_NAME}

stop:
	@docker stop ${IMAGE_NAME} 1> /dev/null

# Testing

test:
	@echo "\033[1;32m\n--- running phpstan ---\n\033[0m"
	@make -s test-stat
	@echo "\033[1;32m\n--- running phpunit ---\n\033[0m"
	@make -s test-unit

test-stat:
	@docker exec -t -u 1000 ${IMAGE_NAME} vendor/bin/phpstan analyze --level max src

test-unit:
	@docker exec -t -u 1000 ${IMAGE_NAME} vendor/bin/phpunit --colors="always" --do-not-cache-result --testdox src \
		&& echo "" || echo ""

# Connection

shell:
	@docker exec -it -u 1000 ${IMAGE_NAME} /bin/sh
