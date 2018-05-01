<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

#### Database Connection Help

###### Import <i>logindb.sql</i> to phpmyadmin and change the <i>.env</i> file to match the MySQL settings on phpmyadmin.

#### OR 

###### Create a new empty database in phpmyadmin and run 'php artisan migrate' on your project folder and set your <i>.env</i> files

###### Your settings should be something similar to this:

DB_CONNECTION=mysql <br />
DB_HOST=127.0.0.1 <br />
DB_PORT=8889 <br />
DB_DATABASE=logindb<br />
DB_USERNAME=root<br />
DB_PASSWORD=root<br />
