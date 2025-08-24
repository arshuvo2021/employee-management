# Employee Management System

A Laravel-based Employee Management System for managing employee records with CRUD operations, validation, search, and pagination.

## Features

- Employee CRUD (Create, Read, Update, Delete)
- Validation for all fields
- Search by name or department
- Pagination for employee list
- Responsive UI with Bootstrap

## Requirements

- PHP >= 8.1
- Composer
- MySQL or compatible database

## Installation

1. **Clone the repository**
   ```sh
   git clone https://github.com/your-username/employee-management.git
   cd employee-management
   ```

2. **Install dependencies**
   ```sh
   composer install
   ```

3. **Copy `.env` and set up environment**
   ```sh
   cp .env.example .env
   ```
   - Update your database credentials in `.env`:
     ```
     DB_DATABASE=your_db_name
     DB_USERNAME=your_db_user
     DB_PASSWORD=your_db_password
     ```

4. **Generate application key**
   ```sh
   php artisan key:generate
   ```

5. **Run migrations**
   ```sh
   php artisan migrate
   ```

6. **(Optional) Seed the database**
   ```sh
   php artisan db:seed
   ```



7. **Start the development server**
   ```sh
   php artisan serve
   ```
   - Visit [http://localhost:8000/employees](http://localhost:8000/employees) in your browser.

## Usage

- Add, edit, delete, and view employees.
- Search employees by name or department.
- Paginated employee listing.

## Folder Structure

- `app/Models/Employee.php` - Employee model
- `app/Http/Controllers/EmployeeController.php` - Controller for employee CRUD
- `resources/views/employees/` - Blade templates for views
- `database/migrations/` - Migration files

## License

This project is open-source and free to use for educational purposes.
