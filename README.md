# MANN KI BAAT (Content Management Tool)

## Project Overview
"MANN KI BAAT" is a content management tool designed to allow users to create accounts, post photos with titles and descriptions, and interact with other users through profile and post management functionalities.

## Features:

- **User Authentication and Authorization**:
- Users can create accounts and authenticate securely.
  
- **Post Management**:
- Users can create, read, update, and delete (CRUD) posts consisting of photos, titles, and descriptions.

- **User Profile Management**:
- Users can manage their profiles, update information, and view their own posts.
  
- **Explore Posts**:
- Users can browse and view posts made by other users.

- **User List**:
- Displays a list of users for easy navigation and exploration.

- **User Profile View**:
- Users can view detailed profiles of other users, including their posts.

# Getting Started
Follow these steps to set up and run "MANN KI BAAT" on your local server.

## Prerequisites
- XAMPP or any PHP-enabled local server environment
- MySQL database server
- Web browser (Chrome, Firefox, etc.)
  
## Installation
Clone the Repository

```sh
git clone https://github.com/akshatgoel-143/mann-ki-baat.git
cd mann-ki-baat
```
## Move the Project Folder:
- Make sure to rename the folder as "MannKiBaat"
- Cut and paste the entire project folder (mann_ki_baat or whichever folder contains your PHP project) into the htdocs directory of your XAMPP installation.
- Your Project directory should look like: *XAMPP/htdocs/MannKiBaat*

## Import Database

- Open phpMyAdmin or MySQL command line.
- Create a new database (e.g., mann_ki_baat_db).
- Import the SQL file database.sql located in the root directory of the project into your database.

**Follow the below steps**:

- If MySQL is not recognized as a command, you might need to navigate to the MySQL bin directory where mysql.exe is located. This is typically something like:
```sh
cd C:\path\to\mysql\bin
Replace C:\path\to\mysql\bin with the actual path where MySQL is installed on your system.
```

-Log into MySQL Server:
Enter the following command and replace username with your MySQL username or root:
```sh
mysql -u username -p
```

Press Enter. You will be prompted to enter your MySQL password. After entering the password, press Enter again. If successful, you will see the MySQL command prompt (mysql>).

- Create a New Database (If Needed):
If you haven't created a database (mann_ki_baat_db) yet, you can create it using the following command at the MySQL prompt:
```sql
CREATE DATABASE mann_ki_baat_db;
```
Replace mann_ki_baat_db with your desired database name.

- Switch to the Desired Database:
Use the following command to switch to the database where you want to import the SQL file (mann_ki_baat_db):
```sql
USE mann_ki_baat_db;
```

-Import SQL File:
Execute the following command to import the SQL file (mann_ki_baat.sql) into your database. Make sure you provide the correct path to the SQL file:
```sh
mysql -u username -p mann_ki_baat_db < path/to/database.sql
```
Replace username with your MySQL username or root.

## Configure Database Connection

Navigate to application/config/database.php.

Update the database configuration with your MySQL database credentials:

```sh
defined('BASEPATH') OR exit('No direct script access allowed');

$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'mann_ki_baat_db', // Change this to your database name
    // Other configuration options as needed
);
```

## Start Local Server

- Start XAMPP or your local server environment.
- Make sure Apache and MySQL services are running.

## Access the Application

- Open your web browser and navigate to http://localhost/mannkibaat
- OR (replace localhost with your server's IP or domain if necessary).

## Login

Use default login credentials if provided:
Username: admin
Password: admin

## Usage
- **Create Account**: Sign up for a new account.
- **Login**: Log into your account securely.
- **Create Post**: Share photos with titles and descriptions.
- **Manage Profile**: Update personal information and manage posts.
- **Explore Posts**: View and interact with posts from other users.
- **User Profile View**: Navigate to other users' profiles to see their posts.
