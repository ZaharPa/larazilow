# Larazilow

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Larazilow

Larazilow is a web application built with Laravel that allows users to post and apply for real estate listings. It provides a user-friendly interface for realtors and clients to interact and manage listings and offers.

### Features

- **Listings**: Realtors can create and manage real estate listings.
- **Offers**: Clients can make offers on listings and manage their offers.
- **User Authentication**: Secure login for users.
- **Email Verification**: Ensures users have verified their email addresses.
- **Notifications**: Users receive notifications for various actions.
- **Listing Search**: Users can search for listings based on various criteria.
- **Listing Details**: Detailed view of listings with information about the property and realtor.
- **Offer Management**: Realtors can view and manage offers for their listings.

## Technical Details

### Technologies Used

- **Framework**: Laravel 11
- **Database**: MySQL
- **Frontend**: Vue.js, Tailwind CSS
- **Authorization**: Laravel Gates and Policies
- **Job Processing**: Laravel Queues

### Installation

To get started with Larazilow, follow these steps:

1. Clone the repository:
    ```sh
    git clone https://github.com/ZaharPa/larazilow.git
    cd larazilow
    ```

2. Install dependencies:
    ```sh
    composer install
    npm install
    npm run dev
    ```

3. Set up the environment:
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

4. Configure the database in the [.env](http://_vscodecontentref_/1) file and run migrations:
    ```sh
    php artisan migrate
    ```

5. Seed the database with initial data (optional):
    ```sh
    php artisan db:seed
    ```

6. Start the development server:
    ```sh
    php artisan serve
    ```

## Usage

Once the development server is running, you can access the application in your web browser at `http://localhost:8000`.

## License

Larazilow is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Page Look

Here are some screenshots of the application:
![registration ](https://github.com/user-attachments/assets/73535b27-197f-43b2-a293-836c9dd8f4de)

![listings](https://github.com/user-attachments/assets/5224fdb0-7574-4dad-adfd-d773bec62d5e)

![listing](https://github.com/user-attachments/assets/a845c973-fe8e-47b1-9e3d-6304eefa3605)

![user page](https://github.com/user-attachments/assets/602bca2b-bf44-4155-a563-2c0708817f62)




