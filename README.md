# WebHotel - Hotel Room Management System

This project provides a simple web-based system for managing hotel room information.  It allows users to view, update, and potentially delete (though delete functionality isn't implemented in the provided code) hotel room details.  The system utilizes PHP for the web interface and MySQL for the database.

## Files

* **`hotel.sql`**: This SQL script creates the necessary MySQL database and table.  The database is named "hotel" and contains a table named "room". The `room` table stores information about each hotel room, including:
    * `Room_id` (INT): Unique identifier for the room.
    * `Floors` (VARCHAR): Floor number or location of the room.
    * `Price` (INT): Price of the room.
    * `SD` (VARCHAR): Indicates whether the room is Single or Double occupancy.
    * `Room_Type` (VARCHAR): Type of room (e.g., Junior Suite, Superior, etc.).
    The script also includes sample data for four rooms.

* **`update1.php`**: This PHP script displays a table of all rooms from the database. Each row represents a room and includes a button to update the room's information. The script uses JavaScript to confirm the update action before submitting the form.

* **`update2.php`**: This script receives the `Room_id` from `update1.php`. It then retrieves the corresponding room's details from the database and displays them in a form for editing.  The user can modify the `Floors`, `Price`, `SD`, and `Room_Type` fields.  The updated information is then submitted to `update3.php`.

* **`update3.php`**: This script receives the updated room information from `update2.php` and uses an SQL `UPDATE` statement to modify the corresponding record in the database.  It then provides feedback to the user, indicating success or failure of the update operation.


## How to Use

1. **Create the Database:**  Import the `hotel.sql` file into your MySQL database.  Make sure to adjust the database credentials (username and password) in the PHP files if necessary.  The default credentials used are `localhost`, `root`, and an empty password.  **Change these to your own secure credentials.**

2. **Run the Application:** Place all the PHP files in a web server's document root directory.  Access `update1.php` through your web browser.  This will display the list of rooms.

3. **Update Records:** Click the "Update" button for a room to edit its details.  Make changes in the form and submit to save the updates.

## Security Considerations

The current implementation has some security vulnerabilities:

* **SQL Injection:** The code is vulnerable to SQL injection attacks.  Prepared statements or parameterized queries should be used to prevent this.
* **Input Validation:** Input validation is missing.  The code should validate user input to prevent malicious data from being inserted into the database.
* **Hardcoded Credentials:** Database credentials are hardcoded into the PHP files. These should be stored securely, for example, using environment variables.


This README provides a basic overview. The code could be significantly improved by addressing the security concerns and adding features such as error handling, input validation and potentially adding delete functionality.
