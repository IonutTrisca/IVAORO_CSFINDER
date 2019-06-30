# Callsign Finder
This web program is meant to help IVAO ATCs who use IVAC 2 by giving them a quick and simple way to find the callsign of a flight.

## Configuration
This program uses **MySQL** as storage for its database.

First of all, you have to adjust some parameters in the **connection.php** file.
```
DEFINE ('DB_USER', 'yourUsername');
DEFINE ('DB_PASS', 'yourPassword');
DEFINE ('DB_HOST', 'yourHost');
DEFINE ('DB_NAME', 'yourDBName');
```
Here you have to change the parameters yourUsername, yourPassword, yourHost and yourDBName to the values that apply to your database.

The next and final step is to import the values from **MySQL_Airlines_Database.sql** into your database.

## Authors

* **Ionut Trisca**

## Contact

For any questions about this program you can contact me at **ionut.trisca@ivao.aero**.
