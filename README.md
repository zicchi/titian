## Panduan Instalasi Titian

Step 1 : Run Composer Install
```
composer install
```
Step 2 : npm install
```
npm i && npm run dev
```

Step 3 Generate App Key
```
php artisan key:generate
```

Step 4 Migrasi Database
```
php artisan migrate
```

Step 5 Seeding database
```
php artisan db:seed
```

Step 6
Login menggunakan akun
- username : <code>dev</code>
- password : <code>dev</code>

!!!
- Route login : /admin/login
- Route dashboard : /admin/dashboard
