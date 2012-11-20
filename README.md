Wordpress Demo
==============

This project was part of a workshop given at the University of Lethbridge on November 16, 2012. Preview it [here](http://ingadget.general-metrics.com/). Source code is available on * [Github](https://github.com/Jonesy/UlethWordpressDemo).

## Installation Instructions

The following instructions are some specific steps that compliment the [very well documented installation](http://codex.wordpress.org/Installing_WordPress) process for Wordpress.

1. If developing locally, use a local environment setup either manually using your OS's install of Apache, PHP and MySQL, or use an application like [MAMP](http://www.mamp.info/en/index.html) (Mac) or [WAMP](http://www.wampserver.com/en/) (Windows).
1. If working off a server, upload the contents of the `site` folder to it.
1. Import `databases/indgadet.sql` to a MySQL server.
1. Configure `site/wp-config.php` to your MySQL install.
1. To start Compass without an app, `cd ~/Sites/Workshop WP/` to project folder and run `$ compass watch --config="config/config.rb"`. This file is in a separate folder so if the project grows and has multiple configurations for Compass or any other build system, they can be tucked away here.
1. Hack away.

## Links

Listed are some links relevant to the workshop and web development in general.

### HTML & CSS
* [Twitter Bootstrap](http://twitter.github.com/bootstrap/)
* [Sass](http://sass-lang.com/) *Requires Ruby
* [Compass](http://compass-style.org/) *Requires Ruby
* [Less](http://lesscss.org/)
* [Stylus](http://learnboost.github.com/stylus/) *Requires Node.js
* [CodeKit](http://incident57.com/codekit/) Mac App for compiling most mentioned above
* [VirtualHostX](http://clickontyler.com/virtualhostx/) For local development
* [Sublime Text 2](http://www.sublimetext.com/) Favorite text editor
* [Sequel Pro](http://www.sequelpro.com/) Great, free MySQL admin tool for localhost
* [MAMP](http://www.mamp.info/) Alternative to setting up PHP/MySQL manually on your local machine, recommended for beginners
* [iTerm 2](http://www.iterm2.com/) Terminal replacement app for OS X

### Wordpress/CSS Tutorials & Resouces
* [CSS Tricks](http://css-tricks.com/)
* [CSS Tricks Wordpress snippets](http://css-tricks.com/snippets/wordpress/) (lots of gold)
* [Wordpress](http://wp.tutsplus.com/)
* [A List Apart](http://alistapart.com/)

### Getting started in JavaScript

* [Learning JavaScript Design Patterns](http://addyosmani.com/resources/essentialjsdesignpatterns/book/) (Free online book)
* [Pro JavaScript Design Patterns](http://www.amazon.com/JavaScript-Design-Patterns-Recipes-Problem-Solution/dp/159059908X)
* [JavaScript: The Good Parts](http://shop.oreilly.com/product/9780596517748.do)
* [Professional JavaScript for Web Developers](http://www.amazon.com/Professional-JavaScript-Developers-Wrox-Guides/dp/0764579088)
* [DailyJS](http://dailyjs.com/)
* [Addy Osmani](http://addyosmani.com/) (Absurd amount of free resources)
* [Paul Irish](http://paulirish.com/) (Both guys on the Google Chrome Dev relations team, lots of wonderful resources)

**All images are copyrighted by their respective copyright owners. Please don't use commercially or otherwise.**

<a rel="license" href="http://creativecommons.org/licenses/by-nc/2.5/ca/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/2.5/ca/88x31.png" /></a>

Attribution-NonCommercial
CC BY-NC

This license lets others remix, tweak, and build upon your work non-commercially, and although their new works must also acknowledge you and be non-commercial, they don’t have to license their derivative works on the same terms.