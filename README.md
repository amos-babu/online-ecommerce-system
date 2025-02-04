# eCommerce Platform

## Project Overview
This is a full-stack eCommerce application built with Laravel (REST API) and React as the frontend. It includes user authentication, product management, cart functionality, and secure API access using Laravel Sanctum.

## Features
- ** User Authentication (Register, Login, Logout) using Laravel Sanctum
✅ Product Management (CRUD operations)
✅ Cart System (Add, Remove, Checkout)
✅ Secure API with Authentication
✅ React Router for seamless navigation
✅ Axios for API requests
✅ Bootstrap for styling

## Technologies Used
- Laravel
- SQlite (or other DBMS if applicable)
- Laravel Sanctum for API authentication

## Setup Instructions

1. **Clone the repository:**
   ```bash
   git clone https://github.com/amos-babu/dxf_downloader_uploader-backend.git
   ```

2. **Navigate to the project directory:**
   ```bash
   cd backend-repo
   ```

3. **Install dependencies:**
   ```bash
   composer install
   ```

4. **Copy the `.env.example` file and configure your environment variables:**
   ```bash
   cp .env.example .env
   ```
   Update the following:
   - Database credentials
   - API URL
   - Real-time broadcast driver (e.g., Pusher)

5. **Generate the application key:**
   ```bash
   php artisan key:generate
   ```

6. **Run migrations:**
   ```bash
   php artisan migrate
   ```

7. **Start the development server:**
   ```bash
   php artisan serve
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
