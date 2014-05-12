-----Welcome to Li†eBlog-----

https://github.com/chyt/lite/tree/master/liteblog

Thanks for installing Li†eBlog! You are currently using version 1.0, which was last updated January 7th, 2013.


------About Li†eBlog-----

Li†eBlog is designed to be an alternative type of blogging tool. While other blogging services such as Wordpress or Blogger center your website around your blog, we understand that in some cases you may have already have a website designed, and are seeking to implement a blog page into a site that already is fully functional. 

In this case, it doesn't make sense to completely reshape your website around a blogging framework. This is where Li†eBlog comes in. Rather than try to design your entire website for you, Li†eBlog acts as an unobtrusive blog "plugin" that you can quickly and easily customize to fit the theme of your site. 

Li†eBlog is designed to be a very lightweight and simple blogging "plugin" which contours easily to your existing website. Managing your blog is all done on one page, where you can add new posts, edit/delete existing posts, and customize the appearance of the blog. Then, with one line of PHP code, you can embed your entire Li†eBlog blog onto just about any webpage.


-----Version History-----

January 7th, 2013, v1.0.1, updated readme.txt, replaced index.html with index.php, removed external.php

January 7th, 2013, v1.0 initial release, all features fully functional


------Setup and Installation------

Setup can be done quickly and easily without any major changes to your existing website. There are three main steps to install Li†eBlog. The first is to add the proper tables to your database. The second is to make some changes to function.php so connect your Li†eBlog installation to your database. Finally, embed Li†eBlog anywhere on your web page by using a simple line of PHP code.

Step 1: database configuation

The SQL code in sql.sql will create two new tables inside the database of your choice, "liteblog" and "liteblog_settings". The "liteblog" table will store all information about your blog posts, while "liteblog_settings" will store the customizations you have chosen for Li†eBlog in settings.php. The code beginning with "INSERT INTO" will add some default settings to the "liteblog_settings" table. Again, these settings can be changed in settings.php.

Step 2: editing function.php

Once you have set up the database correctly, the next step is to connect your Li†eBlog installation to your database. This is all done in function.php. Open up function.php in the text editor of your choice and change the host, username, password, and database name to what you have chosen.

The default username and password for accessing the admin panel in settings.php is also located in function.php. It is strongly suggested that you change the username and password from their default values. The default username is "liteblog" and the default password is "password". 

Step 3: embed PHP code

Once the previous two steps have been completed, you can embed Li†eBlog anywhere on your website using the following PHP code:

<? include ('http://sample.com/link/to/liteblog.php'); ?>

Obviously, update the URL to where liteblog.php is actually located.

------Files and Folders------

-css folder: stores css files for SimpleTabs
-delete.php: page to delete posts
-edit.php: page to edit posts
-edit_confirm.php: pushes edits from edit.php to the database
-function.php: setup configurations for Li†eBlog
-images folder: stores images used in the admin panel
-index.php: info page about Li†eBlog, and example of how it can be embedded
-js folder: stores js files for SimpleTabs
-liteblog.php: shows what your blog currently looks like by itself
-login.php: login form for admin page
-logout.php: destroys session and logs out of admin
-post.php: accessed from settings.php, where posting to blog is done
-reset.php: accessed from settings.php, where visual customization options are reset
-settings.php: main admin panel, where you can add new posts, edit/delete existing ones, and customize the appearance of your blog
-sql.sql: SQL code to create the necessary database components to run Li†eBlog
-style.css: stylesheet primarily for settings.php
-update.php: accessed from settings.php, updates customization options as they have been set by the user


-----Acknowledgements/Credits------

Li†eBlog is coded and updated by Charles Tian (http://github.com/chyt) on GitHub. Do not download Li†eblog from any source other than https://github.com/chyt/lite/tree/master/liteblog. The link above is the only official page where Li†eBlog is updated.

Li†eBlog admin panel tabs were created using SimpleTabs (http://nuevvo.com/labs/simpletabs/)


-----License/Usage Agreement------

Copyright (C) 2013-2014 Charles Tian

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
