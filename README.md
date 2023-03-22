![logo](https://res.cloudinary.com/monday-blogs/w_768,h_384,c_fit/fl_lossy,f_auto,q_auto/wp-blog/2020/09/Project-schedule.jpg
"logo")
# Product demo scheduling application
This application allows potential customers to schedule product demos with a sales representative. The sales representative can add their availability and view the planned demo appointments

[![Connect with Daan Dorchholz on LinkedIn](https://img.shields.io/badge/Connect_with_Daan_Dorchholz_on_LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/daan-dorchholz/)
[![Connect with Gio todorevic on LinkedIn](https://img.shields.io/badge/Connect_with_Gio_Todorevic_on_LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/giovanni-todorevic-0477981a1/)
[![Connect with Ismail Cetin on LinkedIn](https://img.shields.io/badge/Connect_with_Ismail_Cetin_on_LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/ismail-cetin-/)
[![Connect with Ugur Utar on LinkedIn](https://img.shields.io/badge/Connect_with_Ugur_Utar_on_LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/ugur-utar/)
[![Connect with Ersin Karaduman on LinkedIn](https://img.shields.io/badge/Connect_with_Ersin_Karaduman_on_LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/ersin-karaduman-b49130217/)


## Requirements
Before you install the project make sure you meet the following rewuirements
- PHP 8 or higher
- Composer
- Node.js


## Installation
- Clone the project
- Cd into the project directory
- install composer dependencies
```bash
composer install
```

- Install npm dependencies
```bash
npm install
```

- Create .env file with your database credentials

- Generate app key
```bash
php artisan key:generate
```

- Link storage folder
```bash
php artisan storage:link
```

- Start development server
```bash
php artisan serve
```

## Running tests
- To run Cypress tests, run:
```bash
npx cypress open
```
