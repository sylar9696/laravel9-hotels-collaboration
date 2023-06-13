### Step per lavorare su una repo esistente

1. clonare la repo in locale
2. `composer install`
3. `npm install`
4. `cp .env.example .env` (fare una **copia** del file .env)
5. `php artisan key:generate`
6. creare un nuovo database con phpMyAdmin
7. inserire le credenziali del database nel file .env
8. se già avviato, riavviare artisan serve
9. `php artisan migrate`
10. `php artisan db:seed` (se ci sono seeder)
