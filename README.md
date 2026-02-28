# Laravel Task Manager

[![Laravel](https://img.shields.io/badge/Laravel-12-red)](https://laravel.com/)
[![PHP](https://img.shields.io/badge/PHP-8.2-blue)](https://www.php.net/)
[![Database](https://img.shields.io/badge/Database-MySQL%20%7C%20SQLite-orange)]()
[![License](https://img.shields.io/badge/License-Educational-lightgrey)]()
[![Status](https://img.shields.io/badge/Project-Completed-success)]()

A full-stack Task Manager application built with Laravel.  
This project demonstrates REST API development, Blade UI integration, database management, and SMTP-based email notifications.

---

## Overview

The Laravel Task Manager allows users to:

- Create tasks
- View all tasks
- Update tasks
- Delete tasks
- Mark tasks as completed
- Automatically send email notifications when a task is completed

The system includes both:

- REST API endpoints (for Postman testing)
- A web-based Blade UI (for browser interaction)

---

## Tech Stack

- Laravel 12
- PHP 8.2
- MySQL / SQLite
- Bootstrap 5
- Mailtrap (SMTP testing)
- Postman (API testing)
- XAMPP (Local development)

---

## Features

### Backend (REST API)

- RESTful CRUD operations
- Route Model Binding
- Input validation
- JSON responses
- Email notification on task completion

### Frontend (Blade UI)

- Bootstrap-based interface
- Task creation form
- Task listing table
- Status badges (Pending / Completed)
- Mark as completed
- Delete task

### Email Integration

- SMTP configuration via Mailtrap
- Blade email template
- Automatic notification on status change

---

## Project Structure

app/
 ├── Http/
 │    ├── Controllers/
 │    │    ├── Api/TaskController.php
 │    │    └── TaskViewController.php
 ├── Mail/TaskCompletedMail.php
 └── Models/Task.php

resources/
 └── views/
      ├── tasks/index.blade.php
      └── emails/task_completed.blade.php

routes/
 ├── api.php
 └── web.php

## Author

Vinit Yadav    
Aspiring Full Stack Developer
