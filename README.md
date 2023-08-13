**Contact Form Project Installation Guide**

Welcome to the Contact Form project installation guide! This web application allows users to effortlessly submit their contact information and messages via a form. The project employs PHP for backend processing and MySQL for efficient data storage.

**Features**

The project boasts the following features:

-> A user-friendly contact form complete with fields for the individual's full name, phone number, email, subject, and message.
->Data is securely stored within a MySQL database for convenient reference.
->Every form submission triggers email notifications, which are sent to a designated recipient.

**Prerequisites**

->Prior to embarking on the installation process, please ensure you have the following prerequisites in place:

->A web server with support for PHP (e.g., Apache, Nginx).
->A functional MySQL database server.

**Installation Steps**

Follow these steps to get the Contact Form project up and running:

_Step 1:_

Begin by cloning this repository into your web server's root directory. You can do so using the following command:

**git clone https://github.com/varunchandra10/techsolv_PHPtask.git**

If you are using the Apache server, clone the repository into the htdocs folder.

_Step 2:_

Start your web server and configure your MySQL database server accordingly. Create a new database for this project.

_Step 3:_

Execute the following SQL query to set up the required database table structure:

CREATE TABLE contact_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    ip_address VARCHAR(45) NOT NULL,
    timestamp TIMESTAMP NOT NULL
);

_Step 4:_

To access the application, open your web browser and navigate to http://localhost/folder_name_in_htdocs, where folder_name_in_htdocs should be replaced with the appropriate folder name.

By following these steps, you will successfully install and set up the Contact Form project.
