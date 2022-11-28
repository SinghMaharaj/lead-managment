Command for project

composer create-project --prefer-dist laravel/laravel:^7.0 lead-management


php artisan migrate

php artisan make:migration create_leads_table
php artisan make:migration create_lead_updates_table
php artisan migrate
php artisan make:seeder LeadSeeder
php artisan db:seed --class=LeadSeeder
php artisan make:seeder AdminSeeder
php artisan db:seed --class=AdminSeeder
php artisan make:controller Admin\LeadController
