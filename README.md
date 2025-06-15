# 04 - Availability Calendar

This branch introduces the **Availability Calendar** feature for each property.  
It allows hosts to control which dates are available for booking.

---

## ✅ Objectives

- Create a model and table for `PropertyAvailability`.
- Define a relationship between `Property` and its availability dates.
- Allow setting whether a property is available on a given day.
- Seed 30 days of availability per property.

---

## 🏗️ Features Implemented

### 1. Migration: `property_availabilities` table

| Field           | Type       | Description                            |
|----------------|------------|----------------------------------------|
| `id`           | bigint     | Primary key                            |
| `property_id`  | foreignId  | References `properties.id`             |
| `date`         | date       | Specific day to check availability     |
| `is_available` | boolean    | `true` if the property is available    |
| `timestamps`   | timestamps | Created and updated time                |

```php
$table->foreignId('property_id')->constrained()->onDelete('cascade');
$table->date('date');
$table->boolean('is_available')->default(true);
$table->unique(['property_id', 'date']);
