# SimpleWebsiteManagerPhp 2
A simple cms system written in php which is modular. Any articles/posts you want to add can be added without editing/re adding other web content like navbars,footers etc. 

Note: 

1. This is for people who do not want to spend time creating website from scratch. Most of the editing can be done in the Admin Dashboard (php files can be edited for coders).
2. If you do not prefer editing anything, then this demo website should function properly without any specific setup/changes.
3. This project was developed in PHP 7.3.22 and I specifically chose not to use any kind of database - Hence, the features can be limited like no sorting of posts by date etc. I might release a fully dynamic mySQL version later.
4. I also have not used any Javascript (like form validation to keep it php only).

How to use:
1. Create a new post from the AdminCreatepage (Dashboard) - login - "admin@admin.com" and "password".
1a. Can add new accounts/remove accounts.
2. You can see all the posts in the courses,tutorials or articles page (selected when creating a post).
3. When courses,tutorial or article pages are opened, new php links are generated and assigned automatically.
4. All the article files are in the content folder.
5. New Account can be created from register.php page.
6. Reset Password mails reset link via email - Need to enter your website Domain for mailing (resetPassword.php)

Current functionalities:
1. Website front end styling is based on bootstrap 4.5.
2. Responsive design - Should work on most sizes and devices.
3. Sections like featured articles are in the sections folder.
4. Contact us Page.
5. Search functionality available (searches page titles in all postable folders)(Not efficient but works).
6. Dashboard - Set website properties and create new posts.
7. We can upload and add images,code snippets(code) to the created pages.
8. Sessions, Authentication(create account and login) (.json file system and not SQL DB).
9. Separate Color Codes for Articles and Tutorials.
10.Image upload has a 2MB limit (can be changed in image.php) and can only upload jpg,png and gif files(can also be changed).
11.MD5 hashing for passwords (disabled it - can be added just by using md5() around the $password in the register and login pages).
12.Reset Password option with Reset code which only works for one time reset - Need to enter your website Domain for mailing (resetPassword.php)

Upcoming features:
1. Better Search.
2. Better hashing of passwords.
3. Form Validation.

Credits:
Developed by Chandradhar (https://github.com/chandradhargowtham)(http://www.chandradhar.com).
