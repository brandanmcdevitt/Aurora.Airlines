<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

#### Database Connection Help

###### Import <i>logindb.sql</i> to phpmyadmin and change the <i>.env</i> file to match the MySQL settings on phpmyadmin.

#### OR 

###### Create a new empty database in phpmyadmin and run 'php artisan migrate' on your project folder and set your <i>.env</i> files

###### Your settings should be something similar to this:

````
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=logindb
DB_USERNAME=root
DB_PASSWORD=root
````


#### Granting a new user <i>admin</i> privileges

````
$ php artisan tinker
>>> use App\User;
>>>User::where('email', 'useremail@gmail.com')->update(['type' => 'admin']);
````

#### Revoking admin privileges from a user

````
$ php artisan tinker
>>> use App\User;
>>>User::where('email', 'useremail@gmail.com')->update(['type' => 'default']);
````