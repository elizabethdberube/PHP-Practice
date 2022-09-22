# PHP-Practice

## setup
add alias to .bashrc file
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'

To add bootstrap
sail composer require laravel/ui

Then
sail php artisan ui bootstrap --auth