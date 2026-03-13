# Assessment Summary API (Laravel Backend)

## Overview

This backend provides a REST API to support the **Assessment Summary mobile screen**.
It allows the frontend to load assessment data, update assessment fields, and manage hazards associated with an assessment.

The API is built using **Laravel 11** and persists data using a relational database.

---

# Tech Stack

- **Framework:** Laravel 11
- **Language:** PHP 8.2+
- **Database:** SQLite (default for local development)
- **Architecture:** RESTful API with Laravel Resources and Form Requests

---

# Features

The API supports the following operations:

### Assessment

- Retrieve an assessment and its hazards
- Update assessment details

### Hazards

- Add a hazard to an assessment
- List hazards for an assessment
- Update a hazard
- Delete a hazard

Validation is handled using **Laravel Form Requests** to ensure data integrity.

---

# API Endpoints

## Assessment

### Get Assessment

GET `/api/assessments/{id}`

Returns the assessment summary including associated hazards.

---

### Update Assessment

PUT `/api/assessments/{id}`

Updates selected assessment fields.

Example payload:

```
{
  "status": "Open",
  "review_date": "2026-03-20",
  "notes": "Updated notes"
}
```

---

## Hazards

### List Hazards for Assessment

GET `/api/assessments/{assessment}/hazards`

---

### Create Hazard

POST `/api/assessments/{assessment}/hazards`

Example payload:

```
{
  "title": "Slippery floor",
  "risk_level": "Medium",
  "severity": "Moderate",
  "likelihood": "Possible"
}
```

---

### Update Hazard

PUT `/api/hazards/{hazard}`

---

### Delete Hazard

DELETE `/api/hazards/{hazard}`

---

# Setup Instructions

## 1. Clone the Repository

```
git clone <repository-url>
cd backend
```

---

## 2. Install Dependencies

```
composer install
```

---

## 3. Configure Environment

Copy the environment file:

```
cp .env.example .env
```

Generate the application key:

```
php artisan key:generate
```

---

## 4. Database Setup

The project uses **SQLite for local development**.

Create the SQLite database file:

```
touch database/database.sqlite
```

Then run migrations and seed data:

```
php artisan migrate --seed
```

---

## 5. Run the Application

Start the Laravel development server:

```
php artisan serve
```

The API will be available at:

```
http://127.0.0.1:8000
```

---

# Example API Request

Fetch assessment summary:

```
GET http://127.0.0.1:8000/api/assessments/1
```

---

# Validation

All write operations use Laravel **Form Requests** for validation.

Examples include:

- `StoreHazardRequest`
- `UpdateHazardRequest`
- `UpdateAssessmentRequest`

This ensures consistent input validation and cleaner controller logic.

---
