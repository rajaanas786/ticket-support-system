<img width="1426" alt="Screenshot 2025-06-11 at 12 38 48 PM" src="https://github.com/user-attachments/assets/b5b410ce-7ba5-477e-9abe-c4d96fc010d8" /># 🎫 Laravel Ticket Support System

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

<img width="1426" alt="Screenshot 2025-06-11 at 12 38 48 PM" src="https://github.com/user-attachments/assets/8460ce57-8ba6-4595-8abe-ea43268e1353" />

<img width="1439" alt="Screenshot 2025-06-11 at 12 39 15 PM" src="https://github.com/user-attachments/assets/6ab7ddf3-5f20-4e20-924d-e092493ad45c" />

<img width="1431" alt="Screenshot 2025-06-11 at 12 39 59 PM" src="https://github.com/user-attachments/assets/6c7681ab-ebc4-4da1-8275-ad1fb320d0c4" />

<img width="1436" alt="Screenshot 2025-06-11 at 12 40 32 PM" src="https://github.com/user-attachments/assets/89dd9916-c601-41de-ad4d-57a47af8834b" />

<img width="1425" alt="Screenshot 2025-06-11 at 12 40 57 PM" src="https://github.com/user-attachments/assets/94a7e235-ab0f-40f2-aa23-fcddf0f464d1" />


