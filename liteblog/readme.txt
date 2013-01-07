-----Welcome to Li†eBlog-----

https://github.com/chyt/lite/tree/master/liteblog

Thanks for installing Li†eBlog! You are currently using version 1.0, which was last updated January 6th, 2013.


------About Li†eBlog-----

Li†eBlog is designed to be an alternative type of blogging tool. While other blogging services such as Wordpress or Blogger center your website around your blog, we understand that in some cases you may have already have a website designed, and are seeking to implement a blog page into a site that already is fully functional. 

In this case, it doesn't make sense to completely reshape your website around a blogging framework. This is where Li†eBlog comes in. Rather than try to design your entire website for you, Li†eBlog acts as an unobtrusive blog "plugin" that you can quickly and easily customize to fit the theme of your site. 

Li†eBlog is designed to be a very lightweight and simple blogging "plugin" which contours easily to your existing website. Managing your blog is all done on one page, where you can add new posts, edit/delete existing posts, and customize the appearance of the blog. Then, with one line of PHP code, you can embed your entire Li†eBlog blog onto just about any webpage.


-----Version History-----

January 6th, 2013, initial release, not all features yet functional


------Setup and Installation------

Setup can be done quickly and easily without any major changes to your existing website. There are two main steps to install Li†eBlog. The first is to add the proper tables to your database, and the second is to make some changes to function.php so connect your Li†eBlog installation to your database.

Step 1: database configuation

The SQL code in sql.sql will create two new tables inside the database of your choice, "liteblog" and "liteblog_settings". The "liteblog" table will store all information about your blog posts, while "liteblog_settings" will store the customizations you have chosen for Li†eBlog in settings.php. The code beginning with "INSERT INTO" will add some default settings to the "liteblog_settings" table. Again, these settings can be changed in settings.php.

Step 2: editing function.php

Once you have set up the database correctly, the next step is to connect your Li†eBlog installation to your database. This is all done in function.php. Open up function.php in the text editor of your choice and change the host, username, password, and database name to what you have chosen.

The default username and password for accessing the admin panel in settings.php is also located in function.php. It is strongly suggested that you change the username and password from their default values. The default username is "liteblog" and the default password is "password". 

------Files and Folders------

-css folder: stores css files for SimpleTabs
-external.php: example of how Li†eBlog can be embedded in any external page
-function.php: setup configurations for Li†eBlog
-images folder: stores images used in the admin panel
-index.html: quick links to admin panel, external.php, and liteblog.php
-js folder: stores js files for SimpleTabs
-liteblog.php: shows what your blog currently looks like by itself
-post.php: accessed from settings.php, where posting to blog is done
-reset.php: accessed from settings.php, where visual customization options are reset
-settings.php: main admin panel, where you can add new posts, edit/delete existing ones, and customize the appearance of your blog
-sql.sql: SQL code to create the necessary database components to run Li†eBlog
-style.css: stylesheet primarily for settings.php
-update.php: accessed from settings.php, updates customization options as they have been set by the user


-----Acknowledgements/Credits------

Li†eBlog is coded and updated by Charles Tian (http://github.com/chyt) on GitHub. Do not download Li†eblog from any source other than https://github.com/chyt/lite/tree/master/liteblog. The link above is the only official page where Li†eBlog is updated.

Li†eBlog admin panel tabs were created using SimpleTabs (http://nuevvo.com/labs/simpletabs/)