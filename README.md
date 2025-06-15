# 04 - Availability Calendar

This branch introduces the **Availability Calendar** feature for each property.  
It allows hosts to control which dates are available for booking, with a dynamic UI using Livewire.

---

## ✅ Objectives

- Create a model and migration for `PropertyAvailability`.
- Seed 30 days of availability per property.
- Set up Eloquent relationships.
- Add a Livewire interface to manage available dates.

---

## 🏗️ Features Implemented

### 1. Migration: `property_availabilities` table

```php
Schema::create('property_availabilities', function (Blueprint $table) {
    $table->id();
    $table->foreignId('property_id')->constrained()->onDelete('cascade');
    $table->date('date');
    $table->boolean('is_available')->default(true);
    $table->timestamps();

    $table->unique(['property_id', 'date']);
});
