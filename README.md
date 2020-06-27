# Front-BackEnd-database

The main focus in this task was linking to my data (directions) to a database (based on phpMyadmin). The Frontend was coded using HTML and CSS to design the way the page looks while PHP language was utilized to activate the webs' functionalities such as allowing the user to insert values representing the movement distance, saving these data, displaying arrows, and so on. 
* Method "Get" was utilized when making a form in the code to create a form. This was because some data needed to be displayed on the page before streaming it. As long as the data are not sensitive or should be private like the case when inserting a passowrd, this method should be fine. 

For easiness, the inserted data was inserted once in the web instead of creating a table and then each was streamed to phpMyadmin.

* The user has the ability to choose the function needed (delete, save, or start) after inserting a value. 
* Pressing save button will result the inserted value by the user to be shown in the website once, streamed to phpMyadmin, and then disapeared after writing another one. This was done for easiness. [The file named: (try2.php) can be used to display data only in the same web page + The file named: (main2.php) can do all required tasks and fetching single value each time to phpmyadmin].
* Pressing delete button will result the data in a specific column to delete. This depends on where the user select to insert a value. 
* Pressing start button will result a picture to be shown which indicates the direction that the robot should be moved to.  


The following video was utilized as a reference to learn how data should be streamed to database from php file;
* https://www.youtube.com/watch?v=-WiWjYnTmXM
* https://www.w3schools.com/php/php_mysql_insert.asp
* https://www.youtube.com/watch?v=XHyLF-ATxXM
