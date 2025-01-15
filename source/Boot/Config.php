<?php
/**
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "fullstackphp");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.localhost/fsphp");
define("CONF_URL_TEST", "https://www.localhost/fsphp");

/**
 * SITE
 */
define("CONF_SITE_NAME", "CafeControl ");
define("CONF_SITE_TITLE", " Gerencie suas contas com o melhor café");
define("CONF_SITE_DESC", "O CafeControl é um gerenciador de contas simples, poderoso e gratuito. O prazer de tomar um café e ter o controle total de suas contas.");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "upinside.com.br");
define("CONF_SITE_ADDR_STREET", "Rua Floriano Peixoto");
define("CONF_SITE_ADDR_NUMBER", "1107");
define("CONF_SITE_ADDR_COMPLEMENT", "Galpão Branco");
define("CONF_SITE_ADDR_STATE", "MA");
define("CONF_SITE_ADDR_CITY", "Imperatriz");
define("CONF_SITE_ADDR_ZIPCODE", "65907-200");

/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@MagalgaesJR9");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@MagalgaesJR9");
define("CONF_SOCIAL_FACEBOOK_APP", "2486213751532806");
define("CONF_SOCIAL_FACEBOOK_PAGE", "@juniormagalhaes09");
define("CONF_SOCIAL_FACEBOOK_AUTHOR","Jrmagalhaesdev");
define("CONF_SOCIAL_INSTAGRAM_PAGE","jrmagalhaes9");
define("CONF_SOCIAL_YOUTUBE_PAGE","junior_savaltore");


/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "cafeweb");
define("CONF_VIEW_APP", "cafeapp");
define("CONF_VIEW_ADMIN", "cafeadm");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.sendgrid.net");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "apikey");
define("CONF_MAIL_PASS", "");
define("CONF_MAIL_SENDER", ["name" => "Junior M Magalhaes", "address" => "junior.magalhaes@portalcert.com.br"]);
define("CONF_MAIL_SUPPORT", "junior.magalhaes@portalcert.com.br");
define("CONF_MAIL_OPTIONS_LANG", "br");
define("CONF_MAIL_OPTIONS_HTML", true);
define("CONF_MAIL_OPTIONS_AUTH", true);
define("CONF_MAIL_OPTIONS_SERCURE", "tls");
define("CONF_MAIL_OPTIONS_CHARSET", "utf-8");

/**
 * PAGAR.ME
 */

define("CONF_PAGARME_MODE", "test");
define("CONF_PAGARME_LIVE", "*******");
define("CONF_PAGARME_TEST", "*******");
define("CONF_PAGARME_URL", CONF_URL_BASE. "/pay/callback");
