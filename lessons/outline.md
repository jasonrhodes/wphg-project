# The WordPress Hacker's Guide to the Galaxy: A look at integrating modern programming practices into WordPress development
### Jason Rhodes

WordPress is everywhere, and it's easy for almost anyone to learn, but that doesn't mean that all the code you write for WordPress has to be messy or sloppy or bad. You can use modern programming techniques while writing plugins and applications for and on top of WordPress, too. By the end of this course, I hope you discover a few things you didn't know before about WordPress, programming, or both. Happy galactic adventuring...

## Chapter 1: Introduction

### 1.1 Hello (1:29)
Introducing the course and our Douglas Adams-inspired random quote generator project.


## Chapter 2: Getting Started

### 2.1 Installing WordPress via the Command Line (6:09)
There are several ways you can get the WordPress codebase installed into your project using command line tools that make it easier to integrate with a typical workflow. This video examines a few of those options.

### 2.2 Take Control of your Environment (12:28)
The first step in taking advantage of the most powerful parts of WordPress is getting control of the environment you're developing in. I'll show you how to use version control and core configuration changes to modify your WordPress install so that it works for you.

### 2.3 Taking Advantage of PHP 5.3 and Beyond (6:27)
The WordPress team makes backwards compatibility a top priority, but that doesn't mean we have to do the same thing. This video explores a few ways to take advantage of the new features in 5.3, 5.4, and beyond in our own applications.


## Chapter 3: OOP Plugin Development

### 3.1 Creating an Object-Oriented Plugin (8:55)
Object orientation helps organize and encapsulate code, which can help with a lot of problems that arise when building plugins with globally scoped functions. A lot of the things we want to do with our code—modular reusability, unit testing, and more—can start with building plugins using objects. We'll build a content object class so we can easily create our Quote content type.

### 3.2 Autoloading (5:53)
Once we start moving our code into small, modular classes, we need a way to access all of those classes. We can setup the spl_autoload_register function to use the WordPress directory structure so that properly namespaced classes are available everywhere.

### 3.3 Dependency Management (6:59)
WordPress doesn't have a good way to manage dependencies between plugins, so when one plugin depends on a class from another, things can get messy. I'll show you the excellent "Plugin Dependencies" plugin and demonstrate the under-used "must-use plugins" system that comes with WordPress core.


## Chapter 4: Using Composer with WordPress

### 4.1 Setting up Your composer.json File (7:35)
Composer is one of the best things to happen to PHP in years. Having a dependable dependency manager makes sharing and reusing code much easier. Note: after this course was completed, I found a fantastic resource — http://composer.rarst.net/ — which goes into even greater detail about integrating Composer with WordPress. 

### 4.2 Composer Autoloading (4:20)
We already set up autoloading, but now that we're using Composer, we should take advantage of its powerful autoloading features. If you want to keep some MVC code out of your plugin files, this video will demonstrate how to tie that all together with Composer.


## Chapter 5: Building a REST API for your WordPress Data

### 5.1 Using the Slim microframework to Build a Read API (11:22)
To get started, we'll focus on read-only interactions with our data, and we'll use a routing framework called Slim to demonstrate how to use 3rd party libraries to build something on top of the WordPress architecture. By the end of this video, our Random Quote Generator content will be accessible as JSON over HTTP.

### 5.2 Adding Create, Update, and Delete Actions (15:37)
If you decide you want to extend your REST API to do more than just read data, Slim can help with that as well. We'll add more WordPress API functions to our REST API and demonstrate how we can interact with our WordPress data without using the admin UI at all.

### 5.3 Building a JavaScript Application (2:38)
A REST API can be useful for a lot of reasons, but once you have one, you can very easily build a JavaScript MV* style application on top of your WordPress data. I'll demonstrate how to use BackboneJS and Ember to sync with a JSON API.


## Chapter 6: Advanced Templating with Twig

### 6.1 A Twig Overview (13:15)
Twig is a "modern template engine for PHP". If you've used a templating language like Smarty in PHP, or others in JavaScript, Rails, or other languages, you'll find Twig's syntax familiar. I'll show you how to set it up using Composer and use it to build out the front end of our Random Quote Generator.

### 6.2 Using Twig in WordPress Themes Using Timber (1:43)
Not everybody wants to build out their own MVC architecture on top of WordPress, but you can still take advantage of the simplicity and expressiveness of Twig in a more traditional WordPress context using a plugin called Timber. I'll give you a brief introduction of Timber and how it works with Twig.


## Chapter 7: Learning WP-CLI

### 7.1 The Basics (8:26)
WP-CLI is an amazing tool for interacting with a WordPress site from the command line. I'll go over how to use it in general, as well as some of the basic to intermediate commands like plugin management, scaffolding, and media regeneration.

### 7.2 Custom Commands (11:05)
The most exciting thing about WP-CLI is how easy it is to add your own commands just by extending the WP_CLI_Command class. I'll show you how to create a command, require and parse arguments, and use the WP_CLI API to create your own CLI tools for WordPress.


## Chapter 8: Unit Testing in WordPress

### 8.1 The WordPress Testing Library (6:46)
WordPress core is tested using a library they're building on top of PHPUnit. I'll show you how to download it, where to find more information about it, and how to write a very simple plugin test so that you can start writing tests for your own plugins.


## Chapter 9: Closing

### 9.1 Goodbye (0:41)
Thanks for coming along for a wild ride through the WordPress galaxy. My hope is that you've discovered a few things about WordPress that you didn't know before, you've learned something about programming, and/or you've gotten interested in contributing to some of the more exciting WordPress projects around like unit testing and integration with modern tools like Composer and Twig. So long and good luck on your adventures with WordPress!