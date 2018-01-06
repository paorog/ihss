To clone the repository and run the program correctly:


NOTE: 

a) git bash is a must for windows users

b) download composer 


STEPS:


1) go to command line

	- terminal for linux
	
	- git bash for windows
	
	
2) on the command line, type this

	- git clone https://rogelio_paolo@bitbucket.org/rogelio_paolo/ihss.git
	
	- (must login your credentials to clone this repo, users that are invited to the repo can download/clone this)
	
	
3) on the command line, type this

	- composer update (to update dependencies of the repo)
	
	
4) after updating the composer, create a .env file (see this default laravel .env file https://github.com/laravel/laravel/blob/master/.env.example )


5) on the command line, type this

	- php artisan key:generate
	
	
6) you can now run it correctly by typing this in the command line

	- php artisan serve
	
	or by running the public file in your xampp server
	
	
	
To fix storage path errors:


1) go to command line, key in

	- php artisan storage:link
	
	
2) create a symbolic link for the following:


	blog banners
	
	- windows : mklink /J .../public/storage/blogbanners .../storage/blogbanners
	
	- linux/unix : ln -s .../storage/blogbanners .../public/storage/blogbanners
	
	
	blog banners
	
	- windows : mklink /J .../public/storage/blogbanners .../storage/cover_photos
	
	- linux/unix : ln -s .../storage/blogbanners .../public/storage/cover_photos
	
	
	blog banners
	
	- windows : mklink /J .../public/storage/blogbanners .../storage/jobpostings
	
	- linux/unix : ln -s .../storage/blogbanners .../public/storage/jobpostings
	
	
	blog banners
	
	- windows : mklink /J .../public/storage/blogbanners .../storage/profile_photos
	
	- linux/unix : ln -s .../storage/blogbanners .../public/storage/profile_photos
	
	
3) done
	
