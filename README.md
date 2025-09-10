# Laravel CRUD Application (Users Management)

This project is a simple **Laravel CRUD (Create, Read, Update, Delete)** application for managing users.  
It demonstrates how to insert, update, delete, and display user records using Laravel's query builder (`DB::table`).

## 🚀 Features
- Add new users with name, email, address, and phone number
- Display all users in a list
- Update existing users
- Delete users
- Success messages after each action

## 📂 Project Structure
- **Controller:** `EmployeeController` handles all user CRUD operations.
- **Views:** Simple blade files for displaying users and forms.
- **Database:** Uses Laravel Query Builder with `users` table.

## 📺 Demonstration Video
Watch the full project walkthrough here:  
👉 [Project Demo on YouTube](https://youtu.be/ZJSJUKdABsU)

## ⚙️ Installation Guide
1. Clone this repository:
   ```bash
   git clone https://github.com/your-username/your-repo-name.git
## Install dependencies:
composer install
## Copy .env.example to .env and set up your database:
cp .env.example .env
🛠️ Requirements

PHP >= 8.0

Composer

Laravel 9+

MySQL or any supported database

📌 Routes

/ → Show all users

/add-user → Add new user

/update-user/{id} → Update user

/delete-user/{id} → Delete user

✨ Developed with Laravel ❤️
