
# INSTALLATION

This will require composer on your machine.

* run `cd rsys-backend` to get inside the project folder
* run `docker-compose up --build` to build the images
* run `docker exec -it app bash /var/www/install.sh` to install dependencies


----------
Go to `localhost:8080` to check if it's running.
You can check the endpoints at the `api.php` file.

Here's a GDoc to the explain the structure of the project.
https://docs.google.com/document/d/160Sl3c8t7mKfNXgAsHncIO4BRr28oDYS098s1pbPjH0/edit?usp=sharing

Endpoint examples
* /api/v1/auth/register
* /api/v1/auth/login
* /api/v1/auth/logout
