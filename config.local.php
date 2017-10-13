<?php
$CONF['database_host'] = getenv('DBHOST');
$CONF['database_user'] = getenv('DBUSER');
$CONF['database_password'] = getenv('DBPASS');
$CONF['database_name'] = getenv('DBNAME');
$CONF['setup_password'] = getenv('SETUP_PASSWORD');
$CONF['configured'] = true;

$CONF['encrypt'] = getenv('ENCRYPTION');
$CONF['dovecotpw'] = "/usr/bin/doveadm pw";

$CONF['smtp_server'] = getenv('SMTPHOST');
$CONF['domain_path'] = 'YES';
$CONF['domain_in_mailbox'] = 'NO';
$CONF['fetchmail'] = 'YES';
$CONF['sendmail'] = 'NO';

$CONF['admin_email'] = getenv('ADMIN_USER') . '@' . getenv('DOMAIN');
$CONF['footer_text'] = 'Return to ' . getenv('DOMAIN');
$CONF['footer_link'] = 'http://' . getenv('DOMAIN');

$CONF['default_aliases'] = [];
foreach (explode(' ', getenv('DEFAULT_ALIASES')) as $alias)
    $CONF['default_aliases'][$alias] = $alias . '@' . getenv('DOMAIN');

$CONF['quota'] = 'YES';
$CONF['domain_quota'] = 'YES';
$CONF['quota_multiplier'] = '1024000';
$CONF['used_quotas'] = 'YES';
$CONF['new_quota_table'] = 'YES';

$CONF['aliases'] = '0';
$CONF['mailboxes'] = '0';
$CONF['maxquota'] = '0';
$CONF['domain_quota_default'] = '0';

