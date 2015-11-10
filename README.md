Kiron Ventures Website
=======

The Kiron Ventures website, http://kironventures.com, is programmed with simplicity and speed in mind. The scope of the site is relatively small, allowing this to be done. The site uses HTML/CSS as well as javascript and a little PHP. Bootstrap is used to make the site responsive. Additionally, a Google Form is integrated into the site using an iframe.

Getting Started
----------------
To begin with, clone the repository:

    git clone git@github.com:kironuniversity/kironventures

In this directory you will see the public directory, which houses the website.

Setting up your local environment
-------
The Kiron Ventures website uses PHP for including files. This means that you will have to use a mock server on your computer in order to view changes. The easiest way is usually MAMP (https://www.mamp.info) - the free version suffices.

In preferences, change the document root to be the *public* folder of the repository locally. You should be able to then click on start servers and see the page at http://localhost:8888/ in the browser. Changes made to documents in *public* will show up there on refresh.


Code Structure
-------
The code itself is relatively straight forward. Open, for instance, *corporate.php* in your favorite text editor.

One thing to note is that much of the code is minified. This is one step in making the page fast. Code can be minified by compressing it at *https://htmlcompressor.com/compressor/* or using any of many other tools. The workflow to update a file is thus to first edit, for instance, *corporate.php*, check it in the local browser (e.g. http://localhost:8888/corporate.php) and edit there until you are satisfied with the results. When you are done minify it, replace the min.php file with the minified code, then check the minified file (e.g. http://localhost:8888/corporate.min.php). This should look identical to the un-minified version. The only exception to this nomenclature is index, which is special. Here, the un-minified version is called *index.max.php* and the minified is called *index.php*.

The server is running NginX, which is mapping the pages to their proper location for us. This is not yet set up locally, meaning the navbar will not work - you will have to go to the page by hand in the browser. http://localhost:8888/corporate.min.php will correspond exactly to http://kironventures.com/corporate.

**CSS**

The core of the site's front end is written in CSS. This comes mostly from Foundry, described below in the section "Adding New Pages". The css is all found in the folder *css/*. The bulk of the CSS is bootstrap and theme. The timelines which appear on some pages have their own CSS files, as do many of the other "add-ons". In general, the CSS is included using a PHP trick which reduced the number of calls to the server by "slapping" the CSS code straight into the HTML served to the browser in-line. This little trick can reduce a page's load time hugely, so we use it.

**PHP**

In the <head> section, you will see that *php/head.php* is included, which is included in all pages. This includes metadata, CSS, favicon, and other things that are common to all pages. This method of including a single PHP file - which potentially includes other files - is used throughout the site. This allows, for instance, the file *php/navbar.php* to be edited to add another kink in the navigation bar on all pages across the site. The end of the document also includes  *php/footer.php* in the same way.

**JS**

The little JS used here is loaded at the very end, since it is not needed for the DOM. We use the script *head.load.min.js* to manage our JS. This script allows us to load our JS as non-render blocking but still in a specific order. All of the JS (except for head.load itself) will load asynchronously but in the specified ordered. Quicker rendering times but no screwups.

**iframes**

The form for application was made with google forms and embedded here using an iframe. The graphic at */context* showing migration patterns was done using an iframe as well. We have no control of the migration graphic. The google forms code is ours.


Google Drive Upload & Google Form Integration
-------
*Adam needs to write this still. If you need this information, bug him! adam@kiron.university*


Adding New Pages
-------
The beautiful CSS of this page was done mostly with a template package called Foundry.

You can navigate to kironventures/Foundry 1.7.4 and have a look at the files. Foundry uses an in-browser WYSIWYG editor to create templates for the pages. This is not a CMS by any means, but it has some very nice CSS extensions in it. To create a new page in Foundry, open the file *kironventures/Foundry%201.7.4/variant/builder.html* in the browser, click around and add elements as you like, and then click on "Get HTML" at the bottom of the menu on the left. This is the starting point of your next page. More information on the project can be found at http://foundry.mediumra.re/.

In order to integrate the page properly, you will want to follow the JS/PHP structure from other existing pages.


Making Updates to the Site
-------
The standard procedure for committing to GitHub should be used. There is at the moment only one branch, the master branch. If you aren't yet familiar with Git, have a quick look. For this simple project, you will probably only need clone, pull, add, status, commit and push.

There is no auto-deploy for this site currently. Accordingly, the way to update the site is to push your changes and tell Adam or Juan that you would like to make an update. What one of us will do is the following:

    ssh forge@46.101.223.64
    cd kironventures.com/kironventures
    git pull
    rsync -av public/ ../public/.

This is the procedure to login to the server, go to the proper directory, pull the changes from git, and copy the changes to the public directory (which is what the site runs off of).
