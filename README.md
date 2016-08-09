#Matt Doran

##Installation
- For ease I have uploaded this whole project including the vendor folder and sql dumps
- Point to index.php inside the public folder
- Add database connection details to .env file
- Import customer.sql from this project root directory

##Thoughts and if I had more time
- Should use gulp or grunt to and write to compile scss
- Service and types could have their own table to allow for their names to change but old data to remain
- Authentication security for receptionists to login
- What information would you want the public to be able to access
- Soft deletes may be an option
- If this were to be a large application with lots of javascript I would consider using a framework like angluar
- This program would of course need to be able to remove people from the queue

##Why I used Laravel
- I used Laravel because I know the framework well.
- I know it also facilitates the routing and structure of code as a MVC framework.
- It uses composer so there is no extra work to just add in another library

##The location of my code
- app/Http/routes.php
- app/Http/Controllers/CusomterController.php
- app/Http/Controllers/FrontendController.php
- app/Customers.php
- public/firmstep.js
- resources/views/layouts/master.blade.php
- resources/views/index.blade.php