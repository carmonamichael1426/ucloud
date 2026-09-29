<?php

/**
 * Main configuration file for script
 */

/**
 * Site url host without the http:// and no trailing forward slash - i.e. www.mydomain.com or links.mydomain.com
 */
define("_CONFIG_SITE_HOST_URL", "172.16.43.148");

/**
 * Full site url without the http:// and no trailing forward slash - i.e. www.mydomain.com/links or
 * the same as the _CONFIG_SITE_HOST_URL
 */
define("_CONFIG_SITE_FULL_URL", "172.16.43.148/ucloud");

/**
 * Database connection details
 */
define("_CONFIG_DB_HOST", "localhost");
define("_CONFIG_DB_NAME", "ucloud_db");
define("_CONFIG_DB_USER", "admin");
define("_CONFIG_DB_PASS", "admin");

/**
 * Set this to the main site host if you're using direct web server uploads/downloads to remote servers
 *
 * Site url host without the http:// and no trailing forward slash - i.e. www.mydomain.com or links.mydomain.com
 */
define("_CONFIG_CORE_SITE_HOST_URL", "172.16.43.148");

/**
 * Set this to the main site host if you're using direct web server uploads/downloads to remote servers
 *
 * Full site url without the http:// and no trailing forward slash - i.e. www.mydomain.com/links or the same
 * as the _CONFIG_SITE_HOST_URL
 */
define("_CONFIG_CORE_SITE_FULL_URL", "172.16.43.148/ucloud");

/**
 * This will display debug information when something fails in the DB - leave this as true if you're not sure
 */
define("_CONFIG_DEBUG", true);

/**
 * Which protocol to use, https or http
 */
define("_CONFIG_SITE_PROTOCOL", "http");

/**
 * Encryption key used for encoding data within the site
 */
define("_CONFIG_UNIQUE_ENCRYPTION_KEY", "4d0Y7qYCCsD0NGQKVyL4Uyr7F0Z8q726UCgFjpEaC4BiKYjMn3vQVILnHAIovRBIKvkkZ7ycpAJgoZuyeNcDr40vdBXBkxYw8u0l6W0YqtIBqmURvJ1UtM4vL0f0ZCXO");

/**
 * Toggle demo mode. Always leave this as false
 */
define("_CONFIG_DEMO_MODE", false);