# PHP-Practice

## setup

` composer require laravel/sail --dev `

` php artisan sail:install `

#### add alias to .bashrc file
` alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail' `
and then restart your shell.

` composer install `

` sail up `

` npm i && npm run dev `


#### after sourcing schema and running seeds

` sail artisan migrate `

## start application

` sail up `

` npm run dev `

### if not using alias
` ./vendor/bin/sail up `
` npm run dev `

## troubleshooting
if migration doesn't complete run

` php artisan migrate:fresh `

then run again 

## inspecting models
 
 to inspect individuals models run
 
 ` php artisan model:show <name of model>`

