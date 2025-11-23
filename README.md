# PHP Login System

Simple login and signup system built with PHP.

## About

Learning project — user authentication system. Built following [Dani Krossing](https://www.youtube.com/@DaniKrossing) tutorial.

## Features

- User registration
- User login
- Check for existing email/username
- Secure password storage
- SQL injection protection

## Tech Stack

- PHP
- MySQL
- PDO/MySQLi
- Sessions

## Setup

1. Download project
2. Create database `login_system`
3. Create table:
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    pwd VARCHAR(255) NOT NULL
);
```
4. Configure database connection in `includes/dbh.inc.php`
5. Open in browser via local server

## What I Learned

- PHP basics
- Database interaction
- Prepared statements
- Password hashing
- Sessions
- Form validation
- Basic security


---

Learning project, not for production.
