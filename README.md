# PHP-Practice

# setup
## add alias to .bashrc file
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'

## add bootstrap
sail composer require laravel/ui

sail php artisan ui bootstrap --auth
