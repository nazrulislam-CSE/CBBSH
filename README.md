<h1 align="center">🚀 Travel Delma</h1>

<p align="center">
  <strong>A Modern Travel & Tour Booking Platform Built with Laravel</strong><br>
  Manage destinations, tours, bookings and payments in one polished application.
</p>

<p align="center">
  <a href="https://github.com/BKOLPO-Technologies/travel-delma/actions"><img src="https://github.com/BKOLPO-Technologies/travel-delma/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/badge/Laravel-12.x-ff2d20?logo=laravel" alt="Laravel Version"></a>
  <a href="https://github.com/BKOLPO-Technologies/travel-delma"><img src="https://img.shields.io/github/license/BKOLPO-Technologies/travel-delma?color=green" alt="License"></a>
  <a href="https://github.com/BKOLPO-Technologies/travel-delma"><img src="https://img.shields.io/github/stars/BKOLPO-Technologies/travel-delma?style=social" alt="GitHub Stars"></a>
</p>

---

## 📌 About Travel Delma

Travel Delma is a full-featured travel booking system developed using the Laravel framework. It is ideal for travel agencies, tour operators or entrepreneurs looking to launch an online travel business with robust functionality and clean architecture.  

Key goals:  
- Provide an intuitive booking experience for end-users.  
- Offer administrative tools for managing tours, hotels, destinations and payments.  
- Deliver a maintainable, scalable codebase that follows Laravel best practices.

---

## 🎯 Features

- ✅ Destination management (countries, cities, attractions)  
- ✅ Tour / package creation, categorization, pricing  
- ✅ Booking workflow: select package → choose dates → payment → confirmation  
- ✅ Payment gateway integration (e.g., Stripe, AmarPay)  
- ✅ User authentication, profile & booking history  
- ✅ Admin dashboard: analytics, bookings overview, revenue reports  
- ✅ Multi-language & multi-currency support  
- ✅ Responsive UI: works seamlessly on mobile, tablet & desktop  
- ✅ API endpoints for future mobile apps or integrations  
- ✅ Clean codebase with service-repository pattern, unit tests prepared

---

## 🧪 Tech Stack & Tools

- **Backend:** Laravel (PHP)  
- **Frontend:** Blade templates (with potential to extend to Vue/React)  
- **Database:** MySQL / MariaDB  
- **Authentication:** Laravel Breeze or Sanctum for API  
- **Payments:** Integrations with card/online payments (e.g., AmarPay, Stripe)  
- **Job Queue:** Laravel Queues for async tasks such as email notifications  
- **PDF Invoices:** barryvdh/laravel-dompdf (if applicable)  
- **Server Requirements:**  
  - PHP ≥ 8.2  
  - Composer  
  - Node.js & npm/yarn for frontend assets  
  - A modern relational database (MySQL/MariaDB)  

---

## 🔧 Installation & Setup

Follow these steps to get the project running locally:

```bash
# 1. Clone the repository
git clone https://github.com/BKOLPO-Technologies/travel-delma.git

# 2. Change into project directory
cd travel-delma

# 3. Install backend dependencies
composer install

# 4. Install frontend dependencies
npm install && npm run dev

# 5. Copy and configure environment variables
cp .env.example .env
php artisan key:generate

# 6. Configure .env with database credentials, mail, payment keys etc.

# 7. Migrate and optionally seed data
php artisan migrate --seed

# 8. Start development server
php artisan serve

# Visit http://127.0.0.1:8000 in your browser
