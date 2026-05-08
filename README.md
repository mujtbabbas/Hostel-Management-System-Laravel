# Hostel Management System

A comprehensive Laravel-based hostel management system designed for government hostels with merit-based seat allocation.

## 📋 About Project

This is an open-source project for developing a Hostel Management System using Laravel Framework. The system includes advanced features like merit-based seat allocation using previous semester marks, 12th grade percentage, or diploma grade percentage. Seats are allocated according to caste, gender, and department-wise criteria.

### 🎯 Problem Statement

Government hostel management differs from other existing systems. Student admissions are based on merit and seat availability in their category. The merit list is prepared based on student 12th, diploma, and previous semester percentages. Seats are allocated department-wise and category-wise.

The system manages available seats, rooms, and room reallocation. It provides features like news, complaints, feedback, profile management, fees, and other basic services. Admin can configure rooms, seat availability, floors, guest permissions, and allocations. The application supports report generation (student-wise, building-wise, room occupancy status, etc.).

## ✨ Features

### 🏫 Student Management
- Student registration and profile management
- Merit-based seat allocation
- Leave request system
- Fee management
- Complaint and feedback system

### 👨‍💼 Admin Panel
- Dashboard with overview statistics
- User management (students, sub-admins)
- Room and seat matrix management
- Department and institution management
- Leave request approval/rejection
- Report generation

### 📊 Seat Allocation System
- Merit list generation based on academic performance
- Category-wise allocation (SC/ST/OBC/General)
- Gender-wise allocation (Boys/Girls)
- Department-wise allocation
- Automatic seat matrix management

### 🏠 Room Management
- Add/Edit room details
- Room capacity management
- Guest room permissions
- Room allocation and reallocation

## 🛠️ Requirements

- **PHP**: >= 8.2
- **Composer**: Latest version
- **Node.js**: >= 14.x
- **NPM**: Latest version
- **Database**: SQLite (default) or MySQL/PostgreSQL
- **Web Server**: Apache/Nginx with mod_rewrite

## 🚀 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/hostel-management-system-laravel.git
cd hostel-management-system-laravel
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node.js Dependencies

```bash
npm install
```

### 4. Environment Configuration

Copy the environment file and configure your settings:

```bash
cp .env.example .env
```

Update the `.env` file with your configuration:

```env
APP_NAME="Hostel Management System"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite
# Or for MySQL:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=hostel_management
# DB_USERNAME=your_username
# DB_PASSWORD=your_password

ADMIN_EMAIL=admin@hostel.com
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Database Setup

#### For SQLite (Default):
```bash
touch database/database.sqlite
```

#### For MySQL:
Create a database named `hostel_management` and update your `.env` file accordingly.

### 7. Run Migrations and Seeders

```bash
php artisan migrate
php artisan db:seed
```

This will create the necessary tables and seed the database with:
- Admin user (email: admin@hostel.com, password: password)
- Sample departments and institutions
- Test student users

### 8. Build Assets

```bash
npm run dev
# Or for production:
npm run build
```

## 🎯 Usage

### Starting the Development Server

```bash
php artisan serve
```

The application will be available at: `http://localhost:8000`

### Default Login Credentials

#### Admin Login:
- **Email**: admin@hostel.com
- **Password**: password

#### Student Login:
- **Email**: student1@example.com
- **Password**: password

### Key Routes

- **Home**: `/`
- **Admin Dashboard**: `/admin`
- **Student Dashboard**: `/student/dashboard`
- **Login**: `/login`
- **Register**: `/register`

## 📁 Project Structure

```
├── app/
│   ├── Console/
│   ├── Exceptions/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AdminController.php
│   │   │   ├── ProfileController.php
│   │   │   └── ...
│   │   └── Middleware/
│   ├── Models/
│   │   ├── User.php
│   │   ├── StudentProfile.php
│   │   ├── RoomDetails.php
│   │   └── ...
│   └── Providers/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   ├── css/
│   ├── js/
│   └── images/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   ├── Profile/
│   │   │   ├── Admin/
│   │   │   └── Student/
│   └── sass/
├── routes/
│   ├── web.php
│   └── api.php
└── tests/
```

## 🧪 Testing

Run the test suite:

```bash
php artisan test
```

## 📊 Database Schema

### Key Tables:
- `users` - User accounts (admin/student)
- `student_profiles` - Student personal information
- `student_education` - Academic records
- `student_applies` - Hostel applications
- `student_leaves` - Leave requests
- `room_details` - Room information
- `seat_matrices` - Seat allocation matrix
- `merit_lists` - Generated merit lists
- `departments` - Academic departments
- `institutions` - Educational institutions

## 🤝 Contributing

Thank you for considering contributing to the Hostel Management System!

### Contribution Guidelines:
1. Fork the repository
2. Create a feature branch: `git checkout -b feature/your-feature-name`
3. Make your changes and commit: `git commit -m 'Add some feature'`
4. Push to the branch: `git push origin feature/your-feature-name`
5. Submit a pull request to the `contributor` branch (NOT master)

### Important Notes:
- Pull requests to the master branch will be rejected
- Add descriptive comments to your code
- Follow PSR-12 coding standards
- Write tests for new features

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🆘 Support

If you discover a security vulnerability, please send an e-mail to Ferin Patel via [ferinpatel79@gmail.com](mailto:ferinpatel79@gmail.com). All security vulnerabilities will be promptly addressed.

## 🙏 Acknowledgments

- Laravel Framework
- Bootstrap CSS Framework
- FontAwesome Icons
- jQuery
- DataTables
- Chart.js

---

**Note**: This project is actively maintained. Feel free to contribute and help improve the system!
