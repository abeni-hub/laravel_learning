# Laravel Learning Path 📚  

Welcome to my **Laravel Learning Path** 🚀  
This repository documents my journey of **learning Laravel from scratch** with simple projects and beginner-friendly concepts.  

---

## Why this Repository? 🤔  
This repo serves as:  
- A collection of my **first Laravel practice projects**  
- A record of how I started learning Laravel step by step  
- Reference for beginners who want to start with Laravel  

---

## Learning Stages  

### 1️⃣ Getting Started  
- Installing Laravel  
- Understanding Laravel folder structure  
- Setting up `.env` file  
- Running a Laravel development server  

---

### 2️⃣ Routing & Controllers  
- Defining simple routes  
- Creating controllers  
- Returning views from routes and controllers  

---

### 3️⃣ Blade Templates  
- Using Blade for dynamic HTML pages  
- Passing data from controllers to views  
- Simple layouts with Blade  

---

### 4️⃣ Database Basics  
- Setting up database connection  
- Creating migrations  
- Inserting and retrieving data with Eloquent ORM  

---

### 5️⃣ First CRUD Example  
- Create, Read, Update, Delete (CRUD) operations on a simple model  
- Using forms to create and update records  
- Displaying lists of items in Blade templates  

---

## Tech Stack Used  
- **Framework:** Laravel (beginner level, starting point)  
- **Database:** SQLite / MySQL (basic use)  
- **Frontend:** Blade + simple CSS (no advanced UI)  
- **Tools:** Composer, Git  

---

## How to Run Any Project  

```bash
# Clone the repository
git clone <REPO_URL>

# Navigate to project
cd <PROJECT_NAME>

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Run migrations (if included)
php artisan migrate

# Start the server
php artisan serve



The app will be available at: http://localhost:8000
