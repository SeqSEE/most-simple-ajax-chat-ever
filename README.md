**Most Simple Ajax Chat Ever - For wordpress**

Based on "Most Simple Ajax Chat Ever"
https://github.com/metachris/most-simple-ajax-chat-ever

http://www.metachris.com/projects/most-simple-ajax-chat-ever/

Features

* Super simple
* efficient spam filter
* only 2 files needed (index.html, w.php)
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

This project was [featured on Wired](http://www.wired.com/2006/02/simple_ajax_chat) in February 2006!

[Original site on web.archive.org](https://web.archive.org/web/20080213154015/http://www.linuxuser.at/index.php?title=Most_Simple_Ajax_Chat_Ever).
