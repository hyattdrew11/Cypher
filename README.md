# Cypher
Cypher is an opensource PHP admin and analytics dahsboard. It is designed to help developers quickly setup and modify the application to fit their project needs. My aim is also to help those new to PHP development and development in general circumvent many of the barriers I faced as a new developer with no formal training. We will cover a wide range of topics and tools that are applicable not only to this project to to many others, such as CSS frameworks, Javascript Libraries, user authenticaton through session variables, password encryption, database management, brute force attacks, and asyncronous data posting and retrival. 

## Getting Started 

### Tools I reccomend you download for developing on your PC

* [Sublime Text | Opensource Text Editor](https://www.sublimetext.com/3)
* [MAMP: My Apache - MySQL - PHP local server](https://www.mamp.info/en/downloads/)
* [Google Chrome](https://www.google.com/chrome/browser/desktop/) My prefered browser with Developer Tools Included
* [Mozilla Firefox with Firebug Developer Tools](http://getfirebug.com/)

Google Chrome, Sublime Text, and MAMP have been invaluable tools I have used developing for various projects. MAMP provides a means to mimic the functionality of a server on your PC. Sublime Text is a powerful yet user firendly text editor, which allows you to manage and edit files in your projects. Google Chrome and Mozilla Firefox are popular web browsers. I prefer Google Chrome as it comes with developer tools pre-installed. 

### Managing Your Workflow

After downloading the source files for this project I reccomend moving them to an easily accesible area on your PC. I use a Macbook Pro for development and organize all my projects in the home directory, which can be typically be found in your finder favorites between the Desktop and Applications tabs. 

Using the home directory for projects will save you some headache once you become more familiar with Git and the using the command line. Since you are here on Github I will assume you know the basics of Git, but if not here is a guide that helped me when I had no idea what Git was or was used for [Git No Deep Sh!+](http://rogerdudler.github.io/git-guide/).

#### Sublime Text Setup

Once you have downloaded or pulled the Cyper files & placed them where you would like open up Sublime text. You should see a blank project and file interface. Drag and drop the Cypher directory onto the new Sublime project window. The project files are now accessible in the sidebar located on the far left of your project window. Double clicking files you want to edit will place them in a new tab. 

#### MAMP Setup
After downloading MAMP or MAMP Pro open up the application. MAMP Pro offers some extra functionality, but is a pay to play application. MAMP is totally free and is sufficient to run this project. Once MAMP has loaded we need to setup our preferences and get this application running. By defalut MAMP with load with our Apache and MySQL servers running. Go ahead and stop these from running by clicking the Stop Servers button. Now click the preferences button opposite the server button. 

Open the Ports section in preferences. Here you can manually set the ports for your various servers. 

Set MAMP ports to default.

* Apache Port: 8888
* Nginx Port: 8888
* MySQL Port: 8889

Open the PHP section next to the ports section. Here you can select, which version of PHP you want to use. We want to use the current and standard version. As of today it is version 7.0.15

* Standard Version: 7.0.15
* Cache: off

Open the Web Server section to the left of our PHP section. Here we want to choose our web server type and project directory where our server will run the files you downloaded. 

* Web Server: Apache
* Document Root: filepath > Cypher Repository > Cypher > dashboard

By choosing this filepath in MAMP the index.php will be run by our mock server through MAMP and the application can be accesed through your browser, which I will walk you through below. 

#### Viewing and Using the Application in your browser
If you have no errors from MAMP and our servers are up running correctly you should be able to view the basic application. Open Google Chrome or the browser of your choice. By starting our servers through MAMP we can view Cypher by typing http://localhost:8888/ into our address bar. 

http://localhost:8888/ runs the index.php file found in the dashboard directory. You should see a basic dashboard template with a navigation bar on the left hand side and a message welcoming you to login. You can navigate to the Cypher login/user registration portals, but will not be able to register or login until we setup or MySQL database, which I will walk you through below explain below. 

### Setup MySql Database
Now we need to create a MySql database in order to move forward. MySql is an opensource database, which is widely used throughout the web. A reference that helped me understand MySql when first starting are tables similar to tables one can create in Microsoft Excel with rows and columns. Our MySql database holds however many tables you would like to use and we can access, update and display data from these tables with PHP "queries" or commands. For more information concerning MySql please review thier documentation found [here](https://dev.mysql.com/doc/). 

Let's move forward and create our first database. We will be doing this locally with MAMP, but the process is basically the same when using hosting services such as Godaddy or Media Temple, and can be done manullay through the command line.

Open a new tab in your browser. Type http://localhost:8888/MAMP into your address bar. MAMP will show you various things on this page such as your MySql username & password, Hostname, and Socket. We need to navigate to our phpMyAdmin interface which can be found under tools in the top navigation bar. 

phpMyAdmin is a free software tool written in PHP, intended to handle the administration of MySQL over the Web. phpMyAdmin supports a wide range of operations on MySQL and MariaDB. Frequently used operations (managing databases, tables, columns, relations, indexes, users, permissions, etc) can be performed via the user interface, while you still have the ability to directly execute any SQL statement. For more info on phpMyAdmin the documentation can be found [here])(https://www.phpmyadmin.net/docs/).

OT create a new database click on the databases tab found near the top left of the browser. An inout box should appear where we can name and then create our new database. Name it whatever you like, I typially give my database the same name as the overall project I am using it for. So Cypher would be the database name for this particular project. Click create and you will see our new Cypher database on the left side bar.

Our database is currently empty, which we will change momentarily by addin the necessary tables or schema to used in by our application. 

#### Creating Tables and our database schema















