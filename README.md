Magento Console
===============

This script will provide an interactive console similar to `rails console` if
you're familiar with Ruby on Rails.

In order to use this, you need to have php-cli installed with readline support.

Requirements
------------

PHP >= 4.2.3 w/ libreadline support

Installation
------------

Using `modman`.

Or

1. Download the `shell/console.php` and `shell/console` files into the `shell` folder in
your Magento root.
2. Make the `console` script executable with `chmod +x shell/console`.

Usage
-----

To run the console, simply execute `./shell/console` from the root of your
Magento project. Now you can run all sorts of Magento code from the shell:

~~~~
franklin@ubuntu:/var/www$ ./shell/console
Interactive shell

php > $user = Mage::getModel('admin/user')->load(1);
php > print_r($user->getData());
Array
(
    [user_id] => 1
    [firstname] => Franklin
    [lastname] => Strube
    [email] => 
    [username] => admin
    [password] => 
    [created] => 2012-11-18 18:18:53
    [modified] => 2013-10-11 04:53:43
    [logdate] => 2012-11-18 23:18:53
    [lognum] => 6
    [reload_acl_flag] => 0
    [is_active] => 1
    [extra] => Array
        (
            [configState] => Array
                (
                    [web_url] => 0
                    [web_seo] => 0
                    [web_unsecure] => 1
                    [web_secure] => 1
                    [web_default] => 0
                    [web_polls] => 0
                    [web_cookie] => 0
                    [web_session] => 0
                    [web_browser_capabilities] => 0
                    [dev_restrict] => 0
                    [dev_debug] => 0
                    [dev_template] => 0
                    [dev_translate_inline] => 0
                    [dev_log] => 1
                    [dev_js] => 0
                    [dev_css] => 0
                )

        )
)

~~~~
