.PHONY: install test format analyse serve migrate

install:
	composer install
	cp -n .env.example .env || true
	php artisan key:generate

test:
	composer test

format:
	composer format

analyse:
	composer analyse

serve:
	php artisan serve

migrate:
	php artisan migrate
