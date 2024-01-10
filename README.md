## Installation

Follow these steps to install and run the project on your system.

1. Clone this repository:

    ```bash
    git clone https://github.com/gladyaz/laravelproject.git
    ```

2. Navigate to the project directory:

    ```bash
    cd laravelproject
    ```

3. Copy the `.env.example` file to create a new `.env` file:

    ```bash
    cp .env.example .env
    ```

4. Configure the `.env` file by filling in the database and other configuration details.

5. Install dependencies using Composer:

    ```bash
    composer install
    ```

6. Generate the application key and run migrations:

    ```bash
    php artisan key:generate
    php artisan migrate
    ```
