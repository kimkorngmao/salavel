# Salavel

Salavel is a Student Management System built with Laravel. The system allows admins to manage users, classrooms, courses, and enrollments. Teachers can view their assigned classrooms and courses, and students can view their own profiles.

## Features

- User management (Admin only)
  - Create, Read, Update, Delete users
  - Differentiate between roles: Admin, Teacher, Student
- Classroom management (Admin only)
  - Create, Read, Update, Delete classrooms
  - Teachers can view their own classrooms
- Course management (Admin only)
  - Create, Read, Update, Delete courses
  - Teachers can view their own courses
- Enrollment management (Admin only)
  - Create, Read, Update, Delete enrollments
- Profile management
  - Users can view their own profiles

## Installation

Clone the repository:
  ```shell
  git clone https://github.com/kimkorngmao/salavel.git
  ```
Navigate to the project directory:
  ```shell
  cd salavel
  ```
Install dependencies:
  ```shell
  composer install
  npm install
  npm run dev
  ```
Copy the `.env.example` file to `.env` and configure your environment variables:
  ```shell
  cp .env.example .env
  ```
Generate an application key:
  ```shell
  php artisan key:generate
  ```
Configure your database in the `.env` file and run the migrations:
  ```shell
  php artisan migrate
  ```

Create the first admin user:
  ```shell
  php artisan create:admin
  ```

Start the development server:
  ```shell
  php artisan serve
  ```

## Usage

### User Management

- Access the user management interface at `/users`.
- Admins can create, read, update, and delete users.
- Users can view their own profile at `/`.

### Classroom Management

- Access the classroom management interface at `/classrooms`.
- Admins can create, read, update, and delete classrooms.
- Teachers can view their assigned classrooms.

### Course Management

- Access the course management interface at `/courses`.
- Admins can create, read, update, and delete courses.
- Teachers can view their assigned courses.

### Enrollment Management

- Access the enrollment management interface at `/enrollments`.
- Admins can create, read, update, and delete enrollments.