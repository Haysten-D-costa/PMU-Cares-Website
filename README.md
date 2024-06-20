# Documentation: Running the "PMU Cares" Website Using XAMPP

`This Is the main "PMU Cares.zip" folder, that contains files and folders as follows :`

```
PMU Cares/
│
├── html/             (contains HTML files)
├── php/              (contains PHP files)
├── css/              (contains CSS files)
├── img/              (contains images)
├── docs/             (contains documentation/pdf files)
├── index.php         (main entry point for the website)
└── sql/pmucares.sql  (database export file)
```


`Prerequisites : `
-   XAMPP installed on your system....
-   VSCode or any IDE on your system....



`Steps to Run the "PMU Cares" Website : `

1. Start Apache and MySQL
    - Open the XAMPP Control Panel.
    - Start the Apache and MySQL services by clicking the "Start" button next to each service.

2. Place the extracted `"PMU Cares" Folder` in the htdocs Directory.
    - Navigate to the XAMPP installation directory (commonly C:\xampp on Windows).
    - Open the htdocs folder.
    - Copy your project folder named "PMU Cares" into the htdocs directory. The full path should be something like C:\xampp\htdocs\PMU Cares.

3. Import the Database
    - Open a web browser and go to http://localhost/phpmyadmin.
    - Click on the "Import" tab.
    - Click the "Choose File" button and select the pmucares.sql file from your "PMU Cares"/sql/pmucares.sql
    - Click "Go" to import the database schema and data.

4. Access Your Website
    - Open a web browser.
    - Navigate to http://localhost/PMU Cares.
    - PMU Cares website should now be up and running.




`NOTE : `
1. This website developed is 100% responsive. 
2. There are a total of 5 developed web pages.
3. Video Previews / website demos are added in .zip file as well.