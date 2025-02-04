# eCommerce Platform

## Project Overview
This is a full-stack eCommerce application built with Laravel (REST API) and React as the frontend. It includes user authentication, product management, cart functionality, and secure API access using Laravel Sanctum.

## Features
- ✅ **User Authentication** (Register, Login, Logout) using Laravel Sanctum
- ✅ **Product Management** (CRUD operations)
- ✅ **Cart System** (Add, Remove, Checkout)
- ✅ **Laravel Sanctum** Secure API with Authentication
- ✅ **React Router** for seamless navigation
- ✅ **Axios** for API requests
- ✅ **Bootstrap** for styling

## Technologies Used
**Backend (Laravel)**

- Laravel 10 (REST API)
- Sanctum (API Authentication)
- MySQL (Database)
- Eloquent ORM
- Laravel Migrations & Seeders

**Frontend (React)**

- React 18
- React Router
- Axios (API Requests)
- Bootstrap (Styling)

## Installation
**Backend (Laravel) Setup**
Clone the repository:

```bash
git clone https://github.com/amos-babu/online-ecommerce-system
cd ecommerce-app
```
Install dependencies:

```bash
composer install
```
Configure environment:

```bash
cp .env.example .env
php artisan key:generate
```
Set up database in .env, then run migrations:

```bash
php artisan migrate --seed
```
Install Laravel Sanctum & run the authentication setup:

```bash
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate
```
Serve the API:

```bash
php artisan serve
```
**Frontend (React) Setup**
Navigate to the frontend directory:

```bash
cd ../frontend
```
Install dependencies:

```bash
npm install
```
Start the React development server:

```bash
npm run dev
```

**Usage**

- Visit **http://localhost:8000/api** to test API endpoints.
- Open **http://localhost:5173** to access the React frontend.
- Use Postman or Axios for API testing.
  
**API Authentication**
All API requests require a Bearer token after login.
Include the token in the Authorization header:
```bash
axios.get('/api/products', {
  headers: { Authorization: `Bearer YOUR_ACCESS_TOKEN` }
})
```

## Deployment
To deploy the backend application, you can use platforms like **AWS**, **DigitalOcean**, or **Heroku**. Ensure to:
- Set up a production database.
- Configure the `.env` file for production.
- Use a queue worker for background tasks.
- Set up SSL for secure communication.

## API Documentation
For detailed API documentation, refer to the `docs/api-documentation.md` file or tools like **Postman** or **Swagger** (if implemented).

---

## Contribution
If you want to contribute to this project, feel free to submit a pull request or open an issue in the repository.

## License
This project is licensed under the **MIT License**. See the `LICENSE` file for details.
