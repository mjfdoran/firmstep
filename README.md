#Matt Doran

##Installation
- For ease I have uploaded this whole project including the vendor folder and sql dump
- Please point to index.php inside the public folder
- Add database connection details to .env file
- Import customer.sql from this project root directory

##Thoughts and if I had more time
- I would use gulp or grunt to compile scss files
- Service and types could have their own table to allow for their names to change but old data to remain
- Authentication security for receptionists to login
- What information would you want the public to be able to access
- Soft deletes may be an option
- If this were to be a large application with lots of javascript I would consider using a framework like angular
- This program would of course need to be able to remove people from the queue
- I would have liked to have had more time to write some tests for this project although i have a little TDD experience i don't have lots
- Although i have used validation I would like to catch and handle potential exceptions when adding a record to the DB
- In the javascript i would also like to handle multiple different errors as i'm aware they may not always be validation errors

##Why I used Laravel
- I used Laravel because I know the framework well.
- I know it also facilitates the routing and structure of code as a MVC framework.
- It uses composer so there is very little work to add in another third party library

##The location of my code
- app/Http/routes.php
- app/Http/Controllers/CusomterController.php
- app/Http/Controllers/FrontendController.php
- app/Customers.php (model)
- public/firmstep.js
- resources/views/layouts/master.blade.php
- resources/views/index.blade.php