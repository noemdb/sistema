php artisan make:seeder UsersAdminTableSeeder
php artisan db:seed --class=UsersAdminTableSeeder
php artisan make:seeder UsersTableSeeder
php artisan make:factory UserFactory --model=User
php artisan db:seed --class=UsersTableSeeder
php artisan make:seeder ProfilesTableSeeder
php artisan make:factory 'ProfileFactory' --model='App\Models\sys\Profile'
php artisan db:seed --class=ProfilesTableSeeder
php artisan make:seeder RolsTableSeeder
php artisan make:factory 'RolFactory' --model='App\Models\sys\Rol'
php artisan db:seed --class=RolsTableSeeder
php artisan make:seeder RolsActualesTableSeeder
php artisan make:factory 'RolActualesFactory' --model='App\Models\sys\Rol'
php artisan db:seed --class=RolsActualesTableSeeder
php artisan make:seeder TaskTableSeeder
php artisan make:factory 'TaskFactory' --model='App\Models\sys\Task'
php artisan db:seed --class=TaskTableSeeder
php artisan make:seeder MessegeTableSeeder
php artisan make:factory 'MessegeFactory' --model='App\Models\sys\Messege'
php artisan db:seed --class=MessegeTableSeeder
php artisan make:seeder AlertTableSeeder
php artisan make:factory 'AlertFactory' --model='App\Models\sys\Alert'
php artisan db:seed --class=AlertTableSeeder
php artisan make:seeder LoginoutTableSeeder
php artisan make:factory 'LoginoutFactory' --model='App\Models\sys\Loginout'
php artisan db:seed --class=LoginoutTableSeeder
php artisan make:seeder LogdbTableSeeder
php artisan make:factory 'LogdbFactory' --model='App\Models\sys\Logdb'
php artisan db:seed --class=LogdbTableSeeder
php artisan make:seeder SettingTableSeeder
php artisan make:factory 'SettingFactory' --model='App\Models\sys\Setting'
php artisan db:seed --class=SettingTableSeeder
php artisan make:seeder SelectOptTableSeeder
php artisan make:factory 'SelectOptFactory' --model='App\Models\sys\Setting'
php artisan db:seed --class=SelectOptTableSeeder