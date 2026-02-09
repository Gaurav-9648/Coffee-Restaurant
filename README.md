# ☕ Coffee Restaurant Website (PHP + MySQL)

A modern **Coffee Restaurant Website** built using **PHP + MySQL** with a clean UI and a fully working **Admin Panel**.

This project includes:
- Dynamic Menu System (from database)
- Reservation System
- Contact Messages System
- Admin Dashboard (Manage everything)

---

## 🚀 Features

### ✅ User Side
- Home Page (Modern UI)
- About Page
- Menu Page (Auto Fetch from Database)
- Gallery Page
- Reservation Form (Save to DB)
- Contact Form (Save to DB)

### ✅ Admin Panel
- Secure Admin Login
- Dashboard (Quick Stats)
- Add Menu Items
- Manage Menu Items
- View Reservations
- View Messages
- Logout System

---

## 🛠 Technologies Used

### Frontend
- HTML5
- CSS3 (Responsive + Modern Theme)
- Font Awesome Icons

### Backend
- PHP (Core PHP)
- MySQL (Database)

### Tools
- XAMPP (Apache + MySQL)
- phpMyAdmin
- VS Code

---

## 📂 Project Folder Structure


coffee_restaurant/
│
├── admin/
│   ├── login.php
│   ├── dashboard.php
│   ├── add_menu.php
│   ├── manage_menu.php
│   ├── reservations.php
│   ├── messages.php
│   ├── logout.php
│   ├── admin_header.php
│   └── admin_style.css
│
├── assets/
│   ├── css/
│   │   └── style.css
│   └── images/
│
├── config/
│   └── db.php
│
├── includes/
│   ├── header.php
│   └── footer.php
│
├── index.php
├── about.php
├── menu.php
├── gallery.php
├── reservation.php
└── contact.php

---

## ⚙️ How to Run This Project (Step-by-Step)

### ✅ Step 1: Install XAMPP
Download & install XAMPP:
- Apache
- MySQL

---

### ✅ Step 2: Copy Project Folder
Move the folder into XAMPP `htdocs`:



C:\xampp\htdocs\coffee_restaurant



---

### ✅ Step 3: Start Apache & MySQL
Open XAMPP Control Panel  
Start:
- Apache
- MySQL

---

### ✅ Step 4: Create Database
Open phpMyAdmin:

[http://localhost/phpmyadmin](http://localhost/phpmyadmin)


Create a database:

coffee_restaurant

### ✅ Step 5: Create Tables
Run these SQL queries in phpMyAdmin:

### 1) categories table
sql
CREATE TABLE categories (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL
);

### 2) menu_items table

sql
CREATE TABLE menu_items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  category_id INT NOT NULL,
  name VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  price INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
);

### 3) reservations table
sql
CREATE TABLE reservations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(200) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  res_date DATE NOT NULL,
  res_time TIME NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

### 4) messages table
sql
CREATE TABLE messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(200) NOT NULL,
  email VARCHAR(150) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

### 5) admins table
sql
CREATE TABLE admins (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL
);

### ✅ Step 6: Insert Categories
sql
INSERT INTO categories (name) VALUES
('Coffee'),
('Specialty Coffee'),
('Cold Coffee'),
('Desserts'),
('Snacks');

### ✅ Step 7: Create Admin Login

Generate password using PHP:

Example:
php
echo password_hash("your password", PASSWORD_DEFAULT);

Then insert admin:
sql
INSERT INTO admins (username, password)
VALUES ('admin', '$2y$10$YOUR_HASH_HERE');

---

### ✅ Step 8: Configure Database Connection

Edit file:

config/db.php

Example:

```php
<?php
$conn = new mysqli("localhost","root","","coffee_restaurant");
if($conn->connect_error){
  die("DB Connection Failed: " . $conn->connect_error);
}
?>
```

---

### ✅ Step 9: Run Website

Open:

http://localhost/coffee_restaurant/

---

### ✅ Step 10: Admin Panel Login

Open:
http://localhost/coffee_restaurant/admin/login.php

Login:

* Username: `admin`
* Password: `set your password`

---

## 👨‍💻 Author

**Your Name**
GAURAV MISHRA
---

