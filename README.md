 🎫 Laravel Ticket Support System

A simple Laravel-based support ticket system where users can submit issues and administrators can manage them. It includes ticket categorization, CKEditor for rich-text notes, admin login, ticket status updates, search, and pagination.

---

## 🚀 Features

- Submit support tickets with categories
- Admin panel to view and manage tickets
- CKEditor for adding notes
- Admin authentication (login/logout)
- Searchable & paginated ticket list using DataTables
- Tailwind CSS for responsive design (mobile-first)

---

## 🧑‍💻 Tech Stack

- Laravel 10+
- MongoDB
- Tailwind CSS
- jQuery + DataTables
- CKEditor 5
  

---

## ⚙️ Installation Steps

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/ticket-support-system.git
cd ticket-support-system

composer install
npm install


cp .env.example .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=support_admin
DB_USERNAME=root
DB_PASSWORD=root

DB_TECHNICAL_DATABASE=technical_db
DB_ACCOUNT_DATABASE=account_db
DB_PRODUCT_DATABASE=product_db
DB_GENERAL_DATABASE=general_db
DB_FEEDBACK_DATABASE=feedback_db

php artisan migrate
php artisan db:seed --class=AdminSeeder

**###** Snaps






