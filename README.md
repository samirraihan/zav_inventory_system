# Inventory & Accounting System (Laravel 12)

This project is a **basic Inventory Management + Accounting System** built with Laravel 12.

It demonstrates:

* Product management
* Sales processing
* Automatic stock updates
* Accounting journal generation
* Financial reporting

The goal of this project is to show clean backend architecture and proper separation of concerns.

---

## 🚀 Tech Stack

* Laravel 12
* PHP 8+
* MySQL
* Laravel Breeze (Authentication)
* Tailwind CSS
* Service Layer Architecture

---

## 🧩 Architecture Overview

The project follows a clean architecture pattern:

```
Controllers  →  Form Requests  →  Services  →  Models
```

### Structure

```
app/
 ├── Http/
 │    ├── Controllers/
 │    └── Requests/
 │
 ├── Services/
 │    ├── ProductService
 │    ├── SaleService
 │    ├── ReportService
 │    └── Accounting/
 │          └── JournalService
```

### Design Decisions

* Controllers are kept **thin**
* Validation handled via **Form Requests**
* Business logic handled in **Services**
* Accounting logic isolated in **JournalService**
* Database consistency ensured via **Transactions**

---

## ⚙️ Installation

Clone repository:

```bash
git clone https://github.com/samirraihan/zav_inventory_system.git
cd inventory-system
```

Install dependencies:

```bash
composer install
npm install
```

Copy environment file:

```bash
cp .env.example .env
php artisan key:generate
```

---

## 🗄️ Database Setup

Create database:

```
inventory_db
```

Update `.env`:

```
DB_DATABASE=inventory_db
```

Run migrations:

```bash
php artisan migrate
```

---

## ▶️ Run Project

Start backend:

```bash
php artisan serve
```

Start frontend (Tailwind):

```bash
npm run dev
```

---

## 🔐 Authentication

Laravel Breeze is used for authentication.

Flow:

```
/ (welcome page)
    ↓
Login / Register
    ↓
Dashboard
```

All modules are protected using:

```
auth middleware
```

---

## 📦 Modules

### 1️⃣ Products

* Create products
* Store purchase price
* Store sell price
* Maintain stock quantity

---

### 2️⃣ Sales

When a sale is created:

* Stock decreases automatically
* VAT is calculated (5%)
* Discount applied
* Due amount calculated
* Journal entries created automatically

---

### 3️⃣ Accounting Journal

Journal entries are generated using a dedicated service.

Example entries:

```
Debit  → Cash
Debit  → Accounts Receivable
Credit → Sales Revenue
```

Accounting logic is isolated in:

```
JournalService
```

---

### 4️⃣ Reports

Reports include:

* Total Sales
* Total Expense
* Net Profit

Date filtering supported.

---

## 🔄 How the System Works (Business Flow)

```
Create Product
       ↓
Create Sale
       ↓
Validate Stock
       ↓
Calculate totals (VAT, discount, due)
       ↓
Update inventory stock
       ↓
Create Sale record
       ↓
Generate Journal Entries
       ↓
Show in Reports & Journals
```

---

## 🧮 Accounting Logic

When a sale occurs:

```
Subtotal = Sell Price × Quantity
VAT = 5%
Total = Subtotal + VAT - Discount
Due = Total - Paid
```

Journal entries:

```
Debit  Cash                = Paid
Debit  Accounts Receivable = Due
Credit Sales Revenue       = Subtotal
```

---

## 🧠 Key Engineering Decisions

* Service layer for scalability
* Form Requests for validation
* Transaction-based sale creation
* Accounting logic separated from sales
* Clean reusable architecture

---

## 🎨 UI

* Tailwind CSS (Laravel Breeze default)
* Responsive navigation
* Dashboard cards
* Clean admin-style layout

---

## 🧪 Example Test Scenario

Create product:

```
Purchase Price: 100
Sell Price: 200
Stock: 50
```

Create sale:

```
Qty: 10
Discount: 50
Paid: 1000
```

System will:

* Reduce stock
* Calculate VAT
* Create due
* Generate accounting journals

---

## 👨‍💻 Author

Laravel Hiring Task – Inventory & Accounting System
