install:
	composer install
brain-games:
	php bin/brain-games
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even:
	composer exec brain-even
brain-calc:
	composer exec brain-calc
brain-gcd:
	composer exec brain-gcd
brain-progression:
	composer exec brain-progression
brain-prime:
	composer exec brain-prime