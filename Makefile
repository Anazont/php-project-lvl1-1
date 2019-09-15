install:
		composer install

lint:
		composer run-scripts phpcs -- --standard=PSR12 src bin