.DEFAULT_GOAL := help
.PHONY: help
help: ## Affiche cette aide
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: helpers
helpers: ## Run helpers for IDE's
	php artisan ide-helper:generate
	php artisan ide-helper:models -F helpers/ModelHelper.php -M
	php artisan ide-helper:meta

.PHONY: pint
pint: ## Run format with Laravel Pint
	./vendor/bin/pint

.PHONY: prettier
prettier: ## Run format with Prettier
	npx prettier --write resources/js

format: pint prettier ## Run all formaters

.PHONY: phpstan
phpstan: ## Run linter with Larastan
	./vendor/bin/phpstan analyse

.PHONY: eslint
eslint: ## Run linter with ESLint
	npx eslint --ext .js,.vue --ignore-path .gitignore --fix resources/js

lint: phpstan eslint ## Run all linters

.PHONY: pest
pest: ## Run tets with Pest
	./vendor/bin/pest --parallel

test: pest ## Run all tests

.PHONY: security-checker
security-checker: ## Run security check for composer dependencies
	./vendor/bin/security-checker security:check

.PHONY: npm-audit
npm-audit: ## Run security check for npm dependencies
	npm audit

security: security-checker npm-audit ## Run all

.PHONY: ziggy
ziggy: ## Generate routes for Vue
	php artisan ziggy:generate
	npx prettier --write resources/js/ziggy.js

.PHONY: zora
zora: ## Generate translations keys for Vue
	php artisan zora:generate
	npx prettier --write resources/js/zora.js

.PHONY: deploy
deploy: ## Deploy app to pingouin server
#git remote add pingouin daniel.mendesgo@pingouin.heig-vd.ch:/home/projart/2023/50/super/super-laravel
	git push pingouin main
