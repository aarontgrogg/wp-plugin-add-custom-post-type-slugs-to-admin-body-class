=== Plugin Name ===
Contributors: aarontgrogg
Tags: body, admin, class
Requires at least: 3.1
Tested up to: 4.2.2
Stable tag: 1.3


Add Custom Post Type Slugs to Admin `&lt;body&gt;` Class


== Description ==

When in Admin mode, this plug-in adds classes to the `<body>` tag to let
your CSS know where you are.

For example, if you are viewing the list of all your Posts, you would get this additional class:
`edit-list-post`
And, when you are editing a Post, something like this:
`edit-page-post`

Alternatively, for custom posts, for example "movie", you would see either:
`edit-list-movie`
or:
`edit-page-movie`

This allows you to write custom CSS and JS to interact with these varying edit pages within WP.

Please let me know if you have any questions/suggestions/thoughts,
Atg


== Installation ==

1. Download the ZIP
2. Unzip the ZIP
3. Copy/paste the unzipped files into your WP plug-in directory (`/wp-content/plugins/`)
4. From within WP's Plugin Admin panel, Activate the plug-in
5. Write some wicked CSS and JS to amaze your friends and befuddle your enemies!


== Frequently Asked Questions ==

= What does this do, exactly? =
* Additional CSS classes are added to the HTML `body` tag when certain pages load in Admin mode

= What classes? =
* If you are in WP Admin, if you click Posts, you will see a list of all your Posts, and the CSS class `edit-list-post` 
  will be added to the HTML `body` tag.  If you click a specific Post, you will enter the edit page for that Post, 
  and the CSS class `edit-page-post` will be added to the HTML `body` tag.  Note the difference between the two:
  `edit-list-post` vs. `edit-page-post`, `list` vs. `page`
  Similarly, if you click Pages, the same thing as above will happen, except the word `post` will be replaced with 
  the word `page` in each of the CSS classes.  Futher, if you have custom post types, the word `post` will be replaced 
  with whatever your custom post type is, so a custom post type called "Movies" will results in the following CSS classes
  being added:
  `edit-list-movie` vs. `edit-page-movie`

= Why would I want to do this? =
* Really only if you used some custom CSS or JS in your WP Admin.  You could color the List or Edit headers or 
  backgrounds differently, add custom validation to some fields, etc.  Maybe when you are viewing the list of Posts,
  you want to see red column and field headers, blue when viewing Pages, and green when viewing Movies, and for the 
  Movies Edit page, you have a custom field that you want to validate as some specific format, like a date or number, 
  you could add custom JS just for that page, all based on these new classes on the HTML `body` tag.


== Screenshots ==


== Changelog ==

= 1.3 =
2015-05-15:
* Tested in 4.2.2, plus added a few FAQs to better explain what this plugin does and why it might be useful

= 1.2 =
2015-03-13:
* Slight mod to make this only run in admin pages, and makes sure it is a posts list page

= 1.0 =
2012-02-24:
* Well, this is the first version, so... here it is!
