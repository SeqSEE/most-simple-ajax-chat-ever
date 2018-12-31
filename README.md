**Most Simple Ajax Chat Ever - For wordpress**

Based on "Most Simple Ajax Chat Ever"
https://github.com/metachris/most-simple-ajax-chat-ever

http://www.metachris.com/projects/most-simple-ajax-chat-ever/

Features

* Super simple
* efficient spam filter
* only 5 files needed (index.html, w.php, get-chat.php, .htaccess, log folder)
* css styles & usernames
+ Forced HTTPS usage
+ Apache handling to secure the chat
+ Wordpress integration

How it works

* `index.php` to read the content & sends your message to `w.php`
* `get-chat.php` writes the content and prunes it to `$maxlines` lines
* `w.php` writes the content and prunes it to `$maxlines` lines
* content stored as text in `/logs/chat.txt`
* 2 http_requests (1 for checking content, 1 for sending your message)

Setup in 2 steps

* clone the repo
* edit the `/logs/.htaccess` to redirect to your domain


License: MIT
