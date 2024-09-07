How to Install and test the project


Install the project via composer
Add .env file and add DB credentials there
Run composer install command
Run php artisan migrate command
Run php artisan db:seed command
Run php artisan serve command and test it with provide url there in command


Url will redirect you listing page where user listings are there as per its order and order items.
Now on above custom search bar, you can search user by its name, search user by email, seach order by order no, search items by its name.

As Ahmed told, do it in 30 minutes So i used get method. We can make it more secure via post method search as well as indexing too for make it more fast search.