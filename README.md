# Bear N Bulls - Blogging Website

![image](https://github.com/lakpro/bear-n-bull/assets/73340463/b9364323-11ce-4181-8679-482eee87676f)

Bear N Bulls is a simple blogging website built using PHP, HTML, CSS, and MySQL. It allows users to read and publish their own blogs. This project was created as a learning exercise to understand web development with PHP and MySQL. While it provides basic functionality, there is room for improvement and future updates.

## Installation

To run Bear N Bulls on your local machine, you need to have XAMPP installed. Follow these steps:

1. Download and install [XAMPP](https://www.apachefriends.org/index.html).

2. Clone this repository or download the ZIP file and extract it into the `htdocs` folder of your XAMPP installation. You can usually find this folder in the XAMPP installation directory.

3. Start the Apache and MySQL servers using the XAMPP control panel.

4. Open your web browser and navigate to `http://localhost/bear-n-bulls`.

## Database Setup

The project uses a MySQL database with two tables: `user` and `blogs`. Here's how you can set up the database:

1. Open phpMyAdmin by going to `http://localhost/phpmyadmin`.

2. Create a new database named `bear_n_bulls`.

3. In the `bear_n_bulls` database, create the following tables:

   - `user` table with fields: `id_user` (auto-increment), `username`, and `password`.
   - `blogs` table with fields: `id` (auto-increment), `name`, `article`, and `id_user`.

## Usage

Once you have set up the database and started the servers, you can access the Bear N Bulls website by navigating to `http://localhost/bear-n-bulls` in your web browser. 

- Users can create an account and log in to publish their blogs.
- Blogs are associated with users via the `id_user` field in the `blogs` table.
- Input validations have been added to prevent SQL injection, but further security improvements can be made.

## Future Updates

Bear N Bulls is a basic project created for learning purposes, and there is a lot more that can be done to enhance its functionality and security. Future updates may include:

- Improved user authentication and security features.
- Enhanced user profiles with avatars and additional information.
- Commenting and liking functionality for blogs.
- Categories and tags for organizing blogs.
- A more user-friendly and responsive design.
