<?php

/** Add Varnish Caching. **/
$conf['varnish_version'] = 4;
// Tell Drupal it's behind a proxy.
$conf['reverse_proxy'] = TRUE;
// Tell Drupal what addresses the proxy server(s) use.
$conf['reverse_proxy_addresses'] = array('127.0.0.1', '172.31.8.156');
// Bypass Drupal bootstrap for anonymous users so that Drupal sets max-age < 0.
$conf['page_cache_invoke_hooks'] = FALSE;
// Make sure that page cache is enabled.
$conf['cache'] = 1;
$conf['cache_lifetime'] = 0;
$conf['page_cache_maximum_age'] = 21600;
// Add Varnish as the page cache handler.
$conf['cache_backends'][] = 'sites/all/modules/contrib/varnish/varnish.cache.inc';
$conf['cache_class_external_varnish_page'] = 'VarnishCache';
#$conf['cache_class_cache_page'] = 'VarnishCache';
$conf['reverse_proxy_header'] = 'HTTP_X_FORWARDED_FOR';
$conf['omit_vary_cookie'] = False;
#$conf['drupal_http_request_fails'] = FALSE;

// Don't bootstrap the database when serving pages from the cache.
$conf['page_cache_without_database'] = TRUE;
$conf['page_cache_invoke_hooks'] = FALSE;

# Move all cached data (except form cache) to memcache storage.
$conf['cache_backends'][] = 'sites/all/modules/contrib/memcache_storage/memcache_storage.inc';
$conf['cache_default_class'] = 'MemcacheStorage';
$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
$conf['cache_class_cache_update'] = 'DrupalDatabaseCache';

# Set PECL extension to communicate with memcached daemon.
$conf['memcache_extension'] = 'Memcached';

# Configure memcached extenstion.
$conf['memcache_options'] = array(
  Memcached::OPT_TCP_NODELAY => TRUE,
  Memcached::OPT_BINARY_PROTOCOL => TRUE,
);

# Store pure HTML for page cache instead of php object.
# Use this config only when you want to reach page cache from nginx or varnish.
$conf['cache_backends'][] = 'sites/all/modules/contrib/memcache_storage/memcache_storage.page_cache.inc';
$conf['cache_class_cache_page'] = 'MemcacheStoragePageCache';
$conf['memcache_storage_external_page_cache'] = TRUE;

# Set custom expiration time for cached pages. Together with configured
# Cache Expiration module will relieve the load from your server(s) if you
# have a lot of anonymous users.
$conf['memcache_storage_page_cache_custom_expiration'] = TRUE;
$conf['memcache_storage_page_cache_expire'] = 60 * 60 * 24;  // 1 day.

# Enable debug mode.
#$conf['memcache_storage_debug'] = TRUE;

# Add prefix to each cache id.
# Useful when you use the same memcached instance across different web sites.
$conf['memcache_storage_key_prefix'] = 'build-1';

# Move storage for lock system into memcached.
$conf['lock_inc'] = 'sites/all/modules/contrib/memcache_storage/includes/lock.inc';

# Move storage for sessions into memcached.
$conf['session_inc'] = 'sites/all/modules/contrib/memcache_storage/includes/session.inc';

$conf['memcache_servers'] = array(
  '127.0.0.1:11211' => 'default',
  '127.0.0.1:11212' => 'menu',
  '127.0.0.1:11213' => 'filter',
  '127.0.0.1:11214' => 'form',
  '127.0.0.1:11215' => 'block',
  '127.0.0.1:11216' => 'update',
  '127.0.0.1:11217' => 'views',
  '127.0.0.1:11218' => 'content',
  '127.0.0.1:11219' => 'bootstrap',
  '127.0.0.1:11220' => 'path',
  '127.0.0.1:11221' => 'field',
  '127.0.0.1:11222' => 'rules',
  '127.0.0.1:11223' => 'token',
);
$conf['memcache_bins'] = array(
  'cache' => 'default',
  'cache_menu'   => 'menu',
  'cache_filter' => 'filter',
  'cache_form'   => 'form',
  'cache_block'  => 'block',
  'cache_update' => 'update',
  'cache_views'  => 'views',
  'cache_views_data'  => 'views',
  'cache_content'  => 'content',
  'cache_bootstrap'  => 'bootstrap',
  'cache_path'  => 'path',
  'cache_field'  => 'field',
  'cache_rules'  => 'rules',
  'cache_token'  => 'token',
);

