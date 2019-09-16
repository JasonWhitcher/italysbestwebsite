# Italy's Best

##Portfolio Website

###OVERVIEW
This website is a mock Italian restaurant site. Features on the site include a css only navigation menu (not all links are real, since this is a demo site only). There is a parallax image in the header. Finally, there is a php contact form (The code for the form can be viewed, but it won’t work being hosted on GitHub).

###HTML
Element id’s and classes are prefixed with ib-.
The html is pretty strait-forward.

###CSS
Sass is used for variables and nesting.
The main navigation menu uses css only submenu. Access a submenu by hovering or clicking the ‘menu’ menu item. The ’Lunch’ sub-item is the only active link for an example of a food menu list.

###JAVASCRIPT
Javascript is used only on the contact.php page. It is used for form validation, ajax and jQuery effects.
Within the jQuery ajax function effects are used on the submit button to show the user processing activity. Then show the returned success/failure message to the user. Google Maps API is used to mark a demo location for the 'no-existent’ restaurant.

###PHP
Ajax is used to send an email to the site owner (phpmail() can’t be used on my local machine, there is a note in the code about this). Then send success or failure message to the client.