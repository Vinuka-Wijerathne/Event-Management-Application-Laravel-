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
```

## Usage
After starting the server, access the application at [http://localhost:8000](http://localhost:8000).

## Publicly Accessible Pages
- **Home Page:** Displays an overview of upcoming events and services.
- **Events Page:** Lists all upcoming events.
- **Event Details Page:** Shows detailed information for a selected event.
- **Services Page:** Lists all available services.
- **Contact Us Page:** Allows users to submit inquiries.

## Admin Pages
- **Dashboard:** Accessible only to authenticated users, with sections for managing events, services, and contact details.

## Frontend Routes

| Route                      | HTTP Method | Controller & Method                      | Description                                                 |
|----------------------------|-------------|------------------------------------------|-------------------------------------------------------------|
| /                          | GET         | FrontendController@index                 | Home page with an overview of events and services           |
| /contact-us                | GET, POST   | ContactController@contactUs, store      | Contact form page and form submission                       |
| /about-us                  | GET         | FrontendController@aboutUs               | About Us page                                              |
| /services                  | GET         | ServiceController@services               | List of services                                          |
| /service-details/{id}      | GET         | ServiceController@serviceDetails         | Detailed view of a specific service                         |
| /events                    | GET         | EventController@events                   | List of events                                            |
| /event-details/{id}        | GET         | EventController@eventDetails             | Detailed view of a specific event                           |

## Backend Routes
All backend routes are accessible under the `/admin` prefix and are protected by auth and verified middleware.

| Route                             | HTTP Method | Controller & Method                          | Description                                           |
|-----------------------------------|-------------|----------------------------------------------|-------------------------------------------------------|
| /admin                            | GET         | BackendController@index                      | Admin dashboard                                     |
| /admin/contact-details            | GET, POST   | ApplicationSettingController@contactDetails, contactDetailsStore | Manage contact details                           |
| /admin/events-list                | GET         | EventsController@index                       | List of all events in the backend                   |
| /admin/event-details/{id}         | GET         | EventsController@eventDetails                | View or edit a specific event                       |
| /admin/event-details/create        | GET         | EventsController@create                      | Create a new event                                  |
| /admin/event-details/store         | POST        | EventsController@store                       | Store a new event in the database                   |
| /admin/event-details/{id}         | DELETE      | EventsController@destroy                     | Delete an event                                     |
| /admin/event-details/{id}         | PUT         | EventsController@update                      | Update an existing event                             |
| /admin/services-list              | GET         | ServiceController@index                      | List of all services in the backend                 |
| /admin/services-details/{id}      | GET         | ServiceController@serviceDetails             | View or edit a specific service                      |
| /admin/services-details/create     | GET         | ServiceController@create                     | Create a new service                                 |
| /admin/services-details/store      | POST        | ServiceController@serviceDetailsStore        | Store a new service in the database                  |
| /admin/services-details/{id}      | DELETE      | ServiceController@destroy                    | Delete a service                                     |
| /admin/services-details/{id}      | PUT         | ServiceController@update                     | Update an existing service                            |

## Folder Structure
- `app/Http/Controllers/Frontend:` Contains controllers for handling frontend requests.
- `app/Http/Controllers/Backend:` Contains controllers for handling backend (admin) requests.
- `resources/views:` Holds Blade templates for both frontend and backend views.
- `routes:` Defines web (web.php) and API (api.php) routes.
- `public/storage:` Linked storage for images and files.

## Contributing
Contributions are welcome! To contribute:
1. Fork the repository.
2. Create a new branch (feature/your-feature).
3. Make your changes and test thoroughly.
4. Submit a pull request, describing the changes and any issues fixed.

## License
This project is licensed under the MIT License. See the LICENSE file for more details.

## Permissions
This project cannot be used without permission. Please contact the author for inquiries.
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
