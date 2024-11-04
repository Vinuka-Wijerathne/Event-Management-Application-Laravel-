# Event Management Application

This is an event management application built with Laravel. It’s designed for an event management company to showcase their events, services, and receive inquiries from customers. The application has both frontend and backend components, allowing users to view events and services and admin users to manage content through a dashboard.

## Table of Contents
- [Project Overview](#project-overview)
- [Features](#features)
- [Installation](#installation)
- [Environment Setup](#environment-setup)
- [Usage](#usage)
- [Frontend Routes](#frontend-routes)
- [Backend Routes](#backend-routes)
- [Folder Structure](#folder-structure)
- [Contributing](#contributing)
- [License](#license)

## Project Overview

This application provides an interface for a company to showcase upcoming events and services. It includes a customer-facing frontend to display event details and a backend for managing event and service listings. Additionally, customers can reach out via a contact form.

## Features
- **Event Listings**: Display a list of upcoming events, with details including date, location, and description.
- **Service Listings**: List the services offered by the company, with details and descriptions.
- **Contact Form**: Allows users to submit inquiries through a contact form.
- **Admin Dashboard**: Backend for managing events, services, and contact details.
- **Authentication**: Secured routes for administrators to access the dashboard and manage content.

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/your-username/event-management-app.git
    cd event-management-app
    ```

2. Install dependencies:
    ```bash
    composer install
    npm install
    ```

3. Generate application key:
    ```bash
    php artisan key:generate
    ```

4. Run migrations:
    ```bash
    php artisan migrate
    ```

5. Seed the database (optional):
    ```bash
    php artisan db:seed
    ```

6. Serve the application:
    ```bash
    php artisan serve
    ```

## Environment Setup

Create a `.env` file: Copy the `.env.example` file to `.env` and update the necessary configuration details:

```plaintext
APP_NAME=EventManagementApp
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
