# Kartik's Portfolio Website

A personal portfolio website built with **Laravel 11** and **Tailwind CSS**. This project showcases my skills, professional experience, and featured projects.

## 🚀 Features

-   **Home Page**: Introduction, professional summary, and featured projects.
-   **About Page**: Detailed biography, technical skills, and professional experience timeline.
-   **Projects Page**: A dynamic grid of projects managed via a database.
-   **Contact Page**: Contact information with direct links to Phone, Email, and LinkedIn.
-   **Responsive Design**: Fully responsive layout optimized for mobile and desktop.
-   **Database Integration**: Uses SQLite to store and retrieve project data.

## 🛠️ Tech Stack

-   **Framework**: [Laravel 11](https://laravel.com/)
-   **Styling**: [Tailwind CSS](https://tailwindcss.com/)
-   **Database**: SQLite
-   **Frontend**: Blade Templates

## ⚙️ Installation & Setup

Follow these steps to set up the project locally:

1.  **Clone the repository**
    ```bash
    git clone https://github.com/yourusername/laravel-portfolio.git
    cd laravel-portfolio
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    npm install
    ```

3.  **Environment Setup**
    Copy the example environment file and configure it:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Database Setup**
    Create the SQLite database file and run migrations with seeders:
    ```bash
    touch database/database.sqlite
    php artisan migrate:fresh --seed
    ```

5.  **Build Assets**
    Compile the CSS and JavaScript assets:
    ```bash
    npm run build
    ```

6.  **Run the Application**
    Start the local development server:
    ```bash
    php artisan serve
    ```
    Visit `http://localhost:8000` in your browser.

## 🧪 Running Tests

To run the automated feature tests:

```bash
php artisan test
```

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
