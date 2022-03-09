# Kronos_Games (Databases and Web Services Project)

Final Grade: 95%
-----------------------------------------------------------------------------------------------------------------------------
Kronos Games simulates a gaming website where administrators can insert records into the database for the following entities: Games, Publishers, Reviews, Installations and Uploads, and users can fetch and read those records in the respective search pages.

-----------------------------------------------------------------------------------------------------------------------------

The database-file folder contains the SQL file used to create the tables of the database, as well as the database Entity-Relation diagram. There is also a file containing example queries that can be used to extract specific data. The database base should be populated with dummy data before this can be done.

-------------------------------------------------------------------------------------------------------------------------------

The front end was designed using **HTML** and **CSS**, and the scripts can be found in the frontend-scripts folder.

Home-Page: https://clabsql.clamv.jacobs-university.de/~schhabra/index.html and
Imprint-Page: https://clabsql.clamv.jacobs-university.de/~schhabra/imprint.html

-------------------------------------------------------------------------------------------------------------------------------

The back end was programmed using **PHP** and **SQL**.
Users are granted read-only access to the search pages (refer to config2.php) whereas administrators can access the maintenance page, and add records to the database. The authentication is done via username and password.

To access the maintenance page, please use the following credentials through this link: https://clabsql.clamv.jacobs-university.de/~schhabra/maintenance.php

**Username: admin
Password: 12345**

We also have pop-ups that show that the form has been successfully executed by redirecting to another page displaying a success message.

-------------------------------------------------------------------------------------------------------------------------------------

To view those records, please navigate to the search pages via this link -> http://clabsql.clamv.jacobs-university.de/~schhabra/search.html. The text fields in the search pages have an autocomplete feature where they fetch data dynamically from the database. This is accomplished using **JavaScript**, and the **JQuery UI** widget.

We have 4 relationship links implemented in this assignment which are DOES, UPLOADS, GETS and IS_IN. Only IS_IN and UPLOADS have their own input page. The queries to insert data into the tables DOES and GETS are included in the installation and review input pages. This is because installations and reviews are weak entities and their exisistence depends on player and game. When an installation and review is being created the DOES and GETS tables are updated, therefore creating a relationship link.

-------------------------------------------------------------------------------------------------------------------------------------
We were tasked to extract statistics from our access log and error log, and we chose **Python** for our parsing scripts. We used the file apache_log_server.py to filter out logs relevant to our group with the (~schhabra) tag, the program then writes said logs into a file called logs_accessed. We parse that file into our parsing scripts to extract the frequency of requests of distinct browsers, IP addresses, Page(URL)s and Dates into CSV files. 
Our extracted data from the access logs were presented into bar charts showcasing the access frequencies using jupyter notebook with **MATLAB** library in Python, the data is in the file Group 13 statistics.pdf in the repository.
