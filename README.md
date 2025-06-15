# 03 - Property CRUD

This branch introduces the **Property** model, which represents rental properties listed by hosts in the system.

## ✅ Objectives

- Create the `Property` model and database table.
- Establish relationship between `Property` and `User` (host).
- Define factory and seeder for generating fake properties.
- Enable each host user to have multiple properties.

---

## 🏗️ Features Implemented

### 1. Migration: `properties` table

Includes the following fields:

- `id`
- `user_id` (foreign key → users table)
- `title`
- `description` (nullable)
- `location`
- `capacity` (number of guests)
- `price_per_night`
- `timestamps`

```php
$table->foreignId('user_id')->constrained()->onDelete('cascade');
$table->string('title');
$table->text('description')->nullable();
$table->string('location');
$table->integer('capacity')->default(1);
$table->decimal('price_per_night', 8, 2);
