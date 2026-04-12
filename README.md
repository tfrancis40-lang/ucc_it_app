# UCC IT Web App

## Project Description
The UCC IT Web App is a Progressive Web App (PWA) developed for the Department of Information Technology at the University of the Commonwealth Caribbean. The application provides students with quick access to departmental information, resources, and contact options through a clean and mobile-friendly interface.

## Features
- Faculty/Staff Directory
- Courses Section with database integration
- Admissions Information
- Social Media Links
- Email FAB for contacting the Head of Department
- Progressive Web App (PWA) functionality
- Offline support through service worker caching

## Pages Included
- Home
- Faculty Directory
- Courses
- Admissions
- Social Media

## Technologies Used
- Laravel PHP
- Blade Templates
- HTML
- CSS
- JavaScript
- SQLite
- erag/laravel-pwa package
- Bootstrap Icons

## Group Members
- Akeem Farquharson (20231729)
  GitHub Repository: 
- Tati-Anna Francis (20241436)
  GitHub Repository:

## How to Run the Project
1. Clone or extract the project folder.
2. Open the project in Visual Studio Code.
3. Open the terminal in the project folder.
4. Run the following commands line-by-line:

   composer install
   cp .env.example .env
   php artisan key:generate
   php artisan migrate:fresh --seed
   php artisan serve

5. Open the application in your browser using the local server link provided.