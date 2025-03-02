# Graduation-project

## Installation and Setup
1. First, you have to clone the repository to your local machine. To do so you can run the following command in your terminal.
    ```bash
    git clone https://github.com/TaherZreeka/Graduation-project.git
    ```

2. Then you have to navigate to the project directory.
    ```bash
    cd Graduation-project
    ```

3. Now you have to install the dependencies. To do so you can run the following command.
    ```bash
    composer install
    ```
    This will install all the dependencies that are required for the project. If you haven't installed composer yet, you can download it from [here](https://getcomposer.org/download/).

4. Now you can create a database with mysql. You can use the following command to create the database.
    ```sql
    CREATE DATABASE sms;
    ```
   
5. Now you have to migrate the tables to the database. To do so you can run the following command.
    ```bash
    php artisan migrate
    ```
    This will create all the tables that are required for the project.

6. Now you can seed the database with some data. To do so you can run the following command.
    ```bash
    php artisan db:seed
    ```
    This will seed the database with some data.

7. Now you can run the project. To do so you can run the following command.
    ```bash
    php artisan serve
    ```
    This will start the server, and you can access the project by navigating to,
    ```
    http://127.0.0.1:8000
   ```
   
8. Now you can log into the system using the following credentials.

    > Admin:<br>
        Email: test@admin.com<br>
        Password: admin123
        
    > Teacher:<br>
        Email:test@teacher.com<br>
        Password: teacher123
    
    > Student:<br>
        Email: test@student.com<br>
        Password: student123

`If there are any issues, please let me know. I will try to help you as much as I can.`


