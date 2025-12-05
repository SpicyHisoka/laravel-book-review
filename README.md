# Book Review App 📚

A simple Book Review application built with **Laravel 12** and **Blade**.

You can search for books by title, filter by popularity or rating, and add your own reviews. The UI is responsive and includes pagination for easy browsing.

## Features

* Search books by title
* Filter books by:
  * Latest
  * Popular Last Month
  * Popular Last 6 Months
  * Highest Rated Last Month
  * Highest Rated Last 6 Months
* View book details and reviews
* Add a review to a book
* Basic server-side validation

## Tech Stack

* **Backend:** PHP 8.x, Laravel 12
* **Frontend:** Blade, Tailwind CSS, Alpine.js
* **Database:** MySQL (or SQLite)

## Repository

[https://github.com/SpicyHisoka/laravel-book-review](https://github.com/SpicyHisoka/laravel-book-review)

## Installation

1. **Clone the repo**
    ```bash
    git clone https://github.com/SpicyHisoka/laravel-book-review.git
    cd laravel-book-review
    ```

2. **Install dependencies**
    ```bash
    composer install
    npm install
    ```

3. **Environment setup**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    Edit the `.env` file to configure your database connection details.

4. **Run migrations**
    ```bash
    php artisan migrate
    ```

5. **Build assets & serve**
    ```bash
    npm run build
    php artisan serve
    ```

Visit [http://127.0.0.1:8000](http://127.0.0.1:8000) to see the app in action.

## Usage

1. Browse the list of books on the home page.
2. Use the search bar to find books by title.
3. Apply filters to see popular or highest rated books over different periods.
4. Click on a book to view details and reviews.
5. Add your own review by clicking "Add Review".