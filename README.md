# Compact Docker server for Postfixadmin

Based on [dirtsimple/php-server](https://github.com/dirtsimple/php-server), this container is a an alpine nginx+php 7.1 runner for [Postfixadmin](http://postfixadmin.sourceforge.net/) 3.1+.  It supports the same configuration variables as [hardware/postfixadmin](hardware/postfixadmin), adding these new ones as well:

* `ADMIN_USER` -- used to set the `admin_email` for Postfixadmin (to `$ADMIN_USER@$DOMAIN`).  `postfixadmin` is the default.
* `DEFAULT_ALIASES` -- a space-separated list of default mail aliases that will be forwarded from each domain to the same alias at `$DOMAIN`.  Defaults to `abuse hostmaster postmaster webmaster`.

Performance tuning or custom configuration can be done using any of the environment variables or template configuration capabilities supplied by dirtsimple/php-server.  You can also build a specific tag or branch of Postfixadmin by passing it as the `POSTFIXADMIN_VERSION` build argument.  The code/webroot is found under `/code`.