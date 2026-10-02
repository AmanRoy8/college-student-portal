# College Student Information Portal

A reconstructed academic project demonstrating a database-backed college website with announcements, admissions information and credential-based examination-result access.

> **Important:** This repository is a clean reconstruction/modernized demonstration based on the functionality of an earlier college project. It is not presented as the original source code.

## Features

- Responsive college information homepage
- Announcements, events and admissions sections
- Student login
- Database-backed examination result retrieval
- MySQL database schema and sample record
- PHP backend using prepared statements
- Apache/XAMPP-compatible local setup

## Technology

- HTML5
- CSS3
- PHP
- MySQL
- Apache
- JavaScript-ready frontend structure

## Project Structure

```text
college-student-portal/
├── admin/
├── assets/
│   └── style.css
├── database/
│   └── schema.sql
├── student/
│   ├── login.php
│   └── result.php
├── config.php
├── index.php
└── README.md
```

## Run Locally

### 1. Install XAMPP

Install XAMPP and start:

- Apache
- MySQL

### 2. Copy the project

Place this folder inside:

```text
C:/xampp/htdocs/
```

### 3. Create the database

Open phpMyAdmin:

```text
http://localhost/phpmyadmin
```

Import:

```text
database/schema.sql
```

### 4. Open the project

Go to:

```text
http://localhost/college-student-portal/
```

### Demo Login

Enrollment:

```text
GRU2024001
```

Password:

```text
demo123
```

## What the project demonstrates

The portal follows a basic client-server architecture:

```text
Browser
   ↓
PHP application
   ↓
MySQL database
   ↓
Student result
```

A student submits credentials through the login form. The PHP application validates the request against the database and returns the corresponding result information.

## Security Notes

This demonstration uses prepared SQL statements to reduce SQL injection risk and escapes database output before displaying it in HTML.

For a production system, passwords should be stored using secure password hashing such as `password_hash()` / `password_verify()`, along with proper session management, CSRF protection, authorization controls, HTTPS and secure server configuration.

## Resume Description

**College Website & Student Information Portal**
- Developed a database-backed college website featuring announcements, admissions information and examination results.
- Implemented student result retrieval using PHP and MySQL in an Apache-based environment.
- Worked across frontend development, backend integration, database operations and website functionality.
