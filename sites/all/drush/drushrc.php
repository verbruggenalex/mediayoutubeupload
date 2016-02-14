<?php 


$options['sites'] = array (
  0 => 'media-youtube-upload.com',
);
$options['profiles'] = array (
  0 => 'standard',
  1 => 'minimal',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'menu' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.42',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'version' => '7.42',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'version' => '7.42',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.42',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7080',
        'version' => '7.42',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'version' => '7.42',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.42',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/boot.test',
            6 => 'tests/bootstrap.test',
            7 => 'tests/cache.test',
            8 => 'tests/common.test',
            9 => 'tests/database_test.test',
            10 => 'tests/entity_crud.test',
            11 => 'tests/entity_crud_hook_test.test',
            12 => 'tests/entity_query.test',
            13 => 'tests/error.test',
            14 => 'tests/file.test',
            15 => 'tests/filetransfer.test',
            16 => 'tests/form.test',
            17 => 'tests/graph.test',
            18 => 'tests/image.test',
            19 => 'tests/lock.test',
            20 => 'tests/mail.test',
            21 => 'tests/menu.test',
            22 => 'tests/module.test',
            23 => 'tests/pager.test',
            24 => 'tests/password.test',
            25 => 'tests/path.test',
            26 => 'tests/registry.test',
            27 => 'tests/schema.test',
            28 => 'tests/session.test',
            29 => 'tests/tablesort.test',
            30 => 'tests/theme.test',
            31 => 'tests/unicode.test',
            32 => 'tests/update.test',
            33 => 'tests/xmlrpc.test',
            34 => 'tests/upgrade/upgrade.test',
            35 => 'tests/upgrade/upgrade.comment.test',
            36 => 'tests/upgrade/upgrade.filter.test',
            37 => 'tests/upgrade/upgrade.forum.test',
            38 => 'tests/upgrade/upgrade.locale.test',
            39 => 'tests/upgrade/upgrade.menu.test',
            40 => 'tests/upgrade/upgrade.node.test',
            41 => 'tests/upgrade/upgrade.taxonomy.test',
            42 => 'tests/upgrade/upgrade.trigger.test',
            43 => 'tests/upgrade/upgrade.translatable.test',
            44 => 'tests/upgrade/upgrade.upload.test',
            45 => 'tests/upgrade/upgrade.user.test',
            46 => 'tests/upgrade/update.aggregator.test',
            47 => 'tests/upgrade/update.trigger.test',
            48 => 'tests/upgrade/update.field.test',
            49 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.42',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.42',
      ),
      'dashboard' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.42',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.42',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.42',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.42',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.42',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.42',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7015',
        'version' => '7.42',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'version' => '7.42',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'version' => '7.42',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.42',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.42',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'version' => '7.42',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'overlay' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'version' => '7.42',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'version' => '7.42',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.42',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.42',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.42',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'list' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.42',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.42',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.42',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.42',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.42',
      ),
      'i18n_panels' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/panels/i18n_panels/i18n_panels.module',
        'basename' => 'i18n_panels.module',
        'name' => 'i18n_panels',
        'info' => 
        array (
          'name' => 'Panels translation',
          'description' => 'Supports translatable panels items.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'panels',
            2 => 'i18n_string',
            3 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-3.5',
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.5',
      ),
      'panels_mini' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/panels/panels_mini/panels_mini.module',
        'basename' => 'panels_mini.module',
        'name' => 'panels_mini',
        'info' => 
        array (
          'name' => 'Mini panels',
          'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
          'package' => 'Panels',
          'version' => '7.x-3.5',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/export_ui/panels_mini_ui.class.php',
          ),
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.5',
      ),
      'panels_ipe' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/panels/panels_ipe/panels_ipe.module',
        'basename' => 'panels_ipe.module',
        'name' => 'panels_ipe',
        'info' => 
        array (
          'name' => 'Panels In-Place Editor',
          'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
          'package' => 'Panels',
          'version' => '7.x-3.5',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/panels',
          'files' => 
          array (
            0 => 'panels_ipe.module',
          ),
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.5',
      ),
      'panels_node' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/panels/panels_node/panels_node.module',
        'basename' => 'panels_node.module',
        'name' => 'panels_node',
        'info' => 
        array (
          'name' => 'Panel nodes',
          'description' => 'Create nodes that are divided into areas with selectable content.',
          'package' => 'Panels',
          'version' => '7.x-3.5',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'configure' => 'admin/structure/panels',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'panels_node.module',
          ),
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'version' => '7.x-3.5',
      ),
      'panels' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/panels/panels.module',
        'basename' => 'panels.module',
        'name' => 'panels',
        'info' => 
        array (
          'name' => 'Panels',
          'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
          'core' => '7.x',
          'package' => 'Panels',
          'version' => '7.x-3.5',
          'configure' => 'admin/structure/panels',
          'dependencies' => 
          array (
            0 => 'ctools (>1.5)',
          ),
          'files' => 
          array (
            0 => 'panels.module',
            1 => 'includes/common.inc',
            2 => 'includes/legacy.inc',
            3 => 'includes/plugins.inc',
            4 => 'plugins/views/panels_views_plugin_row_fields.inc',
          ),
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'version' => '7.x-3.5',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'bulk_export' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'page_manager' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'stylizer' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'views_content' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'version' => '7.x-1.9',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'term_depth' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/term_depth/term_depth.module',
        'basename' => 'term_depth.module',
        'name' => 'term_depth',
        'info' => 
        array (
          'name' => 'Term Depth access',
          'description' => 'Controls access to context based upon term depth',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'ctools' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/css-cache.inc',
            2 => 'includes/math-expr.inc',
            3 => 'includes/stylizer.inc',
            4 => 'tests/css_cache.test',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.9',
      ),
      'l10n_update' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/l10n_update/l10n_update.module',
        'basename' => 'l10n_update.module',
        'name' => 'l10n_update',
        'info' => 
        array (
          'name' => 'Localization update',
          'description' => 'Provides automatic downloads and updates for translations.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'core' => '7.x',
          'package' => 'Multilingual',
          'files' => 
          array (
            0 => 'includes/gettext/PoHeader.php',
            1 => 'includes/gettext/PoItem.php',
            2 => 'includes/gettext/PoMemoryWriter.php',
            3 => 'includes/gettext/PoMetadataInterface.php',
            4 => 'includes/gettext/PoReaderInterface.php',
            5 => 'includes/gettext/PoStreamInterface.php',
            6 => 'includes/gettext/PoStreamReader.php',
            7 => 'includes/gettext/PoStreamWriter.php',
            8 => 'includes/gettext/PoWriterInterface.php',
            9 => 'includes/locale/Gettext.php',
            10 => 'includes/locale/PoDatabaseReader.php',
            11 => 'includes/locale/PoDatabaseWriter.php',
            12 => 'includes/locale/SourceString.php',
            13 => 'includes/locale/StringBase.php',
            14 => 'includes/locale/StringDatabaseStorage.php',
            15 => 'includes/locale/StringInterface.php',
            16 => 'includes/locale/StringStorageException.php',
            17 => 'includes/locale/StringStorageInterface.php',
            18 => 'includes/locale/TranslationString.php',
            19 => 'includes/locale/TranslationsStreamWrapper.php',
            20 => 'tests/L10nUpdateCronTest.test',
            21 => 'tests/L10nUpdateInterfaceTest.test',
            22 => 'tests/L10nUpdateTest.test',
            23 => 'tests/L10nUpdateTestBase.test',
          ),
          'version' => '7.x-2.0',
          'project' => 'l10n_update',
          'datestamp' => '1415625781',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'version' => '7.x-2.0',
      ),
      'jquery_update' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/jquery_update/jquery_update.module',
        'basename' => 'jquery_update.module',
        'name' => 'jquery_update',
        'info' => 
        array (
          'name' => 'jQuery Update',
          'description' => 'Update jQuery and jQuery UI to a more recent version.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jquery_update.module',
            1 => 'jquery_update.install',
          ),
          'configure' => 'admin/config/development/jquery_update',
          'version' => '7.x-2.7',
          'project' => 'jquery_update',
          'datestamp' => '1445379855',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.7',
      ),
      'fontawesome' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/fontawesome/fontawesome.module',
        'basename' => 'fontawesome.module',
        'name' => 'fontawesome',
        'info' => 
        array (
          'name' => 'Font Awesome',
          'description' => 'Iconic font designed for use with Twitter Bootstrap.',
          'core' => '7.x',
          'php' => '5',
          'dependencies' => 
          array (
            0 => 'libraries (>=7.x-2.0)',
          ),
          'files' => 
          array (
            0 => 'fontawesome.install',
            1 => 'fontawesome.module',
          ),
          'version' => '7.x-2.5',
          'project' => 'fontawesome',
          'datestamp' => '1445924954',
        ),
        'schema_version' => '7001',
        'version' => '7.x-2.5',
      ),
      'simple_fb_connect' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/simple_fb_connect/simple_fb_connect.module',
        'basename' => 'simple_fb_connect.module',
        'name' => 'simple_fb_connect',
        'info' => 
        array (
          'name' => 'Simple FB Connect',
          'description' => 'A simple module to allow users to login/singup with their Facebook account',
          'package' => 'Facebook',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
            1 => 'xautoload',
          ),
          'configure' => 'admin/config/people/simple-fb-connect',
          'version' => '7.x-2.4',
          'project' => 'simple_fb_connect',
          'datestamp' => '1454490867',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-2.4',
      ),
      'logintoboggan_rules' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/logintoboggan/contrib/logintoboggan_rules/logintoboggan_rules.module',
        'basename' => 'logintoboggan_rules.module',
        'name' => 'logintoboggan_rules',
        'info' => 
        array (
          'name' => 'LoginToboggan Rules Integration',
          'description' => 'Integrates LoginToboggan with Rules module',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'logintoboggan',
            1 => 'rules',
          ),
          'version' => '7.x-1.5',
          'project' => 'logintoboggan',
          'datestamp' => '1430501885',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'logintoboggan_content_access_integration' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/logintoboggan/contrib/logintoboggan_content_access_integration/logintoboggan_content_access_integration.module',
        'basename' => 'logintoboggan_content_access_integration.module',
        'name' => 'logintoboggan_content_access_integration',
        'info' => 
        array (
          'name' => 'LoginToboggan Content Access Integration',
          'description' => 'Integrates LoginToboggan with Content Access module, so that Non-validated users are handled correctly',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'logintoboggan',
            1 => 'content_access',
          ),
          'version' => '7.x-1.5',
          'project' => 'logintoboggan',
          'datestamp' => '1430501885',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'logintoboggan_variable' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/logintoboggan/contrib/logintoboggan_variable/logintoboggan_variable.module',
        'basename' => 'logintoboggan_variable.module',
        'name' => 'logintoboggan_variable',
        'info' => 
        array (
          'name' => 'LoginToboggan Variable Integration',
          'description' => 'Integrates LoginToboggan with Variable module',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'logintoboggan',
            1 => 'variable',
          ),
          'version' => '7.x-1.5',
          'project' => 'logintoboggan',
          'datestamp' => '1430501885',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'logintoboggan' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/logintoboggan/logintoboggan.module',
        'basename' => 'logintoboggan.module',
        'name' => 'logintoboggan',
        'info' => 
        array (
          'name' => 'LoginToboggan',
          'description' => 'Improves Drupal\'s login system.',
          'core' => '7.x',
          'configure' => 'admin/config/system/logintoboggan',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'logintoboggan.css',
            ),
          ),
          'version' => '7.x-1.5',
          'project' => 'logintoboggan',
          'datestamp' => '1430501885',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.5',
      ),
      'honeypot' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/honeypot/honeypot.module',
        'basename' => 'honeypot.module',
        'name' => 'honeypot',
        'info' => 
        array (
          'name' => 'Honeypot',
          'description' => 'Mitigates spam form submissions using the honeypot method.',
          'core' => '7.x',
          'configure' => 'admin/config/content/honeypot',
          'package' => 'Spam control',
          'files' => 
          array (
            0 => 'honeypot.test',
          ),
          'version' => '7.x-1.21',
          'project' => 'honeypot',
          'datestamp' => '1441334340',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.x-1.21',
      ),
      'xmlsitemap_engines' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap_engines/xmlsitemap_engines.module',
        'basename' => 'xmlsitemap_engines.module',
        'name' => 'xmlsitemap_engines',
        'info' => 
        array (
          'name' => 'XML sitemap engines',
          'description' => 'Submit the sitemap to search engines.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_engines.module',
            1 => 'xmlsitemap_engines.admin.inc',
            2 => 'xmlsitemap_engines.install',
            3 => 'tests/xmlsitemap_engines.test',
          ),
          'recommends' => 
          array (
            0 => 'site_verify',
          ),
          'configure' => 'admin/config/search/xmlsitemap/engines',
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'php' => '5.2.4',
        ),
        'schema_version' => '6202',
        'version' => '7.x-2.2',
      ),
      'xmlsitemap_menu' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap_menu/xmlsitemap_menu.module',
        'basename' => 'xmlsitemap_menu.module',
        'name' => 'xmlsitemap_menu',
        'info' => 
        array (
          'name' => 'XML sitemap menu',
          'description' => 'Adds menu item links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
            1 => 'menu',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_menu.module',
            1 => 'xmlsitemap_menu.install',
            2 => 'xmlsitemap_menu.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'php' => '5.2.4',
        ),
        'schema_version' => '6201',
        'version' => '7.x-2.2',
      ),
      'xmlsitemap_node' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap_node/xmlsitemap_node.module',
        'basename' => 'xmlsitemap_node.module',
        'name' => 'xmlsitemap_node',
        'info' => 
        array (
          'name' => 'XML sitemap node',
          'description' => 'Adds content links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_node.module',
            1 => 'xmlsitemap_node.install',
            2 => 'xmlsitemap_node.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'php' => '5.2.4',
        ),
        'schema_version' => '6201',
        'version' => '7.x-2.2',
      ),
      'xmlsitemap_user' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap_user/xmlsitemap_user.module',
        'basename' => 'xmlsitemap_user.module',
        'name' => 'xmlsitemap_user',
        'info' => 
        array (
          'name' => 'XML sitemap user',
          'description' => 'Adds user profile links to the sitemap.',
          'package' => 'XML sitemap',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'xmlsitemap_user.module',
            1 => 'xmlsitemap_user.install',
            2 => 'xmlsitemap_user.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.2',
      ),
      'xmlsitemap_custom' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap_custom/xmlsitemap_custom.module',
        'basename' => 'xmlsitemap_custom.module',
        'name' => 'xmlsitemap_custom',
        'info' => 
        array (
          'name' => 'XML sitemap custom',
          'description' => 'Adds user configurable links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_custom.module',
            1 => 'xmlsitemap_custom.admin.inc',
            2 => 'xmlsitemap_custom.install',
            3 => 'xmlsitemap_custom.test',
          ),
          'configure' => 'admin/config/search/xmlsitemap/custom',
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.2',
      ),
      'xmlsitemap_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap_taxonomy/xmlsitemap_taxonomy.module',
        'basename' => 'xmlsitemap_taxonomy.module',
        'name' => 'xmlsitemap_taxonomy',
        'info' => 
        array (
          'name' => 'XML sitemap taxonomy',
          'description' => 'Add taxonomy term links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
            1 => 'taxonomy',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_taxonomy.module',
            1 => 'xmlsitemap_taxonomy.install',
            2 => 'xmlsitemap_taxonomy.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.2',
      ),
      'xmlsitemap_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap_i18n/xmlsitemap_i18n.module',
        'basename' => 'xmlsitemap_i18n.module',
        'name' => 'xmlsitemap_i18n',
        'info' => 
        array (
          'name' => 'XML sitemap internationalization',
          'description' => 'Enables multilingual XML sitemaps.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
            1 => 'i18n',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_i18n.module',
            1 => 'xmlsitemap_i18n.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.2',
      ),
      'xmlsitemap' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap.module',
        'basename' => 'xmlsitemap.module',
        'name' => 'xmlsitemap',
        'info' => 
        array (
          'name' => 'XML sitemap',
          'description' => 'Creates an XML sitemap conforming to the <a href="http://sitemaps.org/">sitemaps.org protocol</a>.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'xmlsitemap.module',
            1 => 'xmlsitemap.inc',
            2 => 'xmlsitemap.admin.inc',
            3 => 'xmlsitemap.drush.inc',
            4 => 'xmlsitemap.generate.inc',
            5 => 'xmlsitemap.xmlsitemap.inc',
            6 => 'xmlsitemap.pages.inc',
            7 => 'xmlsitemap.install',
            8 => 'xmlsitemap.test',
          ),
          'recommends' => 
          array (
            0 => 'robotstxt',
          ),
          'configure' => 'admin/config/search/xmlsitemap',
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'version' => '7.x-2.2',
      ),
      'i18n_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_taxonomy/i18n_taxonomy.module',
        'basename' => 'i18n_taxonomy.module',
        'name' => 'i18n_taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy translation',
          'description' => 'Enables multilingual taxonomy.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'i18n_string',
            2 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_taxonomy.inc',
            1 => 'i18n_taxonomy.pages.inc',
            2 => 'i18n_taxonomy.admin.inc',
            3 => 'i18n_taxonomy.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.x-1.13',
      ),
      'i18n_block' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_block/i18n_block.module',
        'basename' => 'i18n_block.module',
        'name' => 'i18n_block',
        'info' => 
        array (
          'name' => 'Block languages',
          'description' => 'Enables language selector for blocks and optional block translation.',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_block.inc',
            1 => 'i18n_block.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.13',
      ),
      'i18n_menu' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_menu/i18n_menu.module',
        'basename' => 'i18n_menu.module',
        'name' => 'i18n_menu',
        'info' => 
        array (
          'name' => 'Menu translation',
          'description' => 'Supports translatable custom menu items.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'menu',
            2 => 'i18n_string',
            3 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_menu.inc',
            1 => 'i18n_menu.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.13',
      ),
      'i18n_field' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_field/i18n_field.module',
        'basename' => 'i18n_field.module',
        'name' => 'i18n_field',
        'info' => 
        array (
          'name' => 'Field translation',
          'description' => 'Translate field properties',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_field.inc',
            1 => 'i18n_field.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.13',
      ),
      'i18n_user' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_user/i18n_user.module',
        'basename' => 'i18n_user.module',
        'name' => 'i18n_user',
        'info' => 
        array (
          'name' => 'User mail translation',
          'description' => 'Translate emails sent from the User module.',
          'core' => '7.x',
          'package' => 'Multilingual - Internationalization',
          'dependencies' => 
          array (
            0 => 'i18n_variable',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'i18n_redirect' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_redirect/i18n_redirect.module',
        'basename' => 'i18n_redirect.module',
        'name' => 'i18n_redirect',
        'info' => 
        array (
          'name' => 'Translation redirect',
          'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'i18n_sync' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_sync/i18n_sync.module',
        'basename' => 'i18n_sync.module',
        'name' => 'i18n_sync',
        'info' => 
        array (
          'name' => 'Synchronize translations',
          'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_sync.module',
            1 => 'i18n_sync.install',
            2 => 'i18n_sync.module.inc',
            3 => 'i18n_sync.node.inc',
            4 => 'i18n_sync.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.13',
      ),
      'i18n_path' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_path/i18n_path.module',
        'basename' => 'i18n_path.module',
        'name' => 'i18n_path',
        'info' => 
        array (
          'name' => 'Path translation',
          'description' => 'Define translations for generic paths',
          'dependencies' => 
          array (
            0 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_path.inc',
            1 => 'i18n_path.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.13',
      ),
      'i18n_string' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_string/i18n_string.module',
        'basename' => 'i18n_string.module',
        'name' => 'i18n_string',
        'info' => 
        array (
          'name' => 'String translation',
          'description' => 'Provides support for translation of user defined strings.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_string.admin.inc',
            1 => 'i18n_string.inc',
            2 => 'i18n_string.test',
          ),
          'configure' => 'admin/config/regional/i18n/strings',
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.13',
      ),
      'i18n_select' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_select/i18n_select.module',
        'basename' => 'i18n_select.module',
        'name' => 'i18n_select',
        'info' => 
        array (
          'name' => 'Multilingual select',
          'description' => 'API module for multilingual content selection',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/select',
          'files' => 
          array (
            0 => 'i18n_select.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'i18n_variable' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_variable/i18n_variable.module',
        'basename' => 'i18n_variable.module',
        'name' => 'i18n_variable',
        'info' => 
        array (
          'name' => 'Variable translation',
          'description' => 'Multilingual variables that switch language depending on page language.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'variable_store (7.x-2.x)',
            2 => 'variable_realm (7.x-2.x)',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/variable',
          'files' => 
          array (
            0 => 'i18n_variable.class.inc',
            1 => 'i18n_variable.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.x-1.13',
      ),
      'i18n_node' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_node/i18n_node.module',
        'basename' => 'i18n_node.module',
        'name' => 'i18n_node',
        'info' => 
        array (
          'name' => 'Multilingual content',
          'description' => 'Extended node options for multilingual content',
          'dependencies' => 
          array (
            0 => 'translation',
            1 => 'i18n',
            2 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/node',
          'files' => 
          array (
            0 => 'i18n_node.test',
            1 => 'i18n_node.variable.inc',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.13',
      ),
      'i18n_translation' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_translation/i18n_translation.module',
        'basename' => 'i18n_translation.module',
        'name' => 'i18n_translation',
        'info' => 
        array (
          'name' => 'Translation sets',
          'description' => 'Simple translation sets API for generic objects',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_translation.inc',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'i18n_contact' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_contact/i18n_contact.module',
        'basename' => 'i18n_contact.module',
        'name' => 'i18n_contact',
        'info' => 
        array (
          'name' => 'Contact translation',
          'description' => 'Makes contact categories and replies available for translation.',
          'dependencies' => 
          array (
            0 => 'contact',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'i18n_forum' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_forum/i18n_forum.module',
        'basename' => 'i18n_forum.module',
        'name' => 'i18n_forum',
        'info' => 
        array (
          'name' => 'Multilingual forum',
          'description' => 'Enables multilingual forum, translates names and containers.',
          'dependencies' => 
          array (
            0 => 'forum',
            1 => 'i18n_taxonomy',
            2 => 'i18n_node',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_forum.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'i18n' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n.module',
        'basename' => 'i18n.module',
        'name' => 'i18n',
        'info' => 
        array (
          'name' => 'Internationalization',
          'description' => 'Extends Drupal support for multilingual features.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'variable',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_object.inc',
            1 => 'i18n.test',
          ),
          'configure' => 'admin/config/regional/i18n',
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.13',
      ),
      'session_api' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/session_api/session_api.module',
        'basename' => 'session_api.module',
        'name' => 'session_api',
        'info' => 
        array (
          'name' => 'Session API',
          'description' => 'Provides an interface for storing session information.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'session_api.module',
            1 => 'session_api.admin.inc',
            2 => 'session_api.install',
            3 => 'session_api.test',
          ),
          'configure' => 'admin/config/development/session-api',
          'version' => '7.x-1.0-rc1',
          'project' => 'session_api',
          'datestamp' => '1354234727',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'version' => '7.x-1.0-rc1',
      ),
      'path2ban' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/path2ban/path2ban.module',
        'basename' => 'path2ban.module',
        'name' => 'path2ban',
        'info' => 
        array (
          'name' => 'path2ban',
          'description' => 'Ban IP of visitors, who try to scan restricted paths.',
          'core' => '7.x',
          'configure' => 'admin/config/people/path2ban',
          'version' => '7.x-1.0',
          'project' => 'path2ban',
          'datestamp' => '1431074284',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0',
      ),
      'google_analytics_reports_api' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/google_analytics_reports/google_analytics_reports_api/google_analytics_reports_api.module',
        'basename' => 'google_analytics_reports_api.module',
        'name' => 'google_analytics_reports_api',
        'info' => 
        array (
          'name' => 'Google Analytics Reports API',
          'package' => 'Statistics',
          'description' => 'API to access statistics from the <a href="https://developers.google.com/analytics/devguides/reporting/core/v3/">Google Analytics Core Reporting API</a>.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'google_analytics_reports_api.lib.inc',
          ),
          'configure' => 'admin/config/system/google-analytics-reports-api',
          'version' => '7.x-3.0-beta2',
          'project' => 'google_analytics_reports',
          'datestamp' => '1438364344',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-beta2',
      ),
      'google_analytics_reports' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/google_analytics_reports/google_analytics_reports.module',
        'basename' => 'google_analytics_reports.module',
        'name' => 'google_analytics_reports',
        'info' => 
        array (
          'name' => 'Google Analytics Reports',
          'package' => 'Statistics',
          'description' => 'Display statistics from Google Analytics using Views.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'google_analytics_reports_api',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'handlers/google_analytics_reports_handler_filter.inc',
            1 => 'handlers/google_analytics_reports_handler_filter_date.inc',
            2 => 'handlers/google_analytics_reports_handler_filter_string.inc',
            3 => 'handlers/google_analytics_reports_handler_filter_numeric.inc',
            4 => 'handlers/google_analytics_reports_handler_field.inc',
            5 => 'handlers/google_analytics_reports_handler_argument.inc',
            6 => 'plugins/google_analytics_reports_plugin_query_google_analytics.inc',
            7 => 'plugins/google_analytics_reports_plugin_argument_default_google_analytics_reports_path.inc',
          ),
          'version' => '7.x-3.0-beta2',
          'project' => 'google_analytics_reports',
          'datestamp' => '1438364344',
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'version' => '7.x-3.0-beta2',
      ),
      'pathauto' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.migrate.inc',
            1 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.3',
          'project' => 'pathauto',
          'datestamp' => '1444232655',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'version' => '7.x-1.3',
      ),
      'charts_google' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/charts/modules/charts_google/charts_google.module',
        'basename' => 'charts_google.module',
        'name' => 'charts_google',
        'info' => 
        array (
          'name' => 'Google Charts',
          'description' => 'Charts module integration with Google Charts.',
          'package' => 'Charts',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'charts',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'charts',
          'datestamp' => '1395123856',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-rc1',
      ),
      'charts_highcharts' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/charts/modules/charts_highcharts/charts_highcharts.module',
        'basename' => 'charts_highcharts.module',
        'name' => 'charts_highcharts',
        'info' => 
        array (
          'name' => 'Highcharts',
          'description' => 'Charts module integration with Highcharts library.',
          'package' => 'Charts',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
            1 => 'charts',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'charts',
          'datestamp' => '1395123856',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-rc1',
      ),
      'charts' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/charts/charts.module',
        'basename' => 'charts.module',
        'name' => 'charts',
        'info' => 
        array (
          'name' => 'Charts',
          'description' => 'A charting API for Drupal that provides chart elements and integration with Views.',
          'package' => 'Charts',
          'core' => '7.x',
          'php' => '5.2',
          'configure' => 'admin/config/content/charts',
          'files' => 
          array (
            0 => 'views/charts_plugin_style_chart.inc',
            1 => 'views/charts_plugin_display_chart.inc',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'charts',
          'datestamp' => '1395123856',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-rc1',
      ),
      'varnish' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/varnish/varnish.module',
        'basename' => 'varnish.module',
        'name' => 'varnish',
        'info' => 
        array (
          'name' => 'Varnish',
          'description' => 'Provides integration with the Varnish HTTP accelerator.',
          'core' => '7.x',
          'configure' => 'admin/config/development/varnish',
          'package' => 'Caching',
          'files' => 
          array (
            0 => 'varnish.cache.inc',
            1 => 'varnish.test',
          ),
          'version' => '7.x-1.0-beta3+6-dev',
          'project' => 'varnish',
          'datestamp' => '1427297283',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta3+6-dev',
      ),
      'ckeditor' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ckeditor/ckeditor.module',
        'basename' => 'ckeditor.module',
        'name' => 'ckeditor',
        'info' => 
        array (
          'name' => 'CKEditor',
          'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
          'core' => '7.x',
          'package' => 'User interface',
          'configure' => 'admin/config/content/ckeditor',
          'version' => '7.x-1.17',
          'project' => 'ckeditor',
          'datestamp' => '1450969741',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'version' => '7.x-1.17',
      ),
      'linked_field' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/linked_field/linked_field.module',
        'basename' => 'linked_field.module',
        'name' => 'linked_field',
        'info' => 
        array (
          'name' => 'Linked Field',
          'description' => 'Adds the functionality to link fields to a specific destination.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field_formatter_settings',
          ),
          'version' => '7.x-1.10',
          'project' => 'linked_field',
          'datestamp' => '1412008976',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'version' => '7.x-1.10',
      ),
      'l10n_client' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/l10n_client/l10n_client.module',
        'basename' => 'l10n_client.module',
        'name' => 'l10n_client',
        'info' => 
        array (
          'name' => 'Localization client',
          'description' => 'Provides on-page localization',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'core' => '7.x',
          'package' => 'Multilingual',
          'configure' => 'admin/config/regional/translate/client',
          'files' => 
          array (
            0 => 'l10n_client.test',
          ),
          'version' => '7.x-1.3+1-dev',
          'project' => 'l10n_client',
          'datestamp' => '1449095971',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.3+1-dev',
      ),
      'googleanalytics' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/google_analytics/googleanalytics.module',
        'basename' => 'googleanalytics.module',
        'name' => 'googleanalytics',
        'info' => 
        array (
          'name' => 'Google Analytics',
          'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/googleanalytics',
          'files' => 
          array (
            0 => 'googleanalytics.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'version' => '7.x-2.1',
          'project' => 'google_analytics',
          'datestamp' => '1417276982',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'version' => '7.x-2.1',
      ),
      'mediafield' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media/modules/mediafield/mediafield.module',
        'basename' => 'mediafield.module',
        'name' => 'mediafield',
        'info' => 
        array (
          'name' => 'Media Field',
          'description' => 'Provides a field type that stores media-specific data. <em>Deprecated by the core File field type.</em>',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'media',
          'datestamp' => '1436895542',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-beta1',
      ),
      'media_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media/modules/media_wysiwyg/media_wysiwyg.module',
        'basename' => 'media_wysiwyg.module',
        'name' => 'media_wysiwyg',
        'info' => 
        array (
          'name' => 'Media WYSIWYG',
          'description' => 'Adds support for embedding media using client-side WYSIWYG editors.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'test_dependencies' => 
          array (
            0 => 'ckeditor',
            1 => 'token',
            2 => 'wysiwyg',
          ),
          'files' => 
          array (
            0 => 'media_wysiwyg.test',
            1 => 'tests/media_wysiwyg.file_usage.test',
            2 => 'tests/media_wysiwyg.macro.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.0-beta1',
          'project' => 'media',
          'datestamp' => '1436895542',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'version' => '7.x-2.0-beta1',
      ),
      'media_bulk_upload' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media/modules/media_bulk_upload/media_bulk_upload.module',
        'basename' => 'media_bulk_upload.module',
        'name' => 'media_bulk_upload',
        'info' => 
        array (
          'name' => 'Media Bulk Upload',
          'description' => 'Adds support for uploading multiple files at a time.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'multiform',
            2 => 'plupload',
          ),
          'test_dependencies' => 
          array (
            0 => 'multiform',
            1 => 'plupload',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserBulkUpload.inc',
            1 => 'tests/media_bulk_upload.test',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'media',
          'datestamp' => '1436895542',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-beta1',
      ),
      'media_wysiwyg_view_mode' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media/modules/media_wysiwyg_view_mode/media_wysiwyg_view_mode.module',
        'basename' => 'media_wysiwyg_view_mode.module',
        'name' => 'media_wysiwyg_view_mode',
        'info' => 
        array (
          'name' => 'Media WYSIWYG View Mode',
          'description' => 'Enables files inside of the WYSIWYG editor to be displayed using a separate view mode.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media_wysiwyg',
          ),
          'configure' => 'admin/config/media/wysiwyg-view-mode',
          'files' => 
          array (
            0 => 'media_wysiwyg_view_mode.test',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'media',
          'datestamp' => '1436895542',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-beta1',
      ),
      'media_internet' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media/modules/media_internet/media_internet.module',
        'basename' => 'media_internet.module',
        'name' => 'media_internet',
        'info' => 
        array (
          'name' => 'Media Internet Sources',
          'description' => 'Provides an API for accessing media on various internet services',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserInternet.inc',
            1 => 'includes/MediaInternetBaseHandler.inc',
            2 => 'includes/MediaInternetFileHandler.inc',
            3 => 'includes/MediaInternetNoHandlerException.inc',
            4 => 'includes/MediaInternetValidationException.inc',
            5 => 'tests/media_internet.test',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'media',
          'datestamp' => '1436895542',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.0-beta1',
      ),
      'media' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media/media.module',
        'basename' => 'media.module',
        'name' => 'media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Provides the core Media API',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
            1 => 'image',
            2 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/MediaReadOnlyStreamWrapper.inc',
            1 => 'includes/MediaBrowserPluginInterface.inc',
            2 => 'includes/MediaBrowserPlugin.inc',
            3 => 'includes/MediaBrowserUpload.inc',
            4 => 'includes/MediaBrowserView.inc',
            5 => 'includes/MediaEntityTranslationHandler.inc',
            6 => 'includes/media_views_plugin_display_media_browser.inc',
            7 => 'includes/media_views_plugin_style_media_browser.inc',
            8 => 'tests/media.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.0-beta1',
          'project' => 'media',
          'datestamp' => '1436895542',
          'php' => '5.2.4',
        ),
        'schema_version' => '7226',
        'version' => '7.x-2.0-beta1',
      ),
      'advagg_font' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_font/advagg_font.module',
        'basename' => 'advagg_font.module',
        'name' => 'advagg_font',
        'info' => 
        array (
          'name' => 'AdvAgg Async Font Loader',
          'description' => 'Allows one to load fonts in an async manner',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'package' => 'Advanced CSS/JS Aggregation',
          'configure' => 'admin/config/development/performance/advagg/font',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.17',
      ),
      'advagg_js_cdn' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_js_cdn/advagg_js_cdn.module',
        'basename' => 'advagg_js_cdn.module',
        'name' => 'advagg_js_cdn',
        'info' => 
        array (
          'name' => 'AdvAgg CDN Javascript',
          'description' => 'Use a shared CDN for javascript libraries, Google Libraries API currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.17',
      ),
      'advagg_bundler' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_bundler/advagg_bundler.module',
        'basename' => 'advagg_bundler.module',
        'name' => 'advagg_bundler',
        'info' => 
        array (
          'name' => 'AdvAgg Bundler',
          'description' => 'Provides intelligent bundling of CSS and JS files by grouping files that belong together.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/bundler',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'version' => '7.x-2.17',
      ),
      'advagg_css_compress' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_css_compress/advagg_css_compress.module',
        'basename' => 'advagg_css_compress.module',
        'name' => 'advagg_css_compress',
        'info' => 
        array (
          'name' => 'AdvAgg Compress CSS',
          'description' => 'Compress CSS with a 3rd party compressor, YUI currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/css-compress',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'version' => '7.x-2.17',
      ),
      'advagg_js_compress' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_js_compress/advagg_js_compress.module',
        'basename' => 'advagg_js_compress.module',
        'name' => 'advagg_js_compress',
        'info' => 
        array (
          'name' => 'AdvAgg Compress Javascript',
          'description' => 'Compress Javascript with a 3rd party compressor; JSMin+, JSMin c ext, JShrink, and JSqueeze currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/js-compress',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'version' => '7.x-2.17',
      ),
      'advagg_sri' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_sri/advagg_sri.module',
        'basename' => 'advagg_sri.module',
        'name' => 'advagg_sri',
        'info' => 
        array (
          'name' => 'AdvAgg Subresource Integrity',
          'description' => 'Provide the integrity attribute for CSS and JS files.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'package' => 'Advanced CSS/JS Aggregation',
          'configure' => 'admin/config/development/performance/advagg/sri',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.17',
      ),
      'advagg_css_cdn' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_css_cdn/advagg_css_cdn.module',
        'basename' => 'advagg_css_cdn.module',
        'name' => 'advagg_css_cdn',
        'info' => 
        array (
          'name' => 'AdvAgg CDN CSS',
          'description' => 'Use a shared CDN for CSS libraries, Google Libraries API currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.17',
      ),
      'advagg_ext_compress' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_ext_compress/advagg_ext_compress.module',
        'basename' => 'advagg_ext_compress.module',
        'name' => 'advagg_ext_compress',
        'info' => 
        array (
          'name' => 'AdvAgg External Compression',
          'description' => 'Compress Javascript and/or CSS with a command line compressor.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/ext-compress',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.17',
      ),
      'advagg_validator' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_validator/advagg_validator.module',
        'basename' => 'advagg_validator.module',
        'name' => 'advagg_validator',
        'info' => 
        array (
          'name' => 'AdvAgg CSS/JS Validator',
          'description' => 'Validate the CSS and JS files used in Aggregation for syntax errors.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'configure' => 'admin/config/development/performance/advagg/validator',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'version' => '7.x-2.17',
      ),
      'advagg_mod' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_mod/advagg_mod.module',
        'basename' => 'advagg_mod.module',
        'name' => 'advagg_mod',
        'info' => 
        array (
          'name' => 'AdvAgg Modifier',
          'description' => 'Allows one to alter the CSS and JS array.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/mod',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.17',
      ),
      'advagg' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg.module',
        'basename' => 'advagg.module',
        'name' => 'advagg',
        'info' => 
        array (
          'name' => 'Advanced CSS/JS Aggregation',
          'description' => 'Aggregates multiple CSS/JS files in a way that prevents 404 from happening when accessing a CSS or JS file.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/advagg.test',
          ),
          'configure' => 'admin/config/development/performance/advagg',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7211',
        'version' => '7.x-2.17',
      ),
      'token' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.6',
          'project' => 'token',
          'datestamp' => '1425149060',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.6',
      ),
      'file_entity' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/file_entity/file_entity.module',
        'basename' => 'file_entity.module',
        'name' => 'file_entity',
        'info' => 
        array (
          'name' => 'File Entity',
          'description' => 'Extends Drupal file entities to be fieldable and viewable.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'file',
            2 => 'ctools',
            3 => 'system (>=7.9)',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'views/views_handler_argument_file_type.inc',
            1 => 'views/views_handler_field_file_rendered.inc',
            2 => 'views/views_handler_field_file_type.inc',
            3 => 'views/views_handler_filter_file_type.inc',
            4 => 'views/views_handler_filter_schema_type.inc',
            5 => 'views/views_handler_field_file_filename.inc',
            6 => 'views/views_handler_field_file_link.inc',
            7 => 'views/views_handler_field_file_link_edit.inc',
            8 => 'views/views_handler_field_file_link_delete.inc',
            9 => 'views/views_handler_field_file_link_download.inc',
            10 => 'views/views_handler_field_file_link_usage.inc',
            11 => 'views/views_plugin_row_file_rss.inc',
            12 => 'views/views_plugin_row_file_view.inc',
            13 => 'file_entity.test',
          ),
          'configure' => 'admin/config/media/file-settings',
          'version' => '7.x-2.0-beta2',
          'project' => 'file_entity',
          'datestamp' => '1436896443',
          'php' => '5.2.4',
        ),
        'schema_version' => '7216',
        'version' => '7.x-2.0-beta2',
      ),
      'bean_entitycache' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/bean/bean_entitycache/bean_entitycache.module',
        'basename' => 'bean_entitycache.module',
        'name' => 'bean_entitycache',
        'info' => 
        array (
          'name' => 'Bean - Entitycache',
          'description' => 'Integrates the Bean module with the Entitycache module',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'files' => 
          array (
            0 => 'includes/bean_entitycache.core.inc',
          ),
          'dependencies' => 
          array (
            0 => 'bean',
            1 => 'entitycache',
          ),
          'version' => '7.x-1.9',
          'project' => 'bean',
          'datestamp' => '1425439382',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'bean_admin_ui' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/bean/bean_admin_ui/bean_admin_ui.module',
        'basename' => 'bean_admin_ui.module',
        'name' => 'bean_admin_ui',
        'info' => 
        array (
          'name' => 'Bean Admin UI',
          'description' => 'Add the ability to create Block Types in the UI',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'bean_admin_ui.module',
            1 => 'plugins/BeanCustom.class.php',
          ),
          'dependencies' => 
          array (
            0 => 'bean',
          ),
          'configure' => 'admin/structure/block-types',
          'package' => 'Bean',
          'version' => '7.x-1.9',
          'project' => 'bean',
          'datestamp' => '1425439382',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.x-1.9',
      ),
      'bean_usage' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/bean/bean_usage/bean_usage.module',
        'basename' => 'bean_usage.module',
        'name' => 'bean_usage',
        'info' => 
        array (
          'name' => 'Bean Usage',
          'description' => 'View Bean (Block Entities) Usage',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'bean',
            1 => 'blockreference',
          ),
          'package' => 'Bean',
          'version' => '7.x-1.9',
          'project' => 'bean',
          'datestamp' => '1425439382',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'bean_uuid' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/bean/bean_uuid/bean_uuid.module',
        'basename' => 'bean_uuid.module',
        'name' => 'bean_uuid',
        'info' => 
        array (
          'name' => 'Bean UUID',
          'description' => 'Allow deploying bean blocks through Deploy and UUID modules.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'bean',
            1 => 'uuid',
          ),
          'package' => 'Bean',
          'version' => '7.x-1.9',
          'project' => 'bean',
          'datestamp' => '1425439382',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'version' => '7.x-1.9',
      ),
      'bean' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/bean/bean.module',
        'basename' => 'bean.module',
        'name' => 'bean',
        'info' => 
        array (
          'name' => 'Bean',
          'description' => 'Create Bean (Block Entities)',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/bean.core.inc',
            1 => 'includes/bean.info.inc',
            2 => 'plugins/BeanPlugin.class.php',
            3 => 'plugins/BeanDefault.class.php',
            4 => 'includes/translation.handler.bean.inc',
            5 => 'includes/bean.inline_entity_form.inc',
            6 => 'views/views_handler_filter_bean_type.inc',
            7 => 'views/views_handler_field_bean_type.inc',
            8 => 'views/views_handler_field_bean_edit_link.inc',
            9 => 'views/views_handler_field_bean_delete_link.inc',
            10 => 'views/views_handler_field_bean_operations.inc',
            11 => 'bean.test',
          ),
          'dependencies' => 
          array (
            0 => 'entity (>=7.x-1.0)',
            1 => 'ctools',
          ),
          'package' => 'Bean',
          'version' => '7.x-1.9',
          'project' => 'bean',
          'datestamp' => '1425439382',
          'php' => '5.2.4',
        ),
        'schema_version' => '7013',
        'version' => '7.x-1.9',
      ),
      'semanticviews' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/semanticviews/semanticviews.module',
        'basename' => 'semanticviews.module',
        'name' => 'semanticviews',
        'info' => 
        array (
          'name' => 'Semantic Views',
          'description' => 'Views 3 plugins for UI management of output markup',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'files' => 
          array (
            0 => 'semanticviews_plugin_row_fields.inc',
            1 => 'semanticviews_plugin_style_default.inc',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'semanticviews',
          'datestamp' => '1414540129',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-rc2',
      ),
      'block_class' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/block_class/block_class.module',
        'basename' => 'block_class.module',
        'name' => 'block_class',
        'info' => 
        array (
          'name' => 'Block Class',
          'description' => 'Allows assigning CSS classes to blocks.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'files' => 
          array (
            0 => 'block_class.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'context',
            1 => 'features (2.x)',
            2 => 'features_extra',
          ),
          'version' => '7.x-2.3',
          'project' => 'block_class',
          'datestamp' => '1450415951',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'version' => '7.x-2.3',
      ),
      'entitycache' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entitycache/entitycache.module',
        'basename' => 'entitycache.module',
        'name' => 'entitycache',
        'info' => 
        array (
          'name' => 'Entity cache',
          'description' => 'Provides caching for core entities including nodes and taxonomy terms.',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'files' => 
          array (
            0 => 'includes/entitycache.entitycachecontrollerhelper.inc',
            1 => 'includes/entitycache.comment.inc',
            2 => 'includes/entitycache.defaultentitycontroller.inc',
            3 => 'includes/entitycache.node.inc',
            4 => 'includes/entitycache.taxonomy.inc',
            5 => 'includes/entitycache.user.inc',
            6 => 'entitycache.test',
          ),
          'dependencies' => 
          array (
            0 => 'system (>=7.36)',
          ),
          'version' => '7.x-1.5',
          'project' => 'entitycache',
          'datestamp' => '1445943840',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.x-1.5',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of Rules components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.handler.inc',
            6 => 'includes/rules_scheduler.views_default.inc',
            7 => 'includes/rules_scheduler.views.inc',
            8 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'version' => '7.x-2.9',
      ),
      'rules_admin' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.9',
      ),
      'rules_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/rules/rules_i18n/rules_i18n.module',
        'basename' => 'rules_i18n.module',
        'name' => 'rules_i18n',
        'info' => 
        array (
          'name' => 'Rules translation',
          'description' => 'Allows translating rules.',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_i18n.i18n.inc',
            1 => 'rules_i18n.rules.inc',
            2 => 'rules_i18n.test',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.9',
      ),
      'rules' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/faces.inc',
            3 => 'includes/rules.core.inc',
            4 => 'includes/rules.event.inc',
            5 => 'includes/rules.processor.inc',
            6 => 'includes/rules.plugins.inc',
            7 => 'includes/rules.state.inc',
            8 => 'includes/rules.dispatcher.inc',
            9 => 'modules/node.eval.inc',
            10 => 'modules/php.eval.inc',
            11 => 'modules/rules_core.eval.inc',
            12 => 'modules/system.eval.inc',
            13 => 'ui/ui.controller.inc',
            14 => 'ui/ui.core.inc',
            15 => 'ui/ui.data.inc',
            16 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => '7214',
        'version' => '7.x-2.9',
      ),
      'media_youtube' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media_youtube/media_youtube.module',
        'basename' => 'media_youtube.module',
        'name' => 'media_youtube',
        'info' => 
        array (
          'name' => 'Media: YouTube',
          'description' => 'Adds YouTube as a supported media provider.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'files' => 
          array (
            0 => 'includes/MediaYouTubeStreamWrapper.inc',
            1 => 'includes/MediaInternetYouTubeHandler.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'media_youtube',
          'datestamp' => '1432800182',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'version' => '7.x-3.0',
      ),
      'entity2text' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entity2text/entity2text.module',
        'basename' => 'entity2text.module',
        'name' => 'entity2text',
        'info' => 
        array (
          'name' => 'Entity to Text',
          'description' => 'Provides API and Tokens for Rendering Entities to plain text',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'entity_token',
          ),
          'package' => 'Other',
          'version' => '7.x-1.0-alpha3',
          'project' => 'entity2text',
          'datestamp' => '1441110800',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha3',
      ),
      'entity' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.6',
          'project' => 'entity',
          'datestamp' => '1424876582',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.x-1.6',
      ),
      'entity_token' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.6',
          'project' => 'entity',
          'datestamp' => '1424876582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.6',
      ),
      'ds_bootstrap_layouts' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds_bootstrap_layouts/ds_bootstrap_layouts.module',
        'basename' => 'ds_bootstrap_layouts.module',
        'name' => 'ds_bootstrap_layouts',
        'info' => 
        array (
          'name' => 'Display Suite Bootstrap Layouts',
          'description' => 'Implementation of fantastic Twitter Bootstrap scaffolding in Display Suite',
          'package' => 'Display Suite',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'version' => '7.x-3.1',
          'project' => 'ds_bootstrap_layouts',
          'datestamp' => '1429029841',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.1',
      ),
      'entityform_test' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entityform/entityform_test/entityform_test.module',
        'basename' => 'entityform_test.module',
        'name' => 'entityform_test',
        'info' => 
        array (
          'name' => 'entityform_test',
          'description' => 'Feature for Entityform simpletest',
          'core' => '7.x',
          'package' => 'Features',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'entityform',
            2 => 'features',
            3 => 'field_sql_storage',
            4 => 'text',
          ),
          'features' => 
          array (
            'entityform_type' => 
            array (
              0 => 'simpletest_entityform',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'entityform-simpletest_entityform-field_text',
            ),
          ),
          'version' => '7.x-2.0-rc2+2-dev',
          'project' => 'entityform',
          'datestamp' => '1436901542',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-rc2+2-dev',
      ),
      'entityform_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entityform/entityform_i18n/entityform_i18n.module',
        'basename' => 'entityform_i18n.module',
        'name' => 'entityform_i18n',
        'info' => 
        array (
          'name' => 'Entityform translation',
          'description' => 'Translate entityform types.',
          'dependencies' => 
          array (
            0 => 'entityform',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-2.0-rc2+2-dev',
          'project' => 'entityform',
          'datestamp' => '1436901542',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-rc2+2-dev',
      ),
      'entityform_notifications' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entityform/entityform_notifications/entityform_notifications.module',
        'basename' => 'entityform_notifications.module',
        'name' => 'entityform_notifications',
        'info' => 
        array (
          'name' => 'Entityforms Notifications',
          'description' => 'Enable this module if you want Entityforms to send e-mail notifications when a form is submitted.',
          'core' => '7.x',
          'package' => 'Entityforms',
          'dependencies' => 
          array (
            0 => 'entityform',
            1 => 'entity_rules',
            2 => 'entity2text',
            3 => 'rules',
          ),
          'version' => '7.x-2.0-rc2+2-dev',
          'project' => 'entityform',
          'datestamp' => '1436901542',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-2.0-rc2+2-dev',
      ),
      'entityform_anonymous' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entityform/entityform_anonymous/entityform_anonymous.module',
        'basename' => 'entityform_anonymous.module',
        'name' => 'entityform_anonymous',
        'info' => 
        array (
          'name' => 'Entityform Anonymous',
          'description' => 'Allows tracking of anonymous Entityform submissions',
          'core' => '7.x',
          'package' => 'Entityforms',
          'dependencies' => 
          array (
            0 => 'session_api',
            1 => 'entityform',
          ),
          'version' => '7.x-2.0-rc2+2-dev',
          'project' => 'entityform',
          'datestamp' => '1436901542',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-rc2+2-dev',
      ),
      'entityform' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entityform/entityform.module',
        'basename' => 'entityform.module',
        'name' => 'entityform',
        'info' => 
        array (
          'name' => 'Entityforms',
          'description' => 'Provides fieldable entity forms',
          'core' => '7.x',
          'package' => 'Entityforms',
          'configure' => 'admin/structure/entityform_types',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'entityform.admin.inc',
            1 => 'entityform.info.inc',
            2 => 'entityform_type.admin.inc',
            3 => 'entityform.pages.admin.inc',
            4 => 'views/entityform.views.inc',
            5 => 'views/entityform_handler_link_field.inc',
            6 => 'views/entityform_handler_delete_link_field.inc',
            7 => 'views/entityform_handler_edit_link_field.inc',
            8 => 'views/entityform_handler_entityform_operations_field.inc',
            9 => 'views/entityform.views_default.inc',
            10 => 'views/entityform_type_handler_submit_link_field.inc',
            11 => 'entityform.test',
          ),
          'version' => '7.x-2.0-rc2+2-dev',
          'project' => 'entityform',
          'datestamp' => '1436901542',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'version' => '7.x-2.0-rc2+2-dev',
      ),
      'ds_devel' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds/modules/ds_devel/ds_devel.module',
        'basename' => 'ds_devel.module',
        'name' => 'ds_devel',
        'info' => 
        array (
          'name' => 'Display Suite Devel',
          'description' => 'Development functionality for Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
            1 => 'devel',
          ),
          'version' => '7.x-2.12',
          'project' => 'ds',
          'datestamp' => '1452953681',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.12',
      ),
      'ds_search' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds/modules/ds_search/ds_search.module',
        'basename' => 'ds_search.module',
        'name' => 'ds_search',
        'info' => 
        array (
          'name' => 'Display Suite Search',
          'description' => 'Extend the display options for search results for Drupal Core or Apache Solr.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/search',
          'version' => '7.x-2.12',
          'project' => 'ds',
          'datestamp' => '1452953681',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.12',
      ),
      'ds_format' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds/modules/ds_format/ds_format.module',
        'basename' => 'ds_format.module',
        'name' => 'ds_format',
        'info' => 
        array (
          'name' => 'Display Suite Format',
          'description' => 'Provides the Display Suite Code format filter.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/extras',
          'version' => '7.x-2.12',
          'project' => 'ds',
          'datestamp' => '1452953681',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.12',
      ),
      'ds_extras' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds/modules/ds_extras/ds_extras.module',
        'basename' => 'ds_extras.module',
        'name' => 'ds_extras',
        'info' => 
        array (
          'name' => 'Display Suite Extras',
          'description' => 'Contains additional features for Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/extras',
          'version' => '7.x-2.12',
          'project' => 'ds',
          'datestamp' => '1452953681',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.12',
      ),
      'ds_forms' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds/modules/ds_forms/ds_forms.module',
        'basename' => 'ds_forms.module',
        'name' => 'ds_forms',
        'info' => 
        array (
          'name' => 'Display Suite Forms',
          'description' => 'Manage the layout of forms in Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'version' => '7.x-2.12',
          'project' => 'ds',
          'datestamp' => '1452953681',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.12',
      ),
      'ds_ui' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds/modules/ds_ui/ds_ui.module',
        'basename' => 'ds_ui.module',
        'name' => 'ds_ui',
        'info' => 
        array (
          'name' => 'Display Suite UI',
          'description' => 'User interface for managing fields, view modes and classes.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'version' => '7.x-2.12',
          'project' => 'ds',
          'datestamp' => '1452953681',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.12',
      ),
      'ds' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds/ds.module',
        'basename' => 'ds.module',
        'name' => 'ds',
        'info' => 
        array (
          'name' => 'Display Suite',
          'description' => 'Extend the display options for every entity type.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/views_plugin_ds_entity_view.inc',
            1 => 'views/views_plugin_ds_fields_view.inc',
            2 => 'tests/ds.base.test',
            3 => 'tests/ds.search.test',
            4 => 'tests/ds.entities.test',
            5 => 'tests/ds.exportables.test',
            6 => 'tests/ds.views.test',
            7 => 'tests/ds.forms.test',
          ),
          'configure' => 'admin/structure/ds',
          'version' => '7.x-2.12',
          'project' => 'ds',
          'datestamp' => '1452953681',
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'version' => '7.x-2.12',
      ),
      'xautoload' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xautoload/xautoload.module',
        'basename' => 'xautoload.module',
        'name' => 'xautoload',
        'info' => 
        array (
          'name' => 'X Autoload',
          'description' => 'Autoload based on PSR-0, PSR-4 and a custom PHP 5.2 compatibility mode.',
          'core' => '7.x',
          'php' => '5.3',
          'version' => '7.x-5.5',
          'project' => 'xautoload',
          'datestamp' => '1442068740',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7000',
        'version' => '7.x-5.5',
      ),
      'memcache_storage' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/memcache_storage/memcache_storage.module',
        'basename' => 'memcache_storage.module',
        'name' => 'memcache_storage',
        'info' => 
        array (
          'name' => 'Memcache Storage',
          'description' => 'Provides integration with memcached backend for storing cached data.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'configure' => 'admin/config/development/memcache_storage',
          'files' => 
          array (
            0 => 'memcache_storage.api.inc',
          ),
          'version' => '7.x-1.4+16-dev',
          'project' => 'memcache_storage',
          'datestamp' => '1425995586',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7013',
        'version' => '7.x-1.4+16-dev',
      ),
      'libraries' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version-dependent and shared usage of external libraries.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'system (>=7.11)',
          ),
          'files' => 
          array (
            0 => 'tests/libraries.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'libraries',
          'datestamp' => '1391965716',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.2',
      ),
      'variable_admin' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/variable/variable_admin/variable_admin.module',
        'basename' => 'variable_admin.module',
        'name' => 'variable_admin',
        'info' => 
        array (
          'name' => 'Variable admin',
          'description' => 'Variable Administration UI',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'variable_example' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/variable/variable_example/variable_example.module',
        'basename' => 'variable_example.module',
        'name' => 'variable_example',
        'info' => 
        array (
          'name' => 'Variable example',
          'description' => 'An example module showing how to use the Variable API and providing some variables.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'variable_store',
          ),
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'variable_example.variable.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'variable_store' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/variable/variable_store/variable_store.module',
        'basename' => 'variable_store.module',
        'name' => 'variable_store',
        'info' => 
        array (
          'name' => 'Variable store',
          'description' => 'Database storage for variable realms. This is an API module.',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'files' => 
          array (
            0 => 'variable_store.class.inc',
            1 => 'variable_store.test',
          ),
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.5',
      ),
      'variable_realm' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/variable/variable_realm/variable_realm.module',
        'basename' => 'variable_realm.module',
        'name' => 'variable_realm',
        'info' => 
        array (
          'name' => 'Variable realm',
          'description' => 'API to use variable realms from different modules',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'files' => 
          array (
            0 => 'variable_realm.class.inc',
            1 => 'variable_realm_union.class.inc',
          ),
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.5',
      ),
      'variable_views' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/variable/variable_views/variable_views.module',
        'basename' => 'variable_views.module',
        'name' => 'variable_views',
        'info' => 
        array (
          'name' => 'Variable views',
          'description' => 'Provides views integration for variable, included a default variable argument.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'views',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views_plugin_argument_default_variable.inc',
            1 => 'includes/views_handler_field_variable_title.inc',
            2 => 'includes/views_handler_field_variable_value.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'variable' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/variable/variable.module',
        'basename' => 'variable.module',
        'name' => 'variable',
        'info' => 
        array (
          'name' => 'Variable',
          'description' => 'Variable Information and basic variable API',
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/forum.variable.inc',
            1 => 'includes/locale.variable.inc',
            2 => 'includes/menu.variable.inc',
            3 => 'includes/node.variable.inc',
            4 => 'includes/system.variable.inc',
            5 => 'includes/taxonomy.variable.inc',
            6 => 'includes/translation.variable.inc',
            7 => 'includes/user.variable.inc',
            8 => 'variable.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'field_formatter_settings' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/field_formatter_settings/field_formatter_settings.module',
        'basename' => 'field_formatter_settings.module',
        'name' => 'field_formatter_settings',
        'info' => 
        array (
          'name' => 'Field formatter settings API',
          'description' => 'Provides missing alter hooks for field formatter settings and summaries',
          'core' => '7.x',
          'enhances' => 
          array (
            0 => 'field_ui',
            1 => 'views_ui',
          ),
          'version' => '7.x-1.1',
          'project' => 'field_formatter_settings',
          'datestamp' => '1378741903',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.1',
      ),
      'panels_bootstrap_layouts' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/panels_bootstrap_layouts/panels_bootstrap_layouts.module',
        'basename' => 'panels_bootstrap_layouts.module',
        'name' => 'panels_bootstrap_layouts',
        'info' => 
        array (
          'name' => 'Panels Bootstrap Layouts',
          'description' => 'Panel\'s layouts using twitter bootstrap layout system as base.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'version' => '7.x-3.0',
          'project' => 'panels_bootstrap_layouts',
          'datestamp' => '1398607735',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0',
      ),
      'linkit' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/linkit/linkit.module',
        'basename' => 'linkit.module',
        'name' => 'linkit',
        'info' => 
        array (
          'name' => 'Linkit',
          'description' => 'Provides an easy interface for inserting links.',
          'core' => '7.x',
          'configure' => 'admin/config/content/linkit',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'entity',
          ),
          'files' => 
          array (
            0 => 'includes/profile.class.php',
            1 => 'includes/search_plugin.class.php',
            2 => 'plugins/linkit_search/entity.class.php',
            3 => 'plugins/linkit_search/file.class.php',
            4 => 'plugins/linkit_search/node.class.php',
            5 => 'plugins/linkit_search/taxonomy_term.class.php',
            6 => 'plugins/linkit_search/user.class.php',
            7 => 'test/linkit.test',
            8 => 'test/linkit_profile.test',
            9 => 'test/linkit_search_plugin.test',
            10 => 'test/linkit_search_plugin_node.test',
            11 => 'test/linkit_search_plugin_user.test',
            12 => 'test/linkit_search_plugin_taxonomy_term.test',
          ),
          'version' => '7.x-3.5',
          'project' => 'linkit',
          'datestamp' => '1452407341',
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'version' => '7.x-3.5',
      ),
      'views_export' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.13',
          'project' => 'views',
          'datestamp' => '1446804876',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.13',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_messages.inc',
            2 => 'handlers/views_handler_area_result.inc',
            3 => 'handlers/views_handler_area_text.inc',
            4 => 'handlers/views_handler_area_text_custom.inc',
            5 => 'handlers/views_handler_area_view.inc',
            6 => 'handlers/views_handler_argument.inc',
            7 => 'handlers/views_handler_argument_date.inc',
            8 => 'handlers/views_handler_argument_formula.inc',
            9 => 'handlers/views_handler_argument_many_to_one.inc',
            10 => 'handlers/views_handler_argument_null.inc',
            11 => 'handlers/views_handler_argument_numeric.inc',
            12 => 'handlers/views_handler_argument_string.inc',
            13 => 'handlers/views_handler_argument_group_by_numeric.inc',
            14 => 'handlers/views_handler_field.inc',
            15 => 'handlers/views_handler_field_counter.inc',
            16 => 'handlers/views_handler_field_boolean.inc',
            17 => 'handlers/views_handler_field_contextual_links.inc',
            18 => 'handlers/views_handler_field_custom.inc',
            19 => 'handlers/views_handler_field_date.inc',
            20 => 'handlers/views_handler_field_entity.inc',
            21 => 'handlers/views_handler_field_markup.inc',
            22 => 'handlers/views_handler_field_math.inc',
            23 => 'handlers/views_handler_field_numeric.inc',
            24 => 'handlers/views_handler_field_prerender_list.inc',
            25 => 'handlers/views_handler_field_time_interval.inc',
            26 => 'handlers/views_handler_field_serialized.inc',
            27 => 'handlers/views_handler_field_machine_name.inc',
            28 => 'handlers/views_handler_field_url.inc',
            29 => 'handlers/views_handler_filter.inc',
            30 => 'handlers/views_handler_filter_boolean_operator.inc',
            31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            32 => 'handlers/views_handler_filter_combine.inc',
            33 => 'handlers/views_handler_filter_date.inc',
            34 => 'handlers/views_handler_filter_equality.inc',
            35 => 'handlers/views_handler_filter_entity_bundle.inc',
            36 => 'handlers/views_handler_filter_group_by_numeric.inc',
            37 => 'handlers/views_handler_filter_in_operator.inc',
            38 => 'handlers/views_handler_filter_many_to_one.inc',
            39 => 'handlers/views_handler_filter_numeric.inc',
            40 => 'handlers/views_handler_filter_string.inc',
            41 => 'handlers/views_handler_filter_fields_compare.inc',
            42 => 'handlers/views_handler_relationship.inc',
            43 => 'handlers/views_handler_relationship_groupwise_max.inc',
            44 => 'handlers/views_handler_sort.inc',
            45 => 'handlers/views_handler_sort_date.inc',
            46 => 'handlers/views_handler_sort_formula.inc',
            47 => 'handlers/views_handler_sort_group_by_numeric.inc',
            48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            49 => 'handlers/views_handler_sort_random.inc',
            50 => 'includes/base.inc',
            51 => 'includes/handlers.inc',
            52 => 'includes/plugins.inc',
            53 => 'includes/view.inc',
            54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            63 => 'modules/book/views_plugin_argument_default_book_root.inc',
            64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            65 => 'modules/comment/views_handler_field_comment.inc',
            66 => 'modules/comment/views_handler_field_comment_depth.inc',
            67 => 'modules/comment/views_handler_field_comment_link.inc',
            68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            72 => 'modules/comment/views_handler_field_comment_node_link.inc',
            73 => 'modules/comment/views_handler_field_comment_username.inc',
            74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            76 => 'modules/comment/views_handler_field_node_comment.inc',
            77 => 'modules/comment/views_handler_field_node_new_comments.inc',
            78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            81 => 'modules/comment/views_handler_filter_node_comment.inc',
            82 => 'modules/comment/views_handler_sort_comment_thread.inc',
            83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            85 => 'modules/comment/views_plugin_row_comment_rss.inc',
            86 => 'modules/comment/views_plugin_row_comment_view.inc',
            87 => 'modules/contact/views_handler_field_contact_link.inc',
            88 => 'modules/field/views_handler_field_field.inc',
            89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            90 => 'modules/field/views_handler_argument_field_list.inc',
            91 => 'modules/field/views_handler_filter_field_list_boolean.inc',
            92 => 'modules/field/views_handler_argument_field_list_string.inc',
            93 => 'modules/field/views_handler_filter_field_list.inc',
            94 => 'modules/filter/views_handler_field_filter_format_name.inc',
            95 => 'modules/locale/views_handler_field_node_language.inc',
            96 => 'modules/locale/views_handler_filter_node_language.inc',
            97 => 'modules/locale/views_handler_argument_locale_group.inc',
            98 => 'modules/locale/views_handler_argument_locale_language.inc',
            99 => 'modules/locale/views_handler_field_locale_group.inc',
            100 => 'modules/locale/views_handler_field_locale_language.inc',
            101 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            102 => 'modules/locale/views_handler_filter_locale_group.inc',
            103 => 'modules/locale/views_handler_filter_locale_language.inc',
            104 => 'modules/locale/views_handler_filter_locale_version.inc',
            105 => 'modules/node/views_handler_argument_dates_various.inc',
            106 => 'modules/node/views_handler_argument_node_language.inc',
            107 => 'modules/node/views_handler_argument_node_nid.inc',
            108 => 'modules/node/views_handler_argument_node_type.inc',
            109 => 'modules/node/views_handler_argument_node_vid.inc',
            110 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            111 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            112 => 'modules/node/views_handler_field_node.inc',
            113 => 'modules/node/views_handler_field_node_link.inc',
            114 => 'modules/node/views_handler_field_node_link_delete.inc',
            115 => 'modules/node/views_handler_field_node_link_edit.inc',
            116 => 'modules/node/views_handler_field_node_revision.inc',
            117 => 'modules/node/views_handler_field_node_revision_link.inc',
            118 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            119 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            120 => 'modules/node/views_handler_field_node_path.inc',
            121 => 'modules/node/views_handler_field_node_type.inc',
            122 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            123 => 'modules/node/views_handler_filter_node_access.inc',
            124 => 'modules/node/views_handler_filter_node_status.inc',
            125 => 'modules/node/views_handler_filter_node_type.inc',
            126 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            127 => 'modules/node/views_plugin_argument_default_node.inc',
            128 => 'modules/node/views_plugin_argument_validate_node.inc',
            129 => 'modules/node/views_plugin_row_node_rss.inc',
            130 => 'modules/node/views_plugin_row_node_view.inc',
            131 => 'modules/profile/views_handler_field_profile_date.inc',
            132 => 'modules/profile/views_handler_field_profile_list.inc',
            133 => 'modules/profile/views_handler_filter_profile_selection.inc',
            134 => 'modules/search/views_handler_argument_search.inc',
            135 => 'modules/search/views_handler_field_search_score.inc',
            136 => 'modules/search/views_handler_filter_search.inc',
            137 => 'modules/search/views_handler_sort_search_score.inc',
            138 => 'modules/search/views_plugin_row_search_view.inc',
            139 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            140 => 'modules/system/views_handler_argument_file_fid.inc',
            141 => 'modules/system/views_handler_field_file.inc',
            142 => 'modules/system/views_handler_field_file_extension.inc',
            143 => 'modules/system/views_handler_field_file_filemime.inc',
            144 => 'modules/system/views_handler_field_file_uri.inc',
            145 => 'modules/system/views_handler_field_file_status.inc',
            146 => 'modules/system/views_handler_filter_file_status.inc',
            147 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            148 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            150 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            151 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            152 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            153 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            154 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            155 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            156 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            157 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            158 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            159 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            160 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            161 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            162 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            163 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
            164 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
            165 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
            166 => 'modules/system/views_handler_filter_system_type.inc',
            167 => 'modules/translation/views_handler_argument_node_tnid.inc',
            168 => 'modules/translation/views_handler_field_node_link_translate.inc',
            169 => 'modules/translation/views_handler_field_node_translation_link.inc',
            170 => 'modules/translation/views_handler_filter_node_tnid.inc',
            171 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            172 => 'modules/translation/views_handler_relationship_translation.inc',
            173 => 'modules/user/views_handler_argument_user_uid.inc',
            174 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            175 => 'modules/user/views_handler_field_user.inc',
            176 => 'modules/user/views_handler_field_user_language.inc',
            177 => 'modules/user/views_handler_field_user_link.inc',
            178 => 'modules/user/views_handler_field_user_link_cancel.inc',
            179 => 'modules/user/views_handler_field_user_link_edit.inc',
            180 => 'modules/user/views_handler_field_user_mail.inc',
            181 => 'modules/user/views_handler_field_user_name.inc',
            182 => 'modules/user/views_handler_field_user_permissions.inc',
            183 => 'modules/user/views_handler_field_user_picture.inc',
            184 => 'modules/user/views_handler_field_user_roles.inc',
            185 => 'modules/user/views_handler_filter_user_current.inc',
            186 => 'modules/user/views_handler_filter_user_name.inc',
            187 => 'modules/user/views_handler_filter_user_permissions.inc',
            188 => 'modules/user/views_handler_filter_user_roles.inc',
            189 => 'modules/user/views_plugin_argument_default_current_user.inc',
            190 => 'modules/user/views_plugin_argument_default_user.inc',
            191 => 'modules/user/views_plugin_argument_validate_user.inc',
            192 => 'modules/user/views_plugin_row_user_view.inc',
            193 => 'plugins/views_plugin_access.inc',
            194 => 'plugins/views_plugin_access_none.inc',
            195 => 'plugins/views_plugin_access_perm.inc',
            196 => 'plugins/views_plugin_access_role.inc',
            197 => 'plugins/views_plugin_argument_default.inc',
            198 => 'plugins/views_plugin_argument_default_php.inc',
            199 => 'plugins/views_plugin_argument_default_fixed.inc',
            200 => 'plugins/views_plugin_argument_default_raw.inc',
            201 => 'plugins/views_plugin_argument_validate.inc',
            202 => 'plugins/views_plugin_argument_validate_numeric.inc',
            203 => 'plugins/views_plugin_argument_validate_php.inc',
            204 => 'plugins/views_plugin_cache.inc',
            205 => 'plugins/views_plugin_cache_none.inc',
            206 => 'plugins/views_plugin_cache_time.inc',
            207 => 'plugins/views_plugin_display.inc',
            208 => 'plugins/views_plugin_display_attachment.inc',
            209 => 'plugins/views_plugin_display_block.inc',
            210 => 'plugins/views_plugin_display_default.inc',
            211 => 'plugins/views_plugin_display_embed.inc',
            212 => 'plugins/views_plugin_display_extender.inc',
            213 => 'plugins/views_plugin_display_feed.inc',
            214 => 'plugins/views_plugin_display_page.inc',
            215 => 'plugins/views_plugin_exposed_form_basic.inc',
            216 => 'plugins/views_plugin_exposed_form.inc',
            217 => 'plugins/views_plugin_exposed_form_input_required.inc',
            218 => 'plugins/views_plugin_localization_core.inc',
            219 => 'plugins/views_plugin_localization.inc',
            220 => 'plugins/views_plugin_localization_none.inc',
            221 => 'plugins/views_plugin_pager.inc',
            222 => 'plugins/views_plugin_pager_full.inc',
            223 => 'plugins/views_plugin_pager_mini.inc',
            224 => 'plugins/views_plugin_pager_none.inc',
            225 => 'plugins/views_plugin_pager_some.inc',
            226 => 'plugins/views_plugin_query.inc',
            227 => 'plugins/views_plugin_query_default.inc',
            228 => 'plugins/views_plugin_row.inc',
            229 => 'plugins/views_plugin_row_fields.inc',
            230 => 'plugins/views_plugin_row_rss_fields.inc',
            231 => 'plugins/views_plugin_style.inc',
            232 => 'plugins/views_plugin_style_default.inc',
            233 => 'plugins/views_plugin_style_grid.inc',
            234 => 'plugins/views_plugin_style_list.inc',
            235 => 'plugins/views_plugin_style_jump_menu.inc',
            236 => 'plugins/views_plugin_style_mapping.inc',
            237 => 'plugins/views_plugin_style_rss.inc',
            238 => 'plugins/views_plugin_style_summary.inc',
            239 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            240 => 'plugins/views_plugin_style_summary_unformatted.inc',
            241 => 'plugins/views_plugin_style_table.inc',
            242 => 'tests/handlers/views_handlers.test',
            243 => 'tests/handlers/views_handler_area_text.test',
            244 => 'tests/handlers/views_handler_argument_null.test',
            245 => 'tests/handlers/views_handler_argument_string.test',
            246 => 'tests/handlers/views_handler_field.test',
            247 => 'tests/handlers/views_handler_field_boolean.test',
            248 => 'tests/handlers/views_handler_field_custom.test',
            249 => 'tests/handlers/views_handler_field_counter.test',
            250 => 'tests/handlers/views_handler_field_date.test',
            251 => 'tests/handlers/views_handler_field_file_extension.test',
            252 => 'tests/handlers/views_handler_field_file_size.test',
            253 => 'tests/handlers/views_handler_field_math.test',
            254 => 'tests/handlers/views_handler_field_url.test',
            255 => 'tests/handlers/views_handler_field_xss.test',
            256 => 'tests/handlers/views_handler_filter_combine.test',
            257 => 'tests/handlers/views_handler_filter_date.test',
            258 => 'tests/handlers/views_handler_filter_equality.test',
            259 => 'tests/handlers/views_handler_filter_in_operator.test',
            260 => 'tests/handlers/views_handler_filter_numeric.test',
            261 => 'tests/handlers/views_handler_filter_string.test',
            262 => 'tests/handlers/views_handler_sort_random.test',
            263 => 'tests/handlers/views_handler_sort_date.test',
            264 => 'tests/handlers/views_handler_sort.test',
            265 => 'tests/test_handlers/views_test_area_access.inc',
            266 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            267 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            268 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
            269 => 'tests/plugins/views_plugin_display.test',
            270 => 'tests/styles/views_plugin_style_jump_menu.test',
            271 => 'tests/styles/views_plugin_style.test',
            272 => 'tests/styles/views_plugin_style_base.test',
            273 => 'tests/styles/views_plugin_style_mapping.test',
            274 => 'tests/styles/views_plugin_style_unformatted.test',
            275 => 'tests/views_access.test',
            276 => 'tests/views_analyze.test',
            277 => 'tests/views_basic.test',
            278 => 'tests/views_argument_default.test',
            279 => 'tests/views_argument_validator.test',
            280 => 'tests/views_exposed_form.test',
            281 => 'tests/field/views_fieldapi.test',
            282 => 'tests/views_glossary.test',
            283 => 'tests/views_groupby.test',
            284 => 'tests/views_handlers.test',
            285 => 'tests/views_module.test',
            286 => 'tests/views_pager.test',
            287 => 'tests/views_plugin_localization_test.inc',
            288 => 'tests/views_translatable.test',
            289 => 'tests/views_query.test',
            290 => 'tests/views_upgrade.test',
            291 => 'tests/views_test.views_default.inc',
            292 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            293 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            294 => 'tests/node/views_node_revision_relations.test',
            295 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            296 => 'tests/user/views_handler_field_user_name.test',
            297 => 'tests/user/views_user_argument_default.test',
            298 => 'tests/user/views_user_argument_validate.test',
            299 => 'tests/user/views_user.test',
            300 => 'tests/views_cache.test',
            301 => 'tests/views_view.test',
            302 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.13',
          'project' => 'views',
          'datestamp' => '1446804876',
        ),
        'schema_version' => '7302',
        'version' => '7.x-3.13',
      ),
      'context_layouts' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/context/context_layouts/context_layouts.module',
        'basename' => 'context_layouts.module',
        'name' => 'context_layouts',
        'info' => 
        array (
          'name' => 'Context layouts',
          'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/context_layouts_reaction_block.inc',
          ),
          'version' => '7.x-3.6',
          'project' => 'context',
          'datestamp' => '1420573188',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.6',
      ),
      'context_ui' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/context/context_ui/context_ui.module',
        'basename' => 'context_ui.module',
        'name' => 'context_ui',
        'info' => 
        array (
          'name' => 'Context UI',
          'description' => 'Provides a simple UI for settings up a site structure using Context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'configure' => 'admin/structure/context',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context_ui.test',
          ),
          'version' => '7.x-3.6',
          'project' => 'context',
          'datestamp' => '1420573188',
          'php' => '5.2.4',
        ),
        'schema_version' => '6004',
        'version' => '7.x-3.6',
      ),
      'context' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/context/context.module',
        'basename' => 'context.module',
        'name' => 'context',
        'info' => 
        array (
          'name' => 'Context',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'description' => 'Provide modules with a cache that lasts for a single page request.',
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/context.test',
            1 => 'tests/context.conditions.test',
            2 => 'tests/context.reactions.test',
          ),
          'version' => '7.x-3.6',
          'project' => 'context',
          'datestamp' => '1420573188',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-3.6',
      ),
      'entity_translation_upgrade' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entity_translation/entity_translation_upgrade/entity_translation_upgrade.module',
        'basename' => 'entity_translation_upgrade.module',
        'name' => 'entity_translation_upgrade',
        'info' => 
        array (
          'name' => 'Entity Translation Upgrade',
          'description' => 'Provides an upgrade path from node-based translation to field-based translation.',
          'package' => 'Multilingual - Entity Translation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_translation',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'entity_translation',
          'datestamp' => '1421971088',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.0-beta4',
      ),
      'entity_translation_i18n_menu' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entity_translation/entity_translation_i18n_menu/entity_translation_i18n_menu.module',
        'basename' => 'entity_translation_i18n_menu.module',
        'name' => 'entity_translation_i18n_menu',
        'info' => 
        array (
          'name' => 'Entity Translation Menu',
          'description' => 'Allows menu items to be translated on the entity form.',
          'package' => 'Multilingual - Entity Translation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_translation',
            1 => 'i18n',
            2 => 'i18n_menu',
          ),
          'files' => 
          array (
            0 => 'entity_translation_i18n_menu.test',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'entity_translation',
          'datestamp' => '1421971088',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta4',
      ),
      'entity_translation' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entity_translation/entity_translation.module',
        'basename' => 'entity_translation.module',
        'name' => 'entity_translation',
        'info' => 
        array (
          'name' => 'Entity Translation',
          'description' => 'Allows entities to be translated into different languages.',
          'package' => 'Multilingual - Entity Translation',
          'core' => '7.x',
          'configure' => 'admin/config/regional/entity_translation',
          'dependencies' => 
          array (
            0 => 'locale (>7.14)',
          ),
          'files' => 
          array (
            0 => 'includes/translation.handler_factory.inc',
            1 => 'includes/translation.handler.inc',
            2 => 'includes/translation.handler.comment.inc',
            3 => 'includes/translation.handler.node.inc',
            4 => 'includes/translation.handler.taxonomy_term.inc',
            5 => 'includes/translation.handler.user.inc',
            6 => 'tests/entity_translation.test',
            7 => 'views/entity_translation_handler_relationship.inc',
            8 => 'views/entity_translation_handler_field_translate_link.inc',
            9 => 'views/entity_translation_handler_field_label.inc',
            10 => 'views/entity_translation_handler_filter_entity_type.inc',
            11 => 'views/entity_translation_handler_filter_language.inc',
            12 => 'views/entity_translation_handler_filter_translation_exists.inc',
            13 => 'views/entity_translation_handler_field_field.inc',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'entity_translation',
          'datestamp' => '1421971088',
          'php' => '5.2.4',
        ),
        'schema_version' => '7007',
        'version' => '7.x-1.0-beta4',
      ),
      'icon_block' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/icon/modules/icon_block/icon_block.module',
        'basename' => 'icon_block.module',
        'name' => 'icon_block',
        'info' => 
        array (
          'name' => 'Icon API: Block',
          'description' => 'Provides icon integration with blocks.',
          'core' => '7.x',
          'package' => 'Icon API',
          'files' => 
          array (
            0 => 'icon_block.install',
            1 => 'icon_block.module',
          ),
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'icon',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'icon',
          'datestamp' => '1438832040',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta6',
      ),
      'icon_menu' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/icon/modules/icon_menu/icon_menu.module',
        'basename' => 'icon_menu.module',
        'name' => 'icon_menu',
        'info' => 
        array (
          'name' => 'Icon API: Menu',
          'description' => 'Provides icon integration with menu items.',
          'core' => '7.x',
          'package' => 'Icon API',
          'files' => 
          array (
            0 => 'icon_menu.install',
            1 => 'icon_menu.module',
          ),
          'dependencies' => 
          array (
            0 => 'icon',
            1 => 'menu',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'icon',
          'datestamp' => '1438832040',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta6',
      ),
      'icon_field' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/icon/modules/icon_field/icon_field.module',
        'basename' => 'icon_field.module',
        'name' => 'icon_field',
        'info' => 
        array (
          'name' => 'Icon API: Field',
          'description' => 'Provides a field for attaching an icon to a fieldable entity.',
          'core' => '7.x',
          'package' => 'Icon API',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'icon',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'icon',
          'datestamp' => '1438832040',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta6',
      ),
      'icon_filter' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/icon/modules/icon_filter/icon_filter.module',
        'basename' => 'icon_filter.module',
        'name' => 'icon_filter',
        'info' => 
        array (
          'name' => 'Icon API: Filter',
          'description' => 'Provides a filter for text fields to replace an icon token with icon markup.',
          'core' => '7.x',
          'package' => 'Icon API',
          'dependencies' => 
          array (
            0 => 'filter',
            1 => 'icon',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'icon',
          'datestamp' => '1438832040',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta6',
      ),
      'icon' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/icon/icon.module',
        'basename' => 'icon.module',
        'name' => 'icon',
        'info' => 
        array (
          'name' => 'Icon API',
          'description' => 'Implements an API for icon providers and an administrative UI for integrating icons through out the site.',
          'core' => '7.x',
          'package' => 'Icon API',
          'configure' => 'admin/config/media/icon',
          'files' => 
          array (
            0 => 'icon.install',
            1 => 'icon.module',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'icon',
          'datestamp' => '1438832040',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta6',
      ),
      'media_youtube_upload' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media_youtube_upload/media_youtube_upload.module',
        'basename' => 'media_youtube_upload.module',
        'name' => 'media_youtube_upload',
        'info' => 
        array (
          'name' => 'Media: YouTube upload',
          'description' => 'Provides field support for uploading files directly to YouTube',
          'core' => '7.x',
          'package' => 'Media',
          'dependencies' => 
          array (
            0 => 'media (>=7.x-2.x)',
            1 => 'media_youtube',
            2 => 'image',
            3 => 'libraries',
            4 => 'list',
            5 => 'options',
            6 => 'taxonomy',
            7 => 'text',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserYoutubeUpload.inc',
          ),
          'configure' => 'admin/config/media/media_youtube_upload',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'expire' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/expire/expire.module',
        'basename' => 'expire.module',
        'name' => 'expire',
        'info' => 
        array (
          'name' => 'Cache Expiration',
          'description' => 'Logic for expiring cached pages.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'configure' => 'admin/config/system/expire',
          'files' => 
          array (
            0 => 'includes/expire.api.inc',
            1 => 'includes/expire.comment.inc',
            2 => 'includes/expire.domain.inc',
            3 => 'includes/expire.interface.inc',
            4 => 'includes/expire.menu_link.inc',
            5 => 'includes/expire.node.inc',
            6 => 'includes/expire.user.inc',
            7 => 'includes/expire.votingapi.inc',
            8 => 'includes/expire.file.inc',
          ),
          'version' => '7.x-2.0-rc4',
          'project' => 'expire',
          'datestamp' => '1414746830',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'version' => '7.x-2.0-rc4',
      ),
      'panelizer' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/panelizer/panelizer.module',
        'basename' => 'panelizer.module',
        'name' => 'panelizer',
        'info' => 
        array (
          'name' => 'Panelizer',
          'description' => 'Allow any node type to have custom panel displays, similar to the panel node type.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
            1 => 'ctools',
            2 => 'page_manager',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/content/panelizer',
          'files' => 
          array (
            0 => 'plugins/views/panelizer_handler_field_link.inc',
            1 => 'plugins/views/panelizer_handler_panelizer_status.inc',
            2 => 'plugins/views/panelizer_handler_filter_panelizer_status.inc',
            3 => 'plugins/views/panelizer_plugin_row_panelizer_node_view.inc',
          ),
          'version' => '7.x-3.1',
          'project' => 'panelizer',
          'datestamp' => '1360785942',
          'php' => '5.2.4',
        ),
        'schema_version' => '7110',
        'version' => '7.x-3.1',
      ),
      'views_bulk_operations' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/views_bulk_operations/views_bulk_operations.module',
        'basename' => 'views_bulk_operations.module',
        'name' => 'views_bulk_operations',
        'info' => 
        array (
          'name' => 'Views Bulk Operations',
          'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2.9',
          'files' => 
          array (
            0 => 'plugins/operation_types/base.class.php',
            1 => 'views/views_bulk_operations_handler_field_operations.inc',
          ),
          'version' => '7.x-3.3',
          'project' => 'views_bulk_operations',
          'datestamp' => '1435764542',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.3',
      ),
      'actions_permissions' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/views_bulk_operations/actions_permissions.module',
        'basename' => 'actions_permissions.module',
        'name' => 'actions_permissions',
        'info' => 
        array (
          'name' => 'Actions permissions (VBO)',
          'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
          'package' => 'Administration',
          'core' => '7.x',
          'version' => '7.x-3.3',
          'project' => 'views_bulk_operations',
          'datestamp' => '1435764542',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.3',
      ),
      'elysia_cron' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/elysia_cron/elysia_cron.module',
        'basename' => 'elysia_cron.module',
        'name' => 'elysia_cron',
        'info' => 
        array (
          'name' => 'Elysia Cron',
          'description' => 'Extended cron support with crontab-like scheduling and other features.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'elysia_cron_update.php',
            1 => 'elysia_drupalconv.php',
          ),
          'configure' => 'admin/config/system/cron',
          'version' => '7.x-2.1',
          'project' => 'elysia_cron',
          'datestamp' => '1331658045',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '1',
        'version' => '7.x-2.1',
      ),
      'entity_rules' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entity_rules/entity_rules.module',
        'basename' => 'entity_rules.module',
        'name' => 'entity_rules',
        'info' => 
        array (
          'name' => 'Entity Rules',
          'description' => 'Provides UI for select Rules to execute during Entity Events',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'rules',
          ),
          'version' => '7.x-1.0-alpha4',
          'project' => 'entity_rules',
          'datestamp' => '1386645215',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'version' => '7.x-1.0-alpha4',
      ),
      'title' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/title/title.module',
        'basename' => 'title.module',
        'name' => 'title',
        'info' => 
        array (
          'name' => 'Title',
          'description' => 'Replaces entity legacy fields with regular fields.',
          'core' => '7.x',
          'package' => 'Fields',
          'configure' => 'admin/config/content/title',
          'dependencies' => 
          array (
            0 => 'system (>7.14)',
          ),
          'files' => 
          array (
            0 => 'title.module',
            1 => 'views/views_handler_title_field.inc',
            2 => 'tests/title.test',
          ),
          'version' => '7.x-1.0-alpha7',
          'project' => 'title',
          'datestamp' => '1363626024',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.0-alpha7',
      ),
      'languageicons' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/languageicons/languageicons.module',
        'basename' => 'languageicons.module',
        'name' => 'languageicons',
        'info' => 
        array (
          'name' => 'Language Icons',
          'description' => 'Adds icons to language links.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Multilingual',
          'core' => '7.x',
          'configure' => 'admin/config/regional/language/icons',
          'version' => '7.x-1.1',
          'project' => 'languageicons',
          'datestamp' => '1399825730',
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'version' => '7.x-1.1',
      ),
      'i18n_access' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n_access/i18n_access.module',
        'basename' => 'i18n_access.module',
        'name' => 'i18n_access',
        'info' => 
        array (
          'name' => 'Translation Access',
          'description' => 'Control access to creating content in different languages.',
          'package' => 'Multilanguage',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'translation',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'i18n_access',
          'datestamp' => '1380582441',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.x-dev',
      ),
      'email' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/email/email.module',
        'basename' => 'email.module',
        'name' => 'email',
        'info' => 
        array (
          'name' => 'Email',
          'description' => 'Defines an email field type.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'email.migrate.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'email',
          'datestamp' => '1397134155',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.3',
      ),
      'fitvids' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/fitvids/fitvids.module',
        'basename' => 'fitvids.module',
        'name' => 'fitvids',
        'info' => 
        array (
          'name' => 'FitVids',
          'description' => 'jQuery plugin for fluid width video embeds.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'configure' => 'admin/config/media/fitvids',
          'scripts' => 
          array (
            0 => 'fitvids.js',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'fitvids.css',
            ),
          ),
          'version' => '7.x-1.17',
          'project' => 'fitvids',
          'datestamp' => '1417817582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.17',
      ),
      'custom' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/custom/custom/custom.module',
        'basename' => 'custom.module',
        'name' => 'custom',
        'info' => 
        array (
          'name' => 'Custom',
          'description' => 'TODO: Description of module',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/custom.test',
          ),
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'module_builder' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/devel/module_builder/module_builder.module',
        'basename' => 'module_builder.module',
        'name' => 'module_builder',
        'info' => 
        array (
          'name' => 'Module Builder',
          'description' => 'Builds scaffolding for custom modules.',
          'package' => 'Development',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'module_builder.module',
            1 => 'includes/module_builder.admin.inc',
            2 => 'tests/module_builder.test',
          ),
          'version' => '7.x-2.x-dev',
          'project' => 'module_builder',
          'datestamp' => '1450642448',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.x-dev',
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/devel/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'files' => 
          array (
            0 => 'devel_generate.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'devel' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/devel/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'version' => '7.x-1.5',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/devel/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'admin_devel' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/admin/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-rc5',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/admin/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'version' => '7.x-3.0-rc5',
      ),
      'admin_menu' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/admin/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'version' => '7.x-3.0-rc5',
      ),
      'masquerade' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/admin/masquerade/masquerade.module',
        'basename' => 'masquerade.module',
        'name' => 'masquerade',
        'info' => 
        array (
          'name' => 'Masquerade',
          'description' => 'This module allows permitted users to masquerade as other users.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'masquerade.test',
          ),
          'configure' => 'admin/config/people/masquerade',
          'version' => '7.x-1.0-rc7',
          'project' => 'masquerade',
          'datestamp' => '1394333639',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.0-rc7',
      ),
      'admin_menu_environmental' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/admin/admin_menu_environmental/admin_menu_environmental.module',
        'basename' => 'admin_menu_environmental.module',
        'name' => 'admin_menu_environmental',
        'info' => 
        array (
          'name' => 'Administration menu environmental',
          'description' => 'Change the admin menu\'s color according to environment and integration with masquerade.',
          'dependencies' => 
          array (
            0 => 'admin_menu',
            1 => 'masquerade',
          ),
          'package' => 'Administration',
          'configure' => 'admin/config/administration/admin_menu/environmental',
          'core' => '7.x',
          'version' => '7.x-1.x-dev',
          'project' => 'admin_menu_environmental',
          'datestamp' => '1430301482',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.x-dev',
      ),
      'module_filter' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/admin/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'package' => 'Administration',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.js',
            2 => 'module_filter.module',
            3 => 'module_filter.admin.inc',
            4 => 'module_filter.theme.inc',
            5 => 'css/module_filter.css',
            6 => 'css/module_filter_tab.css',
            7 => 'js/module_filter.js',
            8 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-2.0',
          'project' => 'module_filter',
          'datestamp' => '1424631189',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'version' => '7.x-2.0',
      ),
    ),
    'themes' => 
    array (
      'stark' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
        ),
        'version' => '7.42',
      ),
      'bartik' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
        ),
        'version' => '7.42',
      ),
      'seven' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
        ),
        'version' => '7.42',
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.42',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
        ),
        'version' => '7.42',
      ),
      'myu' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/themes/myu/myu.info',
        'basename' => 'myu.info',
        'name' => 'Bootstrap Sub-Theme: Media: YouTube Upload (CDN)',
        'info' => 
        array (
          'name' => 'Bootstrap Sub-Theme: Media: YouTube Upload (CDN)',
          'description' => 'Uses the jsDelivr CDN for all CSS and JavaScript. No source files or compiling is necessary and is recommended for simple sites or beginners.',
          'core' => '7.x',
          'base theme' => 'bootstrap',
          'regions' => 
          array (
            'navigation' => 'Navigation',
            'header' => 'Top Bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'Primary',
            'sidebar_second' => 'Secondary',
            'footer_left' => 'Footer Left',
            'footer_right' => 'Footer Right',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/style.css',
            ),
          ),
        ),
        'version' => NULL,
      ),
      'bootstrap' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/themes/bootstrap/bootstrap.info',
        'basename' => 'bootstrap.info',
        'name' => 'Bootstrap',
        'info' => 
        array (
          'name' => 'Bootstrap',
          'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
          'core' => '7.x',
          'simplytest_dependencies' => 
          array (
            0 => 'jquery_update',
          ),
          'regions' => 
          array (
            'navigation' => 'Navigation',
            'header' => 'Top Bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'Primary',
            'sidebar_second' => 'Secondary',
            'footer' => 'Footer',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'settings' => 
          array (
            'bootstrap_fluid_container' => '0',
            'bootstrap_button_size' => '',
            'bootstrap_button_colorize' => '1',
            'bootstrap_button_iconize' => '1',
            'bootstrap_image_shape' => '',
            'bootstrap_image_responsive' => '1',
            'bootstrap_table_bordered' => '0',
            'bootstrap_table_condensed' => '0',
            'bootstrap_table_hover' => '1',
            'bootstrap_table_striped' => '1',
            'bootstrap_table_responsive' => '1',
            'bootstrap_breadcrumb' => '1',
            'bootstrap_breadcrumb_home' => '0',
            'bootstrap_breadcrumb_title' => '1',
            'bootstrap_navbar_position' => '',
            'bootstrap_navbar_inverse' => '0',
            'bootstrap_pager_first_and_last' => '1',
            'bootstrap_region_well-navigation' => '',
            'bootstrap_region_well-header' => '',
            'bootstrap_region_well-highlighted' => '',
            'bootstrap_region_well-help' => '',
            'bootstrap_region_well-content' => '',
            'bootstrap_region_well-sidebar_first' => 'well',
            'bootstrap_region_well-sidebar_second' => '',
            'bootstrap_region_well-footer' => '',
            'bootstrap_anchors_fix' => '0',
            'bootstrap_anchors_smooth_scrolling' => '0',
            'bootstrap_forms_required_has_error' => '0',
            'bootstrap_forms_has_error_value_toggle' => '1',
            'bootstrap_forms_smart_descriptions' => '1',
            'bootstrap_forms_smart_descriptions_limit' => '250',
            'bootstrap_forms_smart_descriptions_allowed_tags' => 'b, code, em, i, kbd, span, strong',
            'bootstrap_popover_enabled' => '1',
            'bootstrap_popover_animation' => '1',
            'bootstrap_popover_html' => '0',
            'bootstrap_popover_placement' => 'right',
            'bootstrap_popover_selector' => '',
            'bootstrap_popover_trigger' => 
            array (
              '\'hover\'' => '0',
              '\'focus\'' => '0',
              '\'click\'' => 'click',
            ),
            'bootstrap_popover_trigger_autoclose' => '1',
            'bootstrap_popover_title' => '',
            'bootstrap_popover_content' => '',
            'bootstrap_popover_delay' => '0',
            'bootstrap_popover_container' => 'body',
            'bootstrap_tooltip_enabled' => '1',
            'bootstrap_tooltip_animation' => '1',
            'bootstrap_tooltip_html' => '0',
            'bootstrap_tooltip_placement' => 'auto left',
            'bootstrap_tooltip_selector' => '',
            'bootstrap_tooltip_trigger' => 
            array (
              '\'hover\'' => 'hover',
              '\'focus\'' => 'focus',
              '\'click\'' => '0',
            ),
            'bootstrap_tooltip_delay' => '0',
            'bootstrap_tooltip_container' => 'body',
            'bootstrap_cdn_provider' => 'jsdelivr',
            'bootstrap_cdn_custom_css' => 'https://cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.css',
            'bootstrap_cdn_custom_css_min' => 'https://cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.min.css',
            'bootstrap_cdn_custom_js' => 'https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.js',
            'bootstrap_cdn_custom_js_min' => 'https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js',
            'bootstrap_cdn_jsdelivr_version' => '3.3.5',
            'bootstrap_cdn_jsdelivr_theme' => 'bootstrap',
            'toggle_name' => '1',
            'toggle_search' => '1',
            'jquery_update_jquery_version' => '2.1',
          ),
          'exclude' => 
          array (
            'css' => 
            array (
              0 => 'misc/vertical-tabs.css',
              1 => 'modules/aggregator/aggregator.css',
              2 => 'modules/book/book.css',
              3 => 'modules/comment/comment.css',
              4 => 'modules/dblog/dblog.css',
              5 => 'modules/file/file.css',
              6 => 'modules/filter/filter.css',
              7 => 'modules/forum/forum.css',
              8 => 'modules/help/help.css',
              9 => 'modules/menu/menu.css',
              10 => 'modules/openid/openid.css',
              11 => 'modules/poll/poll.css',
              12 => 'modules/search/search.css',
              13 => 'modules/statistics/statistics.css',
              14 => 'modules/syslog/syslog.css',
              15 => 'modules/system/maintenance.css',
              16 => 'modules/system/system.maintenance.css',
              17 => 'modules/system/system.menus.css',
              18 => 'modules/system/system.messages.css',
              19 => 'modules/system/system.theme.css',
              20 => 'modules/taxonomy/taxonomy.css',
              21 => 'modules/tracker/tracker.css',
              22 => 'modules/update/update.css',
              23 => 'modules/user/user.css',
            ),
          ),
          'breakpoints' => 
          array (
            'screen-xs-max' => '(max-width: 767px)',
            'screen-sm-min' => '(min-width: 768px)',
            'screen-sm-max' => '(max-width: 991px)',
            'screen-md-min' => '(min-width: 992px)',
            'screen-md-max' => '(max-width: 1199px)',
            'screen-lg-min' => '(min-width: 1200px)',
          ),
          'multipliers' => 
          array (
            'screen-xs-max' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-sm-min' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-sm-max' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-md-min' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-md-max' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-lg-min' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
          ),
          'version' => '7.x-3.4',
          'project' => 'bootstrap',
          'datestamp' => '1450532342',
        ),
        'version' => '7.x-3.4',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.42',
        'description' => 'This platform is running Drupal 7.42',
      ),
    ),
    'profiles' => 
    array (
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => './profiles/standard/standard.profile',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.42',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.42',
      ),
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => './profiles/minimal/minimal.profile',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.42',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1454517955',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.42',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'i18n_panels' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/panels/i18n_panels/i18n_panels.module',
        'basename' => 'i18n_panels.module',
        'name' => 'i18n_panels',
        'info' => 
        array (
          'name' => 'Panels translation',
          'description' => 'Supports translatable panels items.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'panels',
            2 => 'i18n_string',
            3 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-3.5',
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.5',
      ),
      'panels_mini' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/panels/panels_mini/panels_mini.module',
        'basename' => 'panels_mini.module',
        'name' => 'panels_mini',
        'info' => 
        array (
          'name' => 'Mini panels',
          'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
          'package' => 'Panels',
          'version' => '7.x-3.5',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/export_ui/panels_mini_ui.class.php',
          ),
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.5',
      ),
      'panels_ipe' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/panels/panels_ipe/panels_ipe.module',
        'basename' => 'panels_ipe.module',
        'name' => 'panels_ipe',
        'info' => 
        array (
          'name' => 'Panels In-Place Editor',
          'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
          'package' => 'Panels',
          'version' => '7.x-3.5',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/panels',
          'files' => 
          array (
            0 => 'panels_ipe.module',
          ),
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.5',
      ),
      'panels_node' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/panels/panels_node/panels_node.module',
        'basename' => 'panels_node.module',
        'name' => 'panels_node',
        'info' => 
        array (
          'name' => 'Panel nodes',
          'description' => 'Create nodes that are divided into areas with selectable content.',
          'package' => 'Panels',
          'version' => '7.x-3.5',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'configure' => 'admin/structure/panels',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'panels_node.module',
          ),
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'version' => '7.x-3.5',
      ),
      'panels' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/panels/panels.module',
        'basename' => 'panels.module',
        'name' => 'panels',
        'info' => 
        array (
          'name' => 'Panels',
          'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
          'core' => '7.x',
          'package' => 'Panels',
          'version' => '7.x-3.5',
          'configure' => 'admin/structure/panels',
          'dependencies' => 
          array (
            0 => 'ctools (>1.5)',
          ),
          'files' => 
          array (
            0 => 'panels.module',
            1 => 'includes/common.inc',
            2 => 'includes/legacy.inc',
            3 => 'includes/plugins.inc',
            4 => 'plugins/views/panels_views_plugin_row_fields.inc',
          ),
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'version' => '7.x-3.5',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'bulk_export' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'page_manager' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'stylizer' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'views_content' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'version' => '7.x-1.9',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'term_depth' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/term_depth/term_depth.module',
        'basename' => 'term_depth.module',
        'name' => 'term_depth',
        'info' => 
        array (
          'name' => 'Term Depth access',
          'description' => 'Controls access to context based upon term depth',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'ctools' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/css-cache.inc',
            2 => 'includes/math-expr.inc',
            3 => 'includes/stylizer.inc',
            4 => 'tests/css_cache.test',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.9',
      ),
      'l10n_update' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/l10n_update/l10n_update.module',
        'basename' => 'l10n_update.module',
        'name' => 'l10n_update',
        'info' => 
        array (
          'name' => 'Localization update',
          'description' => 'Provides automatic downloads and updates for translations.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'core' => '7.x',
          'package' => 'Multilingual',
          'files' => 
          array (
            0 => 'includes/gettext/PoHeader.php',
            1 => 'includes/gettext/PoItem.php',
            2 => 'includes/gettext/PoMemoryWriter.php',
            3 => 'includes/gettext/PoMetadataInterface.php',
            4 => 'includes/gettext/PoReaderInterface.php',
            5 => 'includes/gettext/PoStreamInterface.php',
            6 => 'includes/gettext/PoStreamReader.php',
            7 => 'includes/gettext/PoStreamWriter.php',
            8 => 'includes/gettext/PoWriterInterface.php',
            9 => 'includes/locale/Gettext.php',
            10 => 'includes/locale/PoDatabaseReader.php',
            11 => 'includes/locale/PoDatabaseWriter.php',
            12 => 'includes/locale/SourceString.php',
            13 => 'includes/locale/StringBase.php',
            14 => 'includes/locale/StringDatabaseStorage.php',
            15 => 'includes/locale/StringInterface.php',
            16 => 'includes/locale/StringStorageException.php',
            17 => 'includes/locale/StringStorageInterface.php',
            18 => 'includes/locale/TranslationString.php',
            19 => 'includes/locale/TranslationsStreamWrapper.php',
            20 => 'tests/L10nUpdateCronTest.test',
            21 => 'tests/L10nUpdateInterfaceTest.test',
            22 => 'tests/L10nUpdateTest.test',
            23 => 'tests/L10nUpdateTestBase.test',
          ),
          'version' => '7.x-2.0',
          'project' => 'l10n_update',
          'datestamp' => '1415625781',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'version' => '7.x-2.0',
      ),
      'jquery_update' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/jquery_update/jquery_update.module',
        'basename' => 'jquery_update.module',
        'name' => 'jquery_update',
        'info' => 
        array (
          'name' => 'jQuery Update',
          'description' => 'Update jQuery and jQuery UI to a more recent version.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jquery_update.module',
            1 => 'jquery_update.install',
          ),
          'configure' => 'admin/config/development/jquery_update',
          'version' => '7.x-2.7',
          'project' => 'jquery_update',
          'datestamp' => '1445379855',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.7',
      ),
      'fontawesome' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/fontawesome/fontawesome.module',
        'basename' => 'fontawesome.module',
        'name' => 'fontawesome',
        'info' => 
        array (
          'name' => 'Font Awesome',
          'description' => 'Iconic font designed for use with Twitter Bootstrap.',
          'core' => '7.x',
          'php' => '5',
          'dependencies' => 
          array (
            0 => 'libraries (>=7.x-2.0)',
          ),
          'files' => 
          array (
            0 => 'fontawesome.install',
            1 => 'fontawesome.module',
          ),
          'version' => '7.x-2.5',
          'project' => 'fontawesome',
          'datestamp' => '1445924954',
        ),
        'schema_version' => '7001',
        'version' => '7.x-2.5',
      ),
      'simple_fb_connect' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/simple_fb_connect/simple_fb_connect.module',
        'basename' => 'simple_fb_connect.module',
        'name' => 'simple_fb_connect',
        'info' => 
        array (
          'name' => 'Simple FB Connect',
          'description' => 'A simple module to allow users to login/singup with their Facebook account',
          'package' => 'Facebook',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
            1 => 'xautoload',
          ),
          'configure' => 'admin/config/people/simple-fb-connect',
          'version' => '7.x-2.4',
          'project' => 'simple_fb_connect',
          'datestamp' => '1454490867',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-2.4',
      ),
      'logintoboggan_rules' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/logintoboggan/contrib/logintoboggan_rules/logintoboggan_rules.module',
        'basename' => 'logintoboggan_rules.module',
        'name' => 'logintoboggan_rules',
        'info' => 
        array (
          'name' => 'LoginToboggan Rules Integration',
          'description' => 'Integrates LoginToboggan with Rules module',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'logintoboggan',
            1 => 'rules',
          ),
          'version' => '7.x-1.5',
          'project' => 'logintoboggan',
          'datestamp' => '1430501885',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'logintoboggan_content_access_integration' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/logintoboggan/contrib/logintoboggan_content_access_integration/logintoboggan_content_access_integration.module',
        'basename' => 'logintoboggan_content_access_integration.module',
        'name' => 'logintoboggan_content_access_integration',
        'info' => 
        array (
          'name' => 'LoginToboggan Content Access Integration',
          'description' => 'Integrates LoginToboggan with Content Access module, so that Non-validated users are handled correctly',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'logintoboggan',
            1 => 'content_access',
          ),
          'version' => '7.x-1.5',
          'project' => 'logintoboggan',
          'datestamp' => '1430501885',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'logintoboggan_variable' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/logintoboggan/contrib/logintoboggan_variable/logintoboggan_variable.module',
        'basename' => 'logintoboggan_variable.module',
        'name' => 'logintoboggan_variable',
        'info' => 
        array (
          'name' => 'LoginToboggan Variable Integration',
          'description' => 'Integrates LoginToboggan with Variable module',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'logintoboggan',
            1 => 'variable',
          ),
          'version' => '7.x-1.5',
          'project' => 'logintoboggan',
          'datestamp' => '1430501885',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'logintoboggan' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/logintoboggan/logintoboggan.module',
        'basename' => 'logintoboggan.module',
        'name' => 'logintoboggan',
        'info' => 
        array (
          'name' => 'LoginToboggan',
          'description' => 'Improves Drupal\'s login system.',
          'core' => '7.x',
          'configure' => 'admin/config/system/logintoboggan',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'logintoboggan.css',
            ),
          ),
          'version' => '7.x-1.5',
          'project' => 'logintoboggan',
          'datestamp' => '1430501885',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.5',
      ),
      'honeypot' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/honeypot/honeypot.module',
        'basename' => 'honeypot.module',
        'name' => 'honeypot',
        'info' => 
        array (
          'name' => 'Honeypot',
          'description' => 'Mitigates spam form submissions using the honeypot method.',
          'core' => '7.x',
          'configure' => 'admin/config/content/honeypot',
          'package' => 'Spam control',
          'files' => 
          array (
            0 => 'honeypot.test',
          ),
          'version' => '7.x-1.21',
          'project' => 'honeypot',
          'datestamp' => '1441334340',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.x-1.21',
      ),
      'xmlsitemap_engines' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap_engines/xmlsitemap_engines.module',
        'basename' => 'xmlsitemap_engines.module',
        'name' => 'xmlsitemap_engines',
        'info' => 
        array (
          'name' => 'XML sitemap engines',
          'description' => 'Submit the sitemap to search engines.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_engines.module',
            1 => 'xmlsitemap_engines.admin.inc',
            2 => 'xmlsitemap_engines.install',
            3 => 'tests/xmlsitemap_engines.test',
          ),
          'recommends' => 
          array (
            0 => 'site_verify',
          ),
          'configure' => 'admin/config/search/xmlsitemap/engines',
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'php' => '5.2.4',
        ),
        'schema_version' => '6202',
        'version' => '7.x-2.2',
      ),
      'xmlsitemap_menu' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap_menu/xmlsitemap_menu.module',
        'basename' => 'xmlsitemap_menu.module',
        'name' => 'xmlsitemap_menu',
        'info' => 
        array (
          'name' => 'XML sitemap menu',
          'description' => 'Adds menu item links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
            1 => 'menu',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_menu.module',
            1 => 'xmlsitemap_menu.install',
            2 => 'xmlsitemap_menu.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'php' => '5.2.4',
        ),
        'schema_version' => '6201',
        'version' => '7.x-2.2',
      ),
      'xmlsitemap_node' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap_node/xmlsitemap_node.module',
        'basename' => 'xmlsitemap_node.module',
        'name' => 'xmlsitemap_node',
        'info' => 
        array (
          'name' => 'XML sitemap node',
          'description' => 'Adds content links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_node.module',
            1 => 'xmlsitemap_node.install',
            2 => 'xmlsitemap_node.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'php' => '5.2.4',
        ),
        'schema_version' => '6201',
        'version' => '7.x-2.2',
      ),
      'xmlsitemap_user' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap_user/xmlsitemap_user.module',
        'basename' => 'xmlsitemap_user.module',
        'name' => 'xmlsitemap_user',
        'info' => 
        array (
          'name' => 'XML sitemap user',
          'description' => 'Adds user profile links to the sitemap.',
          'package' => 'XML sitemap',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'xmlsitemap_user.module',
            1 => 'xmlsitemap_user.install',
            2 => 'xmlsitemap_user.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.2',
      ),
      'xmlsitemap_custom' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap_custom/xmlsitemap_custom.module',
        'basename' => 'xmlsitemap_custom.module',
        'name' => 'xmlsitemap_custom',
        'info' => 
        array (
          'name' => 'XML sitemap custom',
          'description' => 'Adds user configurable links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_custom.module',
            1 => 'xmlsitemap_custom.admin.inc',
            2 => 'xmlsitemap_custom.install',
            3 => 'xmlsitemap_custom.test',
          ),
          'configure' => 'admin/config/search/xmlsitemap/custom',
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.2',
      ),
      'xmlsitemap_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap_taxonomy/xmlsitemap_taxonomy.module',
        'basename' => 'xmlsitemap_taxonomy.module',
        'name' => 'xmlsitemap_taxonomy',
        'info' => 
        array (
          'name' => 'XML sitemap taxonomy',
          'description' => 'Add taxonomy term links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
            1 => 'taxonomy',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_taxonomy.module',
            1 => 'xmlsitemap_taxonomy.install',
            2 => 'xmlsitemap_taxonomy.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.2',
      ),
      'xmlsitemap_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap_i18n/xmlsitemap_i18n.module',
        'basename' => 'xmlsitemap_i18n.module',
        'name' => 'xmlsitemap_i18n',
        'info' => 
        array (
          'name' => 'XML sitemap internationalization',
          'description' => 'Enables multilingual XML sitemaps.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
            1 => 'i18n',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_i18n.module',
            1 => 'xmlsitemap_i18n.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.2',
      ),
      'xmlsitemap' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xmlsitemap/xmlsitemap.module',
        'basename' => 'xmlsitemap.module',
        'name' => 'xmlsitemap',
        'info' => 
        array (
          'name' => 'XML sitemap',
          'description' => 'Creates an XML sitemap conforming to the <a href="http://sitemaps.org/">sitemaps.org protocol</a>.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'xmlsitemap.module',
            1 => 'xmlsitemap.inc',
            2 => 'xmlsitemap.admin.inc',
            3 => 'xmlsitemap.drush.inc',
            4 => 'xmlsitemap.generate.inc',
            5 => 'xmlsitemap.xmlsitemap.inc',
            6 => 'xmlsitemap.pages.inc',
            7 => 'xmlsitemap.install',
            8 => 'xmlsitemap.test',
          ),
          'recommends' => 
          array (
            0 => 'robotstxt',
          ),
          'configure' => 'admin/config/search/xmlsitemap',
          'version' => '7.x-2.2',
          'project' => 'xmlsitemap',
          'datestamp' => '1422607989',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'version' => '7.x-2.2',
      ),
      'i18n_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_taxonomy/i18n_taxonomy.module',
        'basename' => 'i18n_taxonomy.module',
        'name' => 'i18n_taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy translation',
          'description' => 'Enables multilingual taxonomy.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'i18n_string',
            2 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_taxonomy.inc',
            1 => 'i18n_taxonomy.pages.inc',
            2 => 'i18n_taxonomy.admin.inc',
            3 => 'i18n_taxonomy.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.x-1.13',
      ),
      'i18n_block' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_block/i18n_block.module',
        'basename' => 'i18n_block.module',
        'name' => 'i18n_block',
        'info' => 
        array (
          'name' => 'Block languages',
          'description' => 'Enables language selector for blocks and optional block translation.',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_block.inc',
            1 => 'i18n_block.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.13',
      ),
      'i18n_menu' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_menu/i18n_menu.module',
        'basename' => 'i18n_menu.module',
        'name' => 'i18n_menu',
        'info' => 
        array (
          'name' => 'Menu translation',
          'description' => 'Supports translatable custom menu items.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'menu',
            2 => 'i18n_string',
            3 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_menu.inc',
            1 => 'i18n_menu.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.13',
      ),
      'i18n_field' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_field/i18n_field.module',
        'basename' => 'i18n_field.module',
        'name' => 'i18n_field',
        'info' => 
        array (
          'name' => 'Field translation',
          'description' => 'Translate field properties',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_field.inc',
            1 => 'i18n_field.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.13',
      ),
      'i18n_user' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_user/i18n_user.module',
        'basename' => 'i18n_user.module',
        'name' => 'i18n_user',
        'info' => 
        array (
          'name' => 'User mail translation',
          'description' => 'Translate emails sent from the User module.',
          'core' => '7.x',
          'package' => 'Multilingual - Internationalization',
          'dependencies' => 
          array (
            0 => 'i18n_variable',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'i18n_redirect' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_redirect/i18n_redirect.module',
        'basename' => 'i18n_redirect.module',
        'name' => 'i18n_redirect',
        'info' => 
        array (
          'name' => 'Translation redirect',
          'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'i18n_sync' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_sync/i18n_sync.module',
        'basename' => 'i18n_sync.module',
        'name' => 'i18n_sync',
        'info' => 
        array (
          'name' => 'Synchronize translations',
          'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_sync.module',
            1 => 'i18n_sync.install',
            2 => 'i18n_sync.module.inc',
            3 => 'i18n_sync.node.inc',
            4 => 'i18n_sync.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.13',
      ),
      'i18n_path' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_path/i18n_path.module',
        'basename' => 'i18n_path.module',
        'name' => 'i18n_path',
        'info' => 
        array (
          'name' => 'Path translation',
          'description' => 'Define translations for generic paths',
          'dependencies' => 
          array (
            0 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_path.inc',
            1 => 'i18n_path.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.13',
      ),
      'i18n_string' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_string/i18n_string.module',
        'basename' => 'i18n_string.module',
        'name' => 'i18n_string',
        'info' => 
        array (
          'name' => 'String translation',
          'description' => 'Provides support for translation of user defined strings.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_string.admin.inc',
            1 => 'i18n_string.inc',
            2 => 'i18n_string.test',
          ),
          'configure' => 'admin/config/regional/i18n/strings',
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.13',
      ),
      'i18n_select' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_select/i18n_select.module',
        'basename' => 'i18n_select.module',
        'name' => 'i18n_select',
        'info' => 
        array (
          'name' => 'Multilingual select',
          'description' => 'API module for multilingual content selection',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/select',
          'files' => 
          array (
            0 => 'i18n_select.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'i18n_variable' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_variable/i18n_variable.module',
        'basename' => 'i18n_variable.module',
        'name' => 'i18n_variable',
        'info' => 
        array (
          'name' => 'Variable translation',
          'description' => 'Multilingual variables that switch language depending on page language.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'variable_store (7.x-2.x)',
            2 => 'variable_realm (7.x-2.x)',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/variable',
          'files' => 
          array (
            0 => 'i18n_variable.class.inc',
            1 => 'i18n_variable.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.x-1.13',
      ),
      'i18n_node' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_node/i18n_node.module',
        'basename' => 'i18n_node.module',
        'name' => 'i18n_node',
        'info' => 
        array (
          'name' => 'Multilingual content',
          'description' => 'Extended node options for multilingual content',
          'dependencies' => 
          array (
            0 => 'translation',
            1 => 'i18n',
            2 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/node',
          'files' => 
          array (
            0 => 'i18n_node.test',
            1 => 'i18n_node.variable.inc',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.13',
      ),
      'i18n_translation' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_translation/i18n_translation.module',
        'basename' => 'i18n_translation.module',
        'name' => 'i18n_translation',
        'info' => 
        array (
          'name' => 'Translation sets',
          'description' => 'Simple translation sets API for generic objects',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_translation.inc',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'i18n_contact' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_contact/i18n_contact.module',
        'basename' => 'i18n_contact.module',
        'name' => 'i18n_contact',
        'info' => 
        array (
          'name' => 'Contact translation',
          'description' => 'Makes contact categories and replies available for translation.',
          'dependencies' => 
          array (
            0 => 'contact',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'i18n_forum' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n_forum/i18n_forum.module',
        'basename' => 'i18n_forum.module',
        'name' => 'i18n_forum',
        'info' => 
        array (
          'name' => 'Multilingual forum',
          'description' => 'Enables multilingual forum, translates names and containers.',
          'dependencies' => 
          array (
            0 => 'forum',
            1 => 'i18n_taxonomy',
            2 => 'i18n_node',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_forum.test',
          ),
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.13',
      ),
      'i18n' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n/i18n.module',
        'basename' => 'i18n.module',
        'name' => 'i18n',
        'info' => 
        array (
          'name' => 'Internationalization',
          'description' => 'Extends Drupal support for multilingual features.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'variable',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_object.inc',
            1 => 'i18n.test',
          ),
          'configure' => 'admin/config/regional/i18n',
          'version' => '7.x-1.13',
          'project' => 'i18n',
          'datestamp' => '1430999922',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.13',
      ),
      'session_api' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/session_api/session_api.module',
        'basename' => 'session_api.module',
        'name' => 'session_api',
        'info' => 
        array (
          'name' => 'Session API',
          'description' => 'Provides an interface for storing session information.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'session_api.module',
            1 => 'session_api.admin.inc',
            2 => 'session_api.install',
            3 => 'session_api.test',
          ),
          'configure' => 'admin/config/development/session-api',
          'version' => '7.x-1.0-rc1',
          'project' => 'session_api',
          'datestamp' => '1354234727',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'version' => '7.x-1.0-rc1',
      ),
      'path2ban' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/path2ban/path2ban.module',
        'basename' => 'path2ban.module',
        'name' => 'path2ban',
        'info' => 
        array (
          'name' => 'path2ban',
          'description' => 'Ban IP of visitors, who try to scan restricted paths.',
          'core' => '7.x',
          'configure' => 'admin/config/people/path2ban',
          'version' => '7.x-1.0',
          'project' => 'path2ban',
          'datestamp' => '1431074284',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0',
      ),
      'google_analytics_reports_api' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/google_analytics_reports/google_analytics_reports_api/google_analytics_reports_api.module',
        'basename' => 'google_analytics_reports_api.module',
        'name' => 'google_analytics_reports_api',
        'info' => 
        array (
          'name' => 'Google Analytics Reports API',
          'package' => 'Statistics',
          'description' => 'API to access statistics from the <a href="https://developers.google.com/analytics/devguides/reporting/core/v3/">Google Analytics Core Reporting API</a>.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'google_analytics_reports_api.lib.inc',
          ),
          'configure' => 'admin/config/system/google-analytics-reports-api',
          'version' => '7.x-3.0-beta2',
          'project' => 'google_analytics_reports',
          'datestamp' => '1438364344',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-beta2',
      ),
      'google_analytics_reports' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/google_analytics_reports/google_analytics_reports.module',
        'basename' => 'google_analytics_reports.module',
        'name' => 'google_analytics_reports',
        'info' => 
        array (
          'name' => 'Google Analytics Reports',
          'package' => 'Statistics',
          'description' => 'Display statistics from Google Analytics using Views.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'google_analytics_reports_api',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'handlers/google_analytics_reports_handler_filter.inc',
            1 => 'handlers/google_analytics_reports_handler_filter_date.inc',
            2 => 'handlers/google_analytics_reports_handler_filter_string.inc',
            3 => 'handlers/google_analytics_reports_handler_filter_numeric.inc',
            4 => 'handlers/google_analytics_reports_handler_field.inc',
            5 => 'handlers/google_analytics_reports_handler_argument.inc',
            6 => 'plugins/google_analytics_reports_plugin_query_google_analytics.inc',
            7 => 'plugins/google_analytics_reports_plugin_argument_default_google_analytics_reports_path.inc',
          ),
          'version' => '7.x-3.0-beta2',
          'project' => 'google_analytics_reports',
          'datestamp' => '1438364344',
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'version' => '7.x-3.0-beta2',
      ),
      'pathauto' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.migrate.inc',
            1 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.3',
          'project' => 'pathauto',
          'datestamp' => '1444232655',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'version' => '7.x-1.3',
      ),
      'charts_google' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/charts/modules/charts_google/charts_google.module',
        'basename' => 'charts_google.module',
        'name' => 'charts_google',
        'info' => 
        array (
          'name' => 'Google Charts',
          'description' => 'Charts module integration with Google Charts.',
          'package' => 'Charts',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'charts',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'charts',
          'datestamp' => '1395123856',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-rc1',
      ),
      'charts_highcharts' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/charts/modules/charts_highcharts/charts_highcharts.module',
        'basename' => 'charts_highcharts.module',
        'name' => 'charts_highcharts',
        'info' => 
        array (
          'name' => 'Highcharts',
          'description' => 'Charts module integration with Highcharts library.',
          'package' => 'Charts',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
            1 => 'charts',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'charts',
          'datestamp' => '1395123856',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-rc1',
      ),
      'charts' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/charts/charts.module',
        'basename' => 'charts.module',
        'name' => 'charts',
        'info' => 
        array (
          'name' => 'Charts',
          'description' => 'A charting API for Drupal that provides chart elements and integration with Views.',
          'package' => 'Charts',
          'core' => '7.x',
          'php' => '5.2',
          'configure' => 'admin/config/content/charts',
          'files' => 
          array (
            0 => 'views/charts_plugin_style_chart.inc',
            1 => 'views/charts_plugin_display_chart.inc',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'charts',
          'datestamp' => '1395123856',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-rc1',
      ),
      'varnish' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/varnish/varnish.module',
        'basename' => 'varnish.module',
        'name' => 'varnish',
        'info' => 
        array (
          'name' => 'Varnish',
          'description' => 'Provides integration with the Varnish HTTP accelerator.',
          'core' => '7.x',
          'configure' => 'admin/config/development/varnish',
          'package' => 'Caching',
          'files' => 
          array (
            0 => 'varnish.cache.inc',
            1 => 'varnish.test',
          ),
          'version' => '7.x-1.0-beta3+6-dev',
          'project' => 'varnish',
          'datestamp' => '1427297283',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta3+6-dev',
      ),
      'ckeditor' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ckeditor/ckeditor.module',
        'basename' => 'ckeditor.module',
        'name' => 'ckeditor',
        'info' => 
        array (
          'name' => 'CKEditor',
          'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
          'core' => '7.x',
          'package' => 'User interface',
          'configure' => 'admin/config/content/ckeditor',
          'version' => '7.x-1.17',
          'project' => 'ckeditor',
          'datestamp' => '1450969741',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'version' => '7.x-1.17',
      ),
      'linked_field' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/linked_field/linked_field.module',
        'basename' => 'linked_field.module',
        'name' => 'linked_field',
        'info' => 
        array (
          'name' => 'Linked Field',
          'description' => 'Adds the functionality to link fields to a specific destination.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field_formatter_settings',
          ),
          'version' => '7.x-1.10',
          'project' => 'linked_field',
          'datestamp' => '1412008976',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'version' => '7.x-1.10',
      ),
      'l10n_client' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/l10n_client/l10n_client.module',
        'basename' => 'l10n_client.module',
        'name' => 'l10n_client',
        'info' => 
        array (
          'name' => 'Localization client',
          'description' => 'Provides on-page localization',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'core' => '7.x',
          'package' => 'Multilingual',
          'configure' => 'admin/config/regional/translate/client',
          'files' => 
          array (
            0 => 'l10n_client.test',
          ),
          'version' => '7.x-1.3+1-dev',
          'project' => 'l10n_client',
          'datestamp' => '1449095971',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.3+1-dev',
      ),
      'googleanalytics' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/google_analytics/googleanalytics.module',
        'basename' => 'googleanalytics.module',
        'name' => 'googleanalytics',
        'info' => 
        array (
          'name' => 'Google Analytics',
          'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/googleanalytics',
          'files' => 
          array (
            0 => 'googleanalytics.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'version' => '7.x-2.1',
          'project' => 'google_analytics',
          'datestamp' => '1417276982',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'version' => '7.x-2.1',
      ),
      'mediafield' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media/modules/mediafield/mediafield.module',
        'basename' => 'mediafield.module',
        'name' => 'mediafield',
        'info' => 
        array (
          'name' => 'Media Field',
          'description' => 'Provides a field type that stores media-specific data. <em>Deprecated by the core File field type.</em>',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'media',
          'datestamp' => '1436895542',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-beta1',
      ),
      'media_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media/modules/media_wysiwyg/media_wysiwyg.module',
        'basename' => 'media_wysiwyg.module',
        'name' => 'media_wysiwyg',
        'info' => 
        array (
          'name' => 'Media WYSIWYG',
          'description' => 'Adds support for embedding media using client-side WYSIWYG editors.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'test_dependencies' => 
          array (
            0 => 'ckeditor',
            1 => 'token',
            2 => 'wysiwyg',
          ),
          'files' => 
          array (
            0 => 'media_wysiwyg.test',
            1 => 'tests/media_wysiwyg.file_usage.test',
            2 => 'tests/media_wysiwyg.macro.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.0-beta1',
          'project' => 'media',
          'datestamp' => '1436895542',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'version' => '7.x-2.0-beta1',
      ),
      'media_bulk_upload' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media/modules/media_bulk_upload/media_bulk_upload.module',
        'basename' => 'media_bulk_upload.module',
        'name' => 'media_bulk_upload',
        'info' => 
        array (
          'name' => 'Media Bulk Upload',
          'description' => 'Adds support for uploading multiple files at a time.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'multiform',
            2 => 'plupload',
          ),
          'test_dependencies' => 
          array (
            0 => 'multiform',
            1 => 'plupload',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserBulkUpload.inc',
            1 => 'tests/media_bulk_upload.test',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'media',
          'datestamp' => '1436895542',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-beta1',
      ),
      'media_wysiwyg_view_mode' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media/modules/media_wysiwyg_view_mode/media_wysiwyg_view_mode.module',
        'basename' => 'media_wysiwyg_view_mode.module',
        'name' => 'media_wysiwyg_view_mode',
        'info' => 
        array (
          'name' => 'Media WYSIWYG View Mode',
          'description' => 'Enables files inside of the WYSIWYG editor to be displayed using a separate view mode.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media_wysiwyg',
          ),
          'configure' => 'admin/config/media/wysiwyg-view-mode',
          'files' => 
          array (
            0 => 'media_wysiwyg_view_mode.test',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'media',
          'datestamp' => '1436895542',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-beta1',
      ),
      'media_internet' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media/modules/media_internet/media_internet.module',
        'basename' => 'media_internet.module',
        'name' => 'media_internet',
        'info' => 
        array (
          'name' => 'Media Internet Sources',
          'description' => 'Provides an API for accessing media on various internet services',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserInternet.inc',
            1 => 'includes/MediaInternetBaseHandler.inc',
            2 => 'includes/MediaInternetFileHandler.inc',
            3 => 'includes/MediaInternetNoHandlerException.inc',
            4 => 'includes/MediaInternetValidationException.inc',
            5 => 'tests/media_internet.test',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'media',
          'datestamp' => '1436895542',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.0-beta1',
      ),
      'media' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media/media.module',
        'basename' => 'media.module',
        'name' => 'media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Provides the core Media API',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
            1 => 'image',
            2 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/MediaReadOnlyStreamWrapper.inc',
            1 => 'includes/MediaBrowserPluginInterface.inc',
            2 => 'includes/MediaBrowserPlugin.inc',
            3 => 'includes/MediaBrowserUpload.inc',
            4 => 'includes/MediaBrowserView.inc',
            5 => 'includes/MediaEntityTranslationHandler.inc',
            6 => 'includes/media_views_plugin_display_media_browser.inc',
            7 => 'includes/media_views_plugin_style_media_browser.inc',
            8 => 'tests/media.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.0-beta1',
          'project' => 'media',
          'datestamp' => '1436895542',
          'php' => '5.2.4',
        ),
        'schema_version' => '7226',
        'version' => '7.x-2.0-beta1',
      ),
      'advagg_font' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_font/advagg_font.module',
        'basename' => 'advagg_font.module',
        'name' => 'advagg_font',
        'info' => 
        array (
          'name' => 'AdvAgg Async Font Loader',
          'description' => 'Allows one to load fonts in an async manner',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'package' => 'Advanced CSS/JS Aggregation',
          'configure' => 'admin/config/development/performance/advagg/font',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.17',
      ),
      'advagg_js_cdn' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_js_cdn/advagg_js_cdn.module',
        'basename' => 'advagg_js_cdn.module',
        'name' => 'advagg_js_cdn',
        'info' => 
        array (
          'name' => 'AdvAgg CDN Javascript',
          'description' => 'Use a shared CDN for javascript libraries, Google Libraries API currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.17',
      ),
      'advagg_bundler' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_bundler/advagg_bundler.module',
        'basename' => 'advagg_bundler.module',
        'name' => 'advagg_bundler',
        'info' => 
        array (
          'name' => 'AdvAgg Bundler',
          'description' => 'Provides intelligent bundling of CSS and JS files by grouping files that belong together.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/bundler',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'version' => '7.x-2.17',
      ),
      'advagg_css_compress' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_css_compress/advagg_css_compress.module',
        'basename' => 'advagg_css_compress.module',
        'name' => 'advagg_css_compress',
        'info' => 
        array (
          'name' => 'AdvAgg Compress CSS',
          'description' => 'Compress CSS with a 3rd party compressor, YUI currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/css-compress',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'version' => '7.x-2.17',
      ),
      'advagg_js_compress' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_js_compress/advagg_js_compress.module',
        'basename' => 'advagg_js_compress.module',
        'name' => 'advagg_js_compress',
        'info' => 
        array (
          'name' => 'AdvAgg Compress Javascript',
          'description' => 'Compress Javascript with a 3rd party compressor; JSMin+, JSMin c ext, JShrink, and JSqueeze currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/js-compress',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'version' => '7.x-2.17',
      ),
      'advagg_sri' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_sri/advagg_sri.module',
        'basename' => 'advagg_sri.module',
        'name' => 'advagg_sri',
        'info' => 
        array (
          'name' => 'AdvAgg Subresource Integrity',
          'description' => 'Provide the integrity attribute for CSS and JS files.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'package' => 'Advanced CSS/JS Aggregation',
          'configure' => 'admin/config/development/performance/advagg/sri',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.17',
      ),
      'advagg_css_cdn' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_css_cdn/advagg_css_cdn.module',
        'basename' => 'advagg_css_cdn.module',
        'name' => 'advagg_css_cdn',
        'info' => 
        array (
          'name' => 'AdvAgg CDN CSS',
          'description' => 'Use a shared CDN for CSS libraries, Google Libraries API currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.17',
      ),
      'advagg_ext_compress' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_ext_compress/advagg_ext_compress.module',
        'basename' => 'advagg_ext_compress.module',
        'name' => 'advagg_ext_compress',
        'info' => 
        array (
          'name' => 'AdvAgg External Compression',
          'description' => 'Compress Javascript and/or CSS with a command line compressor.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/ext-compress',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.17',
      ),
      'advagg_validator' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_validator/advagg_validator.module',
        'basename' => 'advagg_validator.module',
        'name' => 'advagg_validator',
        'info' => 
        array (
          'name' => 'AdvAgg CSS/JS Validator',
          'description' => 'Validate the CSS and JS files used in Aggregation for syntax errors.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'configure' => 'admin/config/development/performance/advagg/validator',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'version' => '7.x-2.17',
      ),
      'advagg_mod' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg_mod/advagg_mod.module',
        'basename' => 'advagg_mod.module',
        'name' => 'advagg_mod',
        'info' => 
        array (
          'name' => 'AdvAgg Modifier',
          'description' => 'Allows one to alter the CSS and JS array.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'configure' => 'admin/config/development/performance/advagg/mod',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.17',
      ),
      'advagg' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/advagg/advagg.module',
        'basename' => 'advagg.module',
        'name' => 'advagg',
        'info' => 
        array (
          'name' => 'Advanced CSS/JS Aggregation',
          'description' => 'Aggregates multiple CSS/JS files in a way that prevents 404 from happening when accessing a CSS or JS file.',
          'package' => 'Advanced CSS/JS Aggregation',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/advagg.test',
          ),
          'configure' => 'admin/config/development/performance/advagg',
          'version' => '7.x-2.17',
          'project' => 'advagg',
          'datestamp' => '1449610143',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7211',
        'version' => '7.x-2.17',
      ),
      'token' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.6',
          'project' => 'token',
          'datestamp' => '1425149060',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.6',
      ),
      'file_entity' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/file_entity/file_entity.module',
        'basename' => 'file_entity.module',
        'name' => 'file_entity',
        'info' => 
        array (
          'name' => 'File Entity',
          'description' => 'Extends Drupal file entities to be fieldable and viewable.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'file',
            2 => 'ctools',
            3 => 'system (>=7.9)',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'views/views_handler_argument_file_type.inc',
            1 => 'views/views_handler_field_file_rendered.inc',
            2 => 'views/views_handler_field_file_type.inc',
            3 => 'views/views_handler_filter_file_type.inc',
            4 => 'views/views_handler_filter_schema_type.inc',
            5 => 'views/views_handler_field_file_filename.inc',
            6 => 'views/views_handler_field_file_link.inc',
            7 => 'views/views_handler_field_file_link_edit.inc',
            8 => 'views/views_handler_field_file_link_delete.inc',
            9 => 'views/views_handler_field_file_link_download.inc',
            10 => 'views/views_handler_field_file_link_usage.inc',
            11 => 'views/views_plugin_row_file_rss.inc',
            12 => 'views/views_plugin_row_file_view.inc',
            13 => 'file_entity.test',
          ),
          'configure' => 'admin/config/media/file-settings',
          'version' => '7.x-2.0-beta2',
          'project' => 'file_entity',
          'datestamp' => '1436896443',
          'php' => '5.2.4',
        ),
        'schema_version' => '7216',
        'version' => '7.x-2.0-beta2',
      ),
      'bean_entitycache' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/bean/bean_entitycache/bean_entitycache.module',
        'basename' => 'bean_entitycache.module',
        'name' => 'bean_entitycache',
        'info' => 
        array (
          'name' => 'Bean - Entitycache',
          'description' => 'Integrates the Bean module with the Entitycache module',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'files' => 
          array (
            0 => 'includes/bean_entitycache.core.inc',
          ),
          'dependencies' => 
          array (
            0 => 'bean',
            1 => 'entitycache',
          ),
          'version' => '7.x-1.9',
          'project' => 'bean',
          'datestamp' => '1425439382',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'bean_admin_ui' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/bean/bean_admin_ui/bean_admin_ui.module',
        'basename' => 'bean_admin_ui.module',
        'name' => 'bean_admin_ui',
        'info' => 
        array (
          'name' => 'Bean Admin UI',
          'description' => 'Add the ability to create Block Types in the UI',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'bean_admin_ui.module',
            1 => 'plugins/BeanCustom.class.php',
          ),
          'dependencies' => 
          array (
            0 => 'bean',
          ),
          'configure' => 'admin/structure/block-types',
          'package' => 'Bean',
          'version' => '7.x-1.9',
          'project' => 'bean',
          'datestamp' => '1425439382',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.x-1.9',
      ),
      'bean_usage' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/bean/bean_usage/bean_usage.module',
        'basename' => 'bean_usage.module',
        'name' => 'bean_usage',
        'info' => 
        array (
          'name' => 'Bean Usage',
          'description' => 'View Bean (Block Entities) Usage',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'bean',
            1 => 'blockreference',
          ),
          'package' => 'Bean',
          'version' => '7.x-1.9',
          'project' => 'bean',
          'datestamp' => '1425439382',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'bean_uuid' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/bean/bean_uuid/bean_uuid.module',
        'basename' => 'bean_uuid.module',
        'name' => 'bean_uuid',
        'info' => 
        array (
          'name' => 'Bean UUID',
          'description' => 'Allow deploying bean blocks through Deploy and UUID modules.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'bean',
            1 => 'uuid',
          ),
          'package' => 'Bean',
          'version' => '7.x-1.9',
          'project' => 'bean',
          'datestamp' => '1425439382',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'version' => '7.x-1.9',
      ),
      'bean' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/bean/bean.module',
        'basename' => 'bean.module',
        'name' => 'bean',
        'info' => 
        array (
          'name' => 'Bean',
          'description' => 'Create Bean (Block Entities)',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/bean.core.inc',
            1 => 'includes/bean.info.inc',
            2 => 'plugins/BeanPlugin.class.php',
            3 => 'plugins/BeanDefault.class.php',
            4 => 'includes/translation.handler.bean.inc',
            5 => 'includes/bean.inline_entity_form.inc',
            6 => 'views/views_handler_filter_bean_type.inc',
            7 => 'views/views_handler_field_bean_type.inc',
            8 => 'views/views_handler_field_bean_edit_link.inc',
            9 => 'views/views_handler_field_bean_delete_link.inc',
            10 => 'views/views_handler_field_bean_operations.inc',
            11 => 'bean.test',
          ),
          'dependencies' => 
          array (
            0 => 'entity (>=7.x-1.0)',
            1 => 'ctools',
          ),
          'package' => 'Bean',
          'version' => '7.x-1.9',
          'project' => 'bean',
          'datestamp' => '1425439382',
          'php' => '5.2.4',
        ),
        'schema_version' => '7013',
        'version' => '7.x-1.9',
      ),
      'semanticviews' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/semanticviews/semanticviews.module',
        'basename' => 'semanticviews.module',
        'name' => 'semanticviews',
        'info' => 
        array (
          'name' => 'Semantic Views',
          'description' => 'Views 3 plugins for UI management of output markup',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'files' => 
          array (
            0 => 'semanticviews_plugin_row_fields.inc',
            1 => 'semanticviews_plugin_style_default.inc',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'semanticviews',
          'datestamp' => '1414540129',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-rc2',
      ),
      'block_class' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/block_class/block_class.module',
        'basename' => 'block_class.module',
        'name' => 'block_class',
        'info' => 
        array (
          'name' => 'Block Class',
          'description' => 'Allows assigning CSS classes to blocks.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'files' => 
          array (
            0 => 'block_class.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'context',
            1 => 'features (2.x)',
            2 => 'features_extra',
          ),
          'version' => '7.x-2.3',
          'project' => 'block_class',
          'datestamp' => '1450415951',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'version' => '7.x-2.3',
      ),
      'entitycache' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entitycache/entitycache.module',
        'basename' => 'entitycache.module',
        'name' => 'entitycache',
        'info' => 
        array (
          'name' => 'Entity cache',
          'description' => 'Provides caching for core entities including nodes and taxonomy terms.',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'files' => 
          array (
            0 => 'includes/entitycache.entitycachecontrollerhelper.inc',
            1 => 'includes/entitycache.comment.inc',
            2 => 'includes/entitycache.defaultentitycontroller.inc',
            3 => 'includes/entitycache.node.inc',
            4 => 'includes/entitycache.taxonomy.inc',
            5 => 'includes/entitycache.user.inc',
            6 => 'entitycache.test',
          ),
          'dependencies' => 
          array (
            0 => 'system (>=7.36)',
          ),
          'version' => '7.x-1.5',
          'project' => 'entitycache',
          'datestamp' => '1445943840',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.x-1.5',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of Rules components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.handler.inc',
            6 => 'includes/rules_scheduler.views_default.inc',
            7 => 'includes/rules_scheduler.views.inc',
            8 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'version' => '7.x-2.9',
      ),
      'rules_admin' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.9',
      ),
      'rules_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/rules/rules_i18n/rules_i18n.module',
        'basename' => 'rules_i18n.module',
        'name' => 'rules_i18n',
        'info' => 
        array (
          'name' => 'Rules translation',
          'description' => 'Allows translating rules.',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_i18n.i18n.inc',
            1 => 'rules_i18n.rules.inc',
            2 => 'rules_i18n.test',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.9',
      ),
      'rules' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/faces.inc',
            3 => 'includes/rules.core.inc',
            4 => 'includes/rules.event.inc',
            5 => 'includes/rules.processor.inc',
            6 => 'includes/rules.plugins.inc',
            7 => 'includes/rules.state.inc',
            8 => 'includes/rules.dispatcher.inc',
            9 => 'modules/node.eval.inc',
            10 => 'modules/php.eval.inc',
            11 => 'modules/rules_core.eval.inc',
            12 => 'modules/system.eval.inc',
            13 => 'ui/ui.controller.inc',
            14 => 'ui/ui.core.inc',
            15 => 'ui/ui.data.inc',
            16 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => '7214',
        'version' => '7.x-2.9',
      ),
      'media_youtube' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media_youtube/media_youtube.module',
        'basename' => 'media_youtube.module',
        'name' => 'media_youtube',
        'info' => 
        array (
          'name' => 'Media: YouTube',
          'description' => 'Adds YouTube as a supported media provider.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'files' => 
          array (
            0 => 'includes/MediaYouTubeStreamWrapper.inc',
            1 => 'includes/MediaInternetYouTubeHandler.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'media_youtube',
          'datestamp' => '1432800182',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'version' => '7.x-3.0',
      ),
      'entity2text' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entity2text/entity2text.module',
        'basename' => 'entity2text.module',
        'name' => 'entity2text',
        'info' => 
        array (
          'name' => 'Entity to Text',
          'description' => 'Provides API and Tokens for Rendering Entities to plain text',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'entity_token',
          ),
          'package' => 'Other',
          'version' => '7.x-1.0-alpha3',
          'project' => 'entity2text',
          'datestamp' => '1441110800',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha3',
      ),
      'entity' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.6',
          'project' => 'entity',
          'datestamp' => '1424876582',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.x-1.6',
      ),
      'entity_token' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.6',
          'project' => 'entity',
          'datestamp' => '1424876582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.6',
      ),
      'ds_bootstrap_layouts' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds_bootstrap_layouts/ds_bootstrap_layouts.module',
        'basename' => 'ds_bootstrap_layouts.module',
        'name' => 'ds_bootstrap_layouts',
        'info' => 
        array (
          'name' => 'Display Suite Bootstrap Layouts',
          'description' => 'Implementation of fantastic Twitter Bootstrap scaffolding in Display Suite',
          'package' => 'Display Suite',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'version' => '7.x-3.1',
          'project' => 'ds_bootstrap_layouts',
          'datestamp' => '1429029841',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.1',
      ),
      'entityform_test' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entityform/entityform_test/entityform_test.module',
        'basename' => 'entityform_test.module',
        'name' => 'entityform_test',
        'info' => 
        array (
          'name' => 'entityform_test',
          'description' => 'Feature for Entityform simpletest',
          'core' => '7.x',
          'package' => 'Features',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'entityform',
            2 => 'features',
            3 => 'field_sql_storage',
            4 => 'text',
          ),
          'features' => 
          array (
            'entityform_type' => 
            array (
              0 => 'simpletest_entityform',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'entityform-simpletest_entityform-field_text',
            ),
          ),
          'version' => '7.x-2.0-rc2+2-dev',
          'project' => 'entityform',
          'datestamp' => '1436901542',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-rc2+2-dev',
      ),
      'entityform_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entityform/entityform_i18n/entityform_i18n.module',
        'basename' => 'entityform_i18n.module',
        'name' => 'entityform_i18n',
        'info' => 
        array (
          'name' => 'Entityform translation',
          'description' => 'Translate entityform types.',
          'dependencies' => 
          array (
            0 => 'entityform',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-2.0-rc2+2-dev',
          'project' => 'entityform',
          'datestamp' => '1436901542',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-rc2+2-dev',
      ),
      'entityform_notifications' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entityform/entityform_notifications/entityform_notifications.module',
        'basename' => 'entityform_notifications.module',
        'name' => 'entityform_notifications',
        'info' => 
        array (
          'name' => 'Entityforms Notifications',
          'description' => 'Enable this module if you want Entityforms to send e-mail notifications when a form is submitted.',
          'core' => '7.x',
          'package' => 'Entityforms',
          'dependencies' => 
          array (
            0 => 'entityform',
            1 => 'entity_rules',
            2 => 'entity2text',
            3 => 'rules',
          ),
          'version' => '7.x-2.0-rc2+2-dev',
          'project' => 'entityform',
          'datestamp' => '1436901542',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-2.0-rc2+2-dev',
      ),
      'entityform_anonymous' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entityform/entityform_anonymous/entityform_anonymous.module',
        'basename' => 'entityform_anonymous.module',
        'name' => 'entityform_anonymous',
        'info' => 
        array (
          'name' => 'Entityform Anonymous',
          'description' => 'Allows tracking of anonymous Entityform submissions',
          'core' => '7.x',
          'package' => 'Entityforms',
          'dependencies' => 
          array (
            0 => 'session_api',
            1 => 'entityform',
          ),
          'version' => '7.x-2.0-rc2+2-dev',
          'project' => 'entityform',
          'datestamp' => '1436901542',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-rc2+2-dev',
      ),
      'entityform' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entityform/entityform.module',
        'basename' => 'entityform.module',
        'name' => 'entityform',
        'info' => 
        array (
          'name' => 'Entityforms',
          'description' => 'Provides fieldable entity forms',
          'core' => '7.x',
          'package' => 'Entityforms',
          'configure' => 'admin/structure/entityform_types',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'entityform.admin.inc',
            1 => 'entityform.info.inc',
            2 => 'entityform_type.admin.inc',
            3 => 'entityform.pages.admin.inc',
            4 => 'views/entityform.views.inc',
            5 => 'views/entityform_handler_link_field.inc',
            6 => 'views/entityform_handler_delete_link_field.inc',
            7 => 'views/entityform_handler_edit_link_field.inc',
            8 => 'views/entityform_handler_entityform_operations_field.inc',
            9 => 'views/entityform.views_default.inc',
            10 => 'views/entityform_type_handler_submit_link_field.inc',
            11 => 'entityform.test',
          ),
          'version' => '7.x-2.0-rc2+2-dev',
          'project' => 'entityform',
          'datestamp' => '1436901542',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'version' => '7.x-2.0-rc2+2-dev',
      ),
      'ds_devel' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds/modules/ds_devel/ds_devel.module',
        'basename' => 'ds_devel.module',
        'name' => 'ds_devel',
        'info' => 
        array (
          'name' => 'Display Suite Devel',
          'description' => 'Development functionality for Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
            1 => 'devel',
          ),
          'version' => '7.x-2.12',
          'project' => 'ds',
          'datestamp' => '1452953681',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.12',
      ),
      'ds_search' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds/modules/ds_search/ds_search.module',
        'basename' => 'ds_search.module',
        'name' => 'ds_search',
        'info' => 
        array (
          'name' => 'Display Suite Search',
          'description' => 'Extend the display options for search results for Drupal Core or Apache Solr.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/search',
          'version' => '7.x-2.12',
          'project' => 'ds',
          'datestamp' => '1452953681',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.12',
      ),
      'ds_format' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds/modules/ds_format/ds_format.module',
        'basename' => 'ds_format.module',
        'name' => 'ds_format',
        'info' => 
        array (
          'name' => 'Display Suite Format',
          'description' => 'Provides the Display Suite Code format filter.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/extras',
          'version' => '7.x-2.12',
          'project' => 'ds',
          'datestamp' => '1452953681',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.12',
      ),
      'ds_extras' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds/modules/ds_extras/ds_extras.module',
        'basename' => 'ds_extras.module',
        'name' => 'ds_extras',
        'info' => 
        array (
          'name' => 'Display Suite Extras',
          'description' => 'Contains additional features for Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/extras',
          'version' => '7.x-2.12',
          'project' => 'ds',
          'datestamp' => '1452953681',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.12',
      ),
      'ds_forms' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds/modules/ds_forms/ds_forms.module',
        'basename' => 'ds_forms.module',
        'name' => 'ds_forms',
        'info' => 
        array (
          'name' => 'Display Suite Forms',
          'description' => 'Manage the layout of forms in Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'version' => '7.x-2.12',
          'project' => 'ds',
          'datestamp' => '1452953681',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.12',
      ),
      'ds_ui' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds/modules/ds_ui/ds_ui.module',
        'basename' => 'ds_ui.module',
        'name' => 'ds_ui',
        'info' => 
        array (
          'name' => 'Display Suite UI',
          'description' => 'User interface for managing fields, view modes and classes.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'version' => '7.x-2.12',
          'project' => 'ds',
          'datestamp' => '1452953681',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.12',
      ),
      'ds' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/ds/ds.module',
        'basename' => 'ds.module',
        'name' => 'ds',
        'info' => 
        array (
          'name' => 'Display Suite',
          'description' => 'Extend the display options for every entity type.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/views_plugin_ds_entity_view.inc',
            1 => 'views/views_plugin_ds_fields_view.inc',
            2 => 'tests/ds.base.test',
            3 => 'tests/ds.search.test',
            4 => 'tests/ds.entities.test',
            5 => 'tests/ds.exportables.test',
            6 => 'tests/ds.views.test',
            7 => 'tests/ds.forms.test',
          ),
          'configure' => 'admin/structure/ds',
          'version' => '7.x-2.12',
          'project' => 'ds',
          'datestamp' => '1452953681',
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'version' => '7.x-2.12',
      ),
      'xautoload' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/xautoload/xautoload.module',
        'basename' => 'xautoload.module',
        'name' => 'xautoload',
        'info' => 
        array (
          'name' => 'X Autoload',
          'description' => 'Autoload based on PSR-0, PSR-4 and a custom PHP 5.2 compatibility mode.',
          'core' => '7.x',
          'php' => '5.3',
          'version' => '7.x-5.5',
          'project' => 'xautoload',
          'datestamp' => '1442068740',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7000',
        'version' => '7.x-5.5',
      ),
      'memcache_storage' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/memcache_storage/memcache_storage.module',
        'basename' => 'memcache_storage.module',
        'name' => 'memcache_storage',
        'info' => 
        array (
          'name' => 'Memcache Storage',
          'description' => 'Provides integration with memcached backend for storing cached data.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'configure' => 'admin/config/development/memcache_storage',
          'files' => 
          array (
            0 => 'memcache_storage.api.inc',
          ),
          'version' => '7.x-1.4+16-dev',
          'project' => 'memcache_storage',
          'datestamp' => '1425995586',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7013',
        'version' => '7.x-1.4+16-dev',
      ),
      'libraries' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version-dependent and shared usage of external libraries.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'system (>=7.11)',
          ),
          'files' => 
          array (
            0 => 'tests/libraries.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'libraries',
          'datestamp' => '1391965716',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.2',
      ),
      'variable_admin' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/variable/variable_admin/variable_admin.module',
        'basename' => 'variable_admin.module',
        'name' => 'variable_admin',
        'info' => 
        array (
          'name' => 'Variable admin',
          'description' => 'Variable Administration UI',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'variable_example' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/variable/variable_example/variable_example.module',
        'basename' => 'variable_example.module',
        'name' => 'variable_example',
        'info' => 
        array (
          'name' => 'Variable example',
          'description' => 'An example module showing how to use the Variable API and providing some variables.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'variable_store',
          ),
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'variable_example.variable.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'variable_store' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/variable/variable_store/variable_store.module',
        'basename' => 'variable_store.module',
        'name' => 'variable_store',
        'info' => 
        array (
          'name' => 'Variable store',
          'description' => 'Database storage for variable realms. This is an API module.',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'files' => 
          array (
            0 => 'variable_store.class.inc',
            1 => 'variable_store.test',
          ),
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.5',
      ),
      'variable_realm' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/variable/variable_realm/variable_realm.module',
        'basename' => 'variable_realm.module',
        'name' => 'variable_realm',
        'info' => 
        array (
          'name' => 'Variable realm',
          'description' => 'API to use variable realms from different modules',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'files' => 
          array (
            0 => 'variable_realm.class.inc',
            1 => 'variable_realm_union.class.inc',
          ),
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.5',
      ),
      'variable_views' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/variable/variable_views/variable_views.module',
        'basename' => 'variable_views.module',
        'name' => 'variable_views',
        'info' => 
        array (
          'name' => 'Variable views',
          'description' => 'Provides views integration for variable, included a default variable argument.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'views',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views_plugin_argument_default_variable.inc',
            1 => 'includes/views_handler_field_variable_title.inc',
            2 => 'includes/views_handler_field_variable_value.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'variable' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/variable/variable.module',
        'basename' => 'variable.module',
        'name' => 'variable',
        'info' => 
        array (
          'name' => 'Variable',
          'description' => 'Variable Information and basic variable API',
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/forum.variable.inc',
            1 => 'includes/locale.variable.inc',
            2 => 'includes/menu.variable.inc',
            3 => 'includes/node.variable.inc',
            4 => 'includes/system.variable.inc',
            5 => 'includes/taxonomy.variable.inc',
            6 => 'includes/translation.variable.inc',
            7 => 'includes/user.variable.inc',
            8 => 'variable.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'field_formatter_settings' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/field_formatter_settings/field_formatter_settings.module',
        'basename' => 'field_formatter_settings.module',
        'name' => 'field_formatter_settings',
        'info' => 
        array (
          'name' => 'Field formatter settings API',
          'description' => 'Provides missing alter hooks for field formatter settings and summaries',
          'core' => '7.x',
          'enhances' => 
          array (
            0 => 'field_ui',
            1 => 'views_ui',
          ),
          'version' => '7.x-1.1',
          'project' => 'field_formatter_settings',
          'datestamp' => '1378741903',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.1',
      ),
      'panels_bootstrap_layouts' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/panels_bootstrap_layouts/panels_bootstrap_layouts.module',
        'basename' => 'panels_bootstrap_layouts.module',
        'name' => 'panels_bootstrap_layouts',
        'info' => 
        array (
          'name' => 'Panels Bootstrap Layouts',
          'description' => 'Panel\'s layouts using twitter bootstrap layout system as base.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'version' => '7.x-3.0',
          'project' => 'panels_bootstrap_layouts',
          'datestamp' => '1398607735',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0',
      ),
      'linkit' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/linkit/linkit.module',
        'basename' => 'linkit.module',
        'name' => 'linkit',
        'info' => 
        array (
          'name' => 'Linkit',
          'description' => 'Provides an easy interface for inserting links.',
          'core' => '7.x',
          'configure' => 'admin/config/content/linkit',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'entity',
          ),
          'files' => 
          array (
            0 => 'includes/profile.class.php',
            1 => 'includes/search_plugin.class.php',
            2 => 'plugins/linkit_search/entity.class.php',
            3 => 'plugins/linkit_search/file.class.php',
            4 => 'plugins/linkit_search/node.class.php',
            5 => 'plugins/linkit_search/taxonomy_term.class.php',
            6 => 'plugins/linkit_search/user.class.php',
            7 => 'test/linkit.test',
            8 => 'test/linkit_profile.test',
            9 => 'test/linkit_search_plugin.test',
            10 => 'test/linkit_search_plugin_node.test',
            11 => 'test/linkit_search_plugin_user.test',
            12 => 'test/linkit_search_plugin_taxonomy_term.test',
          ),
          'version' => '7.x-3.5',
          'project' => 'linkit',
          'datestamp' => '1452407341',
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'version' => '7.x-3.5',
      ),
      'views_export' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.13',
          'project' => 'views',
          'datestamp' => '1446804876',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.13',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_messages.inc',
            2 => 'handlers/views_handler_area_result.inc',
            3 => 'handlers/views_handler_area_text.inc',
            4 => 'handlers/views_handler_area_text_custom.inc',
            5 => 'handlers/views_handler_area_view.inc',
            6 => 'handlers/views_handler_argument.inc',
            7 => 'handlers/views_handler_argument_date.inc',
            8 => 'handlers/views_handler_argument_formula.inc',
            9 => 'handlers/views_handler_argument_many_to_one.inc',
            10 => 'handlers/views_handler_argument_null.inc',
            11 => 'handlers/views_handler_argument_numeric.inc',
            12 => 'handlers/views_handler_argument_string.inc',
            13 => 'handlers/views_handler_argument_group_by_numeric.inc',
            14 => 'handlers/views_handler_field.inc',
            15 => 'handlers/views_handler_field_counter.inc',
            16 => 'handlers/views_handler_field_boolean.inc',
            17 => 'handlers/views_handler_field_contextual_links.inc',
            18 => 'handlers/views_handler_field_custom.inc',
            19 => 'handlers/views_handler_field_date.inc',
            20 => 'handlers/views_handler_field_entity.inc',
            21 => 'handlers/views_handler_field_markup.inc',
            22 => 'handlers/views_handler_field_math.inc',
            23 => 'handlers/views_handler_field_numeric.inc',
            24 => 'handlers/views_handler_field_prerender_list.inc',
            25 => 'handlers/views_handler_field_time_interval.inc',
            26 => 'handlers/views_handler_field_serialized.inc',
            27 => 'handlers/views_handler_field_machine_name.inc',
            28 => 'handlers/views_handler_field_url.inc',
            29 => 'handlers/views_handler_filter.inc',
            30 => 'handlers/views_handler_filter_boolean_operator.inc',
            31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            32 => 'handlers/views_handler_filter_combine.inc',
            33 => 'handlers/views_handler_filter_date.inc',
            34 => 'handlers/views_handler_filter_equality.inc',
            35 => 'handlers/views_handler_filter_entity_bundle.inc',
            36 => 'handlers/views_handler_filter_group_by_numeric.inc',
            37 => 'handlers/views_handler_filter_in_operator.inc',
            38 => 'handlers/views_handler_filter_many_to_one.inc',
            39 => 'handlers/views_handler_filter_numeric.inc',
            40 => 'handlers/views_handler_filter_string.inc',
            41 => 'handlers/views_handler_filter_fields_compare.inc',
            42 => 'handlers/views_handler_relationship.inc',
            43 => 'handlers/views_handler_relationship_groupwise_max.inc',
            44 => 'handlers/views_handler_sort.inc',
            45 => 'handlers/views_handler_sort_date.inc',
            46 => 'handlers/views_handler_sort_formula.inc',
            47 => 'handlers/views_handler_sort_group_by_numeric.inc',
            48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            49 => 'handlers/views_handler_sort_random.inc',
            50 => 'includes/base.inc',
            51 => 'includes/handlers.inc',
            52 => 'includes/plugins.inc',
            53 => 'includes/view.inc',
            54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            63 => 'modules/book/views_plugin_argument_default_book_root.inc',
            64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            65 => 'modules/comment/views_handler_field_comment.inc',
            66 => 'modules/comment/views_handler_field_comment_depth.inc',
            67 => 'modules/comment/views_handler_field_comment_link.inc',
            68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            72 => 'modules/comment/views_handler_field_comment_node_link.inc',
            73 => 'modules/comment/views_handler_field_comment_username.inc',
            74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            76 => 'modules/comment/views_handler_field_node_comment.inc',
            77 => 'modules/comment/views_handler_field_node_new_comments.inc',
            78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            81 => 'modules/comment/views_handler_filter_node_comment.inc',
            82 => 'modules/comment/views_handler_sort_comment_thread.inc',
            83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            85 => 'modules/comment/views_plugin_row_comment_rss.inc',
            86 => 'modules/comment/views_plugin_row_comment_view.inc',
            87 => 'modules/contact/views_handler_field_contact_link.inc',
            88 => 'modules/field/views_handler_field_field.inc',
            89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            90 => 'modules/field/views_handler_argument_field_list.inc',
            91 => 'modules/field/views_handler_filter_field_list_boolean.inc',
            92 => 'modules/field/views_handler_argument_field_list_string.inc',
            93 => 'modules/field/views_handler_filter_field_list.inc',
            94 => 'modules/filter/views_handler_field_filter_format_name.inc',
            95 => 'modules/locale/views_handler_field_node_language.inc',
            96 => 'modules/locale/views_handler_filter_node_language.inc',
            97 => 'modules/locale/views_handler_argument_locale_group.inc',
            98 => 'modules/locale/views_handler_argument_locale_language.inc',
            99 => 'modules/locale/views_handler_field_locale_group.inc',
            100 => 'modules/locale/views_handler_field_locale_language.inc',
            101 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            102 => 'modules/locale/views_handler_filter_locale_group.inc',
            103 => 'modules/locale/views_handler_filter_locale_language.inc',
            104 => 'modules/locale/views_handler_filter_locale_version.inc',
            105 => 'modules/node/views_handler_argument_dates_various.inc',
            106 => 'modules/node/views_handler_argument_node_language.inc',
            107 => 'modules/node/views_handler_argument_node_nid.inc',
            108 => 'modules/node/views_handler_argument_node_type.inc',
            109 => 'modules/node/views_handler_argument_node_vid.inc',
            110 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            111 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            112 => 'modules/node/views_handler_field_node.inc',
            113 => 'modules/node/views_handler_field_node_link.inc',
            114 => 'modules/node/views_handler_field_node_link_delete.inc',
            115 => 'modules/node/views_handler_field_node_link_edit.inc',
            116 => 'modules/node/views_handler_field_node_revision.inc',
            117 => 'modules/node/views_handler_field_node_revision_link.inc',
            118 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            119 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            120 => 'modules/node/views_handler_field_node_path.inc',
            121 => 'modules/node/views_handler_field_node_type.inc',
            122 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            123 => 'modules/node/views_handler_filter_node_access.inc',
            124 => 'modules/node/views_handler_filter_node_status.inc',
            125 => 'modules/node/views_handler_filter_node_type.inc',
            126 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            127 => 'modules/node/views_plugin_argument_default_node.inc',
            128 => 'modules/node/views_plugin_argument_validate_node.inc',
            129 => 'modules/node/views_plugin_row_node_rss.inc',
            130 => 'modules/node/views_plugin_row_node_view.inc',
            131 => 'modules/profile/views_handler_field_profile_date.inc',
            132 => 'modules/profile/views_handler_field_profile_list.inc',
            133 => 'modules/profile/views_handler_filter_profile_selection.inc',
            134 => 'modules/search/views_handler_argument_search.inc',
            135 => 'modules/search/views_handler_field_search_score.inc',
            136 => 'modules/search/views_handler_filter_search.inc',
            137 => 'modules/search/views_handler_sort_search_score.inc',
            138 => 'modules/search/views_plugin_row_search_view.inc',
            139 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            140 => 'modules/system/views_handler_argument_file_fid.inc',
            141 => 'modules/system/views_handler_field_file.inc',
            142 => 'modules/system/views_handler_field_file_extension.inc',
            143 => 'modules/system/views_handler_field_file_filemime.inc',
            144 => 'modules/system/views_handler_field_file_uri.inc',
            145 => 'modules/system/views_handler_field_file_status.inc',
            146 => 'modules/system/views_handler_filter_file_status.inc',
            147 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            148 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            150 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            151 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            152 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            153 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            154 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            155 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            156 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            157 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            158 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            159 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            160 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            161 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            162 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            163 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
            164 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
            165 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
            166 => 'modules/system/views_handler_filter_system_type.inc',
            167 => 'modules/translation/views_handler_argument_node_tnid.inc',
            168 => 'modules/translation/views_handler_field_node_link_translate.inc',
            169 => 'modules/translation/views_handler_field_node_translation_link.inc',
            170 => 'modules/translation/views_handler_filter_node_tnid.inc',
            171 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            172 => 'modules/translation/views_handler_relationship_translation.inc',
            173 => 'modules/user/views_handler_argument_user_uid.inc',
            174 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            175 => 'modules/user/views_handler_field_user.inc',
            176 => 'modules/user/views_handler_field_user_language.inc',
            177 => 'modules/user/views_handler_field_user_link.inc',
            178 => 'modules/user/views_handler_field_user_link_cancel.inc',
            179 => 'modules/user/views_handler_field_user_link_edit.inc',
            180 => 'modules/user/views_handler_field_user_mail.inc',
            181 => 'modules/user/views_handler_field_user_name.inc',
            182 => 'modules/user/views_handler_field_user_permissions.inc',
            183 => 'modules/user/views_handler_field_user_picture.inc',
            184 => 'modules/user/views_handler_field_user_roles.inc',
            185 => 'modules/user/views_handler_filter_user_current.inc',
            186 => 'modules/user/views_handler_filter_user_name.inc',
            187 => 'modules/user/views_handler_filter_user_permissions.inc',
            188 => 'modules/user/views_handler_filter_user_roles.inc',
            189 => 'modules/user/views_plugin_argument_default_current_user.inc',
            190 => 'modules/user/views_plugin_argument_default_user.inc',
            191 => 'modules/user/views_plugin_argument_validate_user.inc',
            192 => 'modules/user/views_plugin_row_user_view.inc',
            193 => 'plugins/views_plugin_access.inc',
            194 => 'plugins/views_plugin_access_none.inc',
            195 => 'plugins/views_plugin_access_perm.inc',
            196 => 'plugins/views_plugin_access_role.inc',
            197 => 'plugins/views_plugin_argument_default.inc',
            198 => 'plugins/views_plugin_argument_default_php.inc',
            199 => 'plugins/views_plugin_argument_default_fixed.inc',
            200 => 'plugins/views_plugin_argument_default_raw.inc',
            201 => 'plugins/views_plugin_argument_validate.inc',
            202 => 'plugins/views_plugin_argument_validate_numeric.inc',
            203 => 'plugins/views_plugin_argument_validate_php.inc',
            204 => 'plugins/views_plugin_cache.inc',
            205 => 'plugins/views_plugin_cache_none.inc',
            206 => 'plugins/views_plugin_cache_time.inc',
            207 => 'plugins/views_plugin_display.inc',
            208 => 'plugins/views_plugin_display_attachment.inc',
            209 => 'plugins/views_plugin_display_block.inc',
            210 => 'plugins/views_plugin_display_default.inc',
            211 => 'plugins/views_plugin_display_embed.inc',
            212 => 'plugins/views_plugin_display_extender.inc',
            213 => 'plugins/views_plugin_display_feed.inc',
            214 => 'plugins/views_plugin_display_page.inc',
            215 => 'plugins/views_plugin_exposed_form_basic.inc',
            216 => 'plugins/views_plugin_exposed_form.inc',
            217 => 'plugins/views_plugin_exposed_form_input_required.inc',
            218 => 'plugins/views_plugin_localization_core.inc',
            219 => 'plugins/views_plugin_localization.inc',
            220 => 'plugins/views_plugin_localization_none.inc',
            221 => 'plugins/views_plugin_pager.inc',
            222 => 'plugins/views_plugin_pager_full.inc',
            223 => 'plugins/views_plugin_pager_mini.inc',
            224 => 'plugins/views_plugin_pager_none.inc',
            225 => 'plugins/views_plugin_pager_some.inc',
            226 => 'plugins/views_plugin_query.inc',
            227 => 'plugins/views_plugin_query_default.inc',
            228 => 'plugins/views_plugin_row.inc',
            229 => 'plugins/views_plugin_row_fields.inc',
            230 => 'plugins/views_plugin_row_rss_fields.inc',
            231 => 'plugins/views_plugin_style.inc',
            232 => 'plugins/views_plugin_style_default.inc',
            233 => 'plugins/views_plugin_style_grid.inc',
            234 => 'plugins/views_plugin_style_list.inc',
            235 => 'plugins/views_plugin_style_jump_menu.inc',
            236 => 'plugins/views_plugin_style_mapping.inc',
            237 => 'plugins/views_plugin_style_rss.inc',
            238 => 'plugins/views_plugin_style_summary.inc',
            239 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            240 => 'plugins/views_plugin_style_summary_unformatted.inc',
            241 => 'plugins/views_plugin_style_table.inc',
            242 => 'tests/handlers/views_handlers.test',
            243 => 'tests/handlers/views_handler_area_text.test',
            244 => 'tests/handlers/views_handler_argument_null.test',
            245 => 'tests/handlers/views_handler_argument_string.test',
            246 => 'tests/handlers/views_handler_field.test',
            247 => 'tests/handlers/views_handler_field_boolean.test',
            248 => 'tests/handlers/views_handler_field_custom.test',
            249 => 'tests/handlers/views_handler_field_counter.test',
            250 => 'tests/handlers/views_handler_field_date.test',
            251 => 'tests/handlers/views_handler_field_file_extension.test',
            252 => 'tests/handlers/views_handler_field_file_size.test',
            253 => 'tests/handlers/views_handler_field_math.test',
            254 => 'tests/handlers/views_handler_field_url.test',
            255 => 'tests/handlers/views_handler_field_xss.test',
            256 => 'tests/handlers/views_handler_filter_combine.test',
            257 => 'tests/handlers/views_handler_filter_date.test',
            258 => 'tests/handlers/views_handler_filter_equality.test',
            259 => 'tests/handlers/views_handler_filter_in_operator.test',
            260 => 'tests/handlers/views_handler_filter_numeric.test',
            261 => 'tests/handlers/views_handler_filter_string.test',
            262 => 'tests/handlers/views_handler_sort_random.test',
            263 => 'tests/handlers/views_handler_sort_date.test',
            264 => 'tests/handlers/views_handler_sort.test',
            265 => 'tests/test_handlers/views_test_area_access.inc',
            266 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            267 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            268 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
            269 => 'tests/plugins/views_plugin_display.test',
            270 => 'tests/styles/views_plugin_style_jump_menu.test',
            271 => 'tests/styles/views_plugin_style.test',
            272 => 'tests/styles/views_plugin_style_base.test',
            273 => 'tests/styles/views_plugin_style_mapping.test',
            274 => 'tests/styles/views_plugin_style_unformatted.test',
            275 => 'tests/views_access.test',
            276 => 'tests/views_analyze.test',
            277 => 'tests/views_basic.test',
            278 => 'tests/views_argument_default.test',
            279 => 'tests/views_argument_validator.test',
            280 => 'tests/views_exposed_form.test',
            281 => 'tests/field/views_fieldapi.test',
            282 => 'tests/views_glossary.test',
            283 => 'tests/views_groupby.test',
            284 => 'tests/views_handlers.test',
            285 => 'tests/views_module.test',
            286 => 'tests/views_pager.test',
            287 => 'tests/views_plugin_localization_test.inc',
            288 => 'tests/views_translatable.test',
            289 => 'tests/views_query.test',
            290 => 'tests/views_upgrade.test',
            291 => 'tests/views_test.views_default.inc',
            292 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            293 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            294 => 'tests/node/views_node_revision_relations.test',
            295 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            296 => 'tests/user/views_handler_field_user_name.test',
            297 => 'tests/user/views_user_argument_default.test',
            298 => 'tests/user/views_user_argument_validate.test',
            299 => 'tests/user/views_user.test',
            300 => 'tests/views_cache.test',
            301 => 'tests/views_view.test',
            302 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.13',
          'project' => 'views',
          'datestamp' => '1446804876',
        ),
        'schema_version' => '7302',
        'version' => '7.x-3.13',
      ),
      'context_layouts' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/context/context_layouts/context_layouts.module',
        'basename' => 'context_layouts.module',
        'name' => 'context_layouts',
        'info' => 
        array (
          'name' => 'Context layouts',
          'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/context_layouts_reaction_block.inc',
          ),
          'version' => '7.x-3.6',
          'project' => 'context',
          'datestamp' => '1420573188',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.6',
      ),
      'context_ui' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/context/context_ui/context_ui.module',
        'basename' => 'context_ui.module',
        'name' => 'context_ui',
        'info' => 
        array (
          'name' => 'Context UI',
          'description' => 'Provides a simple UI for settings up a site structure using Context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'configure' => 'admin/structure/context',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context_ui.test',
          ),
          'version' => '7.x-3.6',
          'project' => 'context',
          'datestamp' => '1420573188',
          'php' => '5.2.4',
        ),
        'schema_version' => '6004',
        'version' => '7.x-3.6',
      ),
      'context' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/context/context.module',
        'basename' => 'context.module',
        'name' => 'context',
        'info' => 
        array (
          'name' => 'Context',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'description' => 'Provide modules with a cache that lasts for a single page request.',
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/context.test',
            1 => 'tests/context.conditions.test',
            2 => 'tests/context.reactions.test',
          ),
          'version' => '7.x-3.6',
          'project' => 'context',
          'datestamp' => '1420573188',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-3.6',
      ),
      'entity_translation_upgrade' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entity_translation/entity_translation_upgrade/entity_translation_upgrade.module',
        'basename' => 'entity_translation_upgrade.module',
        'name' => 'entity_translation_upgrade',
        'info' => 
        array (
          'name' => 'Entity Translation Upgrade',
          'description' => 'Provides an upgrade path from node-based translation to field-based translation.',
          'package' => 'Multilingual - Entity Translation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_translation',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'entity_translation',
          'datestamp' => '1421971088',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.0-beta4',
      ),
      'entity_translation_i18n_menu' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entity_translation/entity_translation_i18n_menu/entity_translation_i18n_menu.module',
        'basename' => 'entity_translation_i18n_menu.module',
        'name' => 'entity_translation_i18n_menu',
        'info' => 
        array (
          'name' => 'Entity Translation Menu',
          'description' => 'Allows menu items to be translated on the entity form.',
          'package' => 'Multilingual - Entity Translation',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_translation',
            1 => 'i18n',
            2 => 'i18n_menu',
          ),
          'files' => 
          array (
            0 => 'entity_translation_i18n_menu.test',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'entity_translation',
          'datestamp' => '1421971088',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta4',
      ),
      'entity_translation' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entity_translation/entity_translation.module',
        'basename' => 'entity_translation.module',
        'name' => 'entity_translation',
        'info' => 
        array (
          'name' => 'Entity Translation',
          'description' => 'Allows entities to be translated into different languages.',
          'package' => 'Multilingual - Entity Translation',
          'core' => '7.x',
          'configure' => 'admin/config/regional/entity_translation',
          'dependencies' => 
          array (
            0 => 'locale (>7.14)',
          ),
          'files' => 
          array (
            0 => 'includes/translation.handler_factory.inc',
            1 => 'includes/translation.handler.inc',
            2 => 'includes/translation.handler.comment.inc',
            3 => 'includes/translation.handler.node.inc',
            4 => 'includes/translation.handler.taxonomy_term.inc',
            5 => 'includes/translation.handler.user.inc',
            6 => 'tests/entity_translation.test',
            7 => 'views/entity_translation_handler_relationship.inc',
            8 => 'views/entity_translation_handler_field_translate_link.inc',
            9 => 'views/entity_translation_handler_field_label.inc',
            10 => 'views/entity_translation_handler_filter_entity_type.inc',
            11 => 'views/entity_translation_handler_filter_language.inc',
            12 => 'views/entity_translation_handler_filter_translation_exists.inc',
            13 => 'views/entity_translation_handler_field_field.inc',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'entity_translation',
          'datestamp' => '1421971088',
          'php' => '5.2.4',
        ),
        'schema_version' => '7007',
        'version' => '7.x-1.0-beta4',
      ),
      'icon_block' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/icon/modules/icon_block/icon_block.module',
        'basename' => 'icon_block.module',
        'name' => 'icon_block',
        'info' => 
        array (
          'name' => 'Icon API: Block',
          'description' => 'Provides icon integration with blocks.',
          'core' => '7.x',
          'package' => 'Icon API',
          'files' => 
          array (
            0 => 'icon_block.install',
            1 => 'icon_block.module',
          ),
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'icon',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'icon',
          'datestamp' => '1438832040',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta6',
      ),
      'icon_menu' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/icon/modules/icon_menu/icon_menu.module',
        'basename' => 'icon_menu.module',
        'name' => 'icon_menu',
        'info' => 
        array (
          'name' => 'Icon API: Menu',
          'description' => 'Provides icon integration with menu items.',
          'core' => '7.x',
          'package' => 'Icon API',
          'files' => 
          array (
            0 => 'icon_menu.install',
            1 => 'icon_menu.module',
          ),
          'dependencies' => 
          array (
            0 => 'icon',
            1 => 'menu',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'icon',
          'datestamp' => '1438832040',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta6',
      ),
      'icon_field' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/icon/modules/icon_field/icon_field.module',
        'basename' => 'icon_field.module',
        'name' => 'icon_field',
        'info' => 
        array (
          'name' => 'Icon API: Field',
          'description' => 'Provides a field for attaching an icon to a fieldable entity.',
          'core' => '7.x',
          'package' => 'Icon API',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'icon',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'icon',
          'datestamp' => '1438832040',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta6',
      ),
      'icon_filter' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/icon/modules/icon_filter/icon_filter.module',
        'basename' => 'icon_filter.module',
        'name' => 'icon_filter',
        'info' => 
        array (
          'name' => 'Icon API: Filter',
          'description' => 'Provides a filter for text fields to replace an icon token with icon markup.',
          'core' => '7.x',
          'package' => 'Icon API',
          'dependencies' => 
          array (
            0 => 'filter',
            1 => 'icon',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'icon',
          'datestamp' => '1438832040',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta6',
      ),
      'icon' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/icon/icon.module',
        'basename' => 'icon.module',
        'name' => 'icon',
        'info' => 
        array (
          'name' => 'Icon API',
          'description' => 'Implements an API for icon providers and an administrative UI for integrating icons through out the site.',
          'core' => '7.x',
          'package' => 'Icon API',
          'configure' => 'admin/config/media/icon',
          'files' => 
          array (
            0 => 'icon.install',
            1 => 'icon.module',
          ),
          'version' => '7.x-1.0-beta6',
          'project' => 'icon',
          'datestamp' => '1438832040',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-beta6',
      ),
      'media_youtube_upload' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/media_youtube_upload/media_youtube_upload.module',
        'basename' => 'media_youtube_upload.module',
        'name' => 'media_youtube_upload',
        'info' => 
        array (
          'name' => 'Media: YouTube upload',
          'description' => 'Provides field support for uploading files directly to YouTube',
          'core' => '7.x',
          'package' => 'Media',
          'dependencies' => 
          array (
            0 => 'media (>=7.x-2.x)',
            1 => 'media_youtube',
            2 => 'image',
            3 => 'libraries',
            4 => 'list',
            5 => 'options',
            6 => 'taxonomy',
            7 => 'text',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserYoutubeUpload.inc',
          ),
          'configure' => 'admin/config/media/media_youtube_upload',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'expire' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/expire/expire.module',
        'basename' => 'expire.module',
        'name' => 'expire',
        'info' => 
        array (
          'name' => 'Cache Expiration',
          'description' => 'Logic for expiring cached pages.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'configure' => 'admin/config/system/expire',
          'files' => 
          array (
            0 => 'includes/expire.api.inc',
            1 => 'includes/expire.comment.inc',
            2 => 'includes/expire.domain.inc',
            3 => 'includes/expire.interface.inc',
            4 => 'includes/expire.menu_link.inc',
            5 => 'includes/expire.node.inc',
            6 => 'includes/expire.user.inc',
            7 => 'includes/expire.votingapi.inc',
            8 => 'includes/expire.file.inc',
          ),
          'version' => '7.x-2.0-rc4',
          'project' => 'expire',
          'datestamp' => '1414746830',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'version' => '7.x-2.0-rc4',
      ),
      'panelizer' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/panelizer/panelizer.module',
        'basename' => 'panelizer.module',
        'name' => 'panelizer',
        'info' => 
        array (
          'name' => 'Panelizer',
          'description' => 'Allow any node type to have custom panel displays, similar to the panel node type.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
            1 => 'ctools',
            2 => 'page_manager',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/content/panelizer',
          'files' => 
          array (
            0 => 'plugins/views/panelizer_handler_field_link.inc',
            1 => 'plugins/views/panelizer_handler_panelizer_status.inc',
            2 => 'plugins/views/panelizer_handler_filter_panelizer_status.inc',
            3 => 'plugins/views/panelizer_plugin_row_panelizer_node_view.inc',
          ),
          'version' => '7.x-3.1',
          'project' => 'panelizer',
          'datestamp' => '1360785942',
          'php' => '5.2.4',
        ),
        'schema_version' => '7110',
        'version' => '7.x-3.1',
      ),
      'views_bulk_operations' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/views_bulk_operations/views_bulk_operations.module',
        'basename' => 'views_bulk_operations.module',
        'name' => 'views_bulk_operations',
        'info' => 
        array (
          'name' => 'Views Bulk Operations',
          'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2.9',
          'files' => 
          array (
            0 => 'plugins/operation_types/base.class.php',
            1 => 'views/views_bulk_operations_handler_field_operations.inc',
          ),
          'version' => '7.x-3.3',
          'project' => 'views_bulk_operations',
          'datestamp' => '1435764542',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.3',
      ),
      'actions_permissions' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/views_bulk_operations/actions_permissions.module',
        'basename' => 'actions_permissions.module',
        'name' => 'actions_permissions',
        'info' => 
        array (
          'name' => 'Actions permissions (VBO)',
          'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
          'package' => 'Administration',
          'core' => '7.x',
          'version' => '7.x-3.3',
          'project' => 'views_bulk_operations',
          'datestamp' => '1435764542',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.3',
      ),
      'elysia_cron' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/elysia_cron/elysia_cron.module',
        'basename' => 'elysia_cron.module',
        'name' => 'elysia_cron',
        'info' => 
        array (
          'name' => 'Elysia Cron',
          'description' => 'Extended cron support with crontab-like scheduling and other features.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'elysia_cron_update.php',
            1 => 'elysia_drupalconv.php',
          ),
          'configure' => 'admin/config/system/cron',
          'version' => '7.x-2.1',
          'project' => 'elysia_cron',
          'datestamp' => '1331658045',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '1',
        'version' => '7.x-2.1',
      ),
      'entity_rules' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/entity_rules/entity_rules.module',
        'basename' => 'entity_rules.module',
        'name' => 'entity_rules',
        'info' => 
        array (
          'name' => 'Entity Rules',
          'description' => 'Provides UI for select Rules to execute during Entity Events',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'rules',
          ),
          'version' => '7.x-1.0-alpha4',
          'project' => 'entity_rules',
          'datestamp' => '1386645215',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'version' => '7.x-1.0-alpha4',
      ),
      'title' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/title/title.module',
        'basename' => 'title.module',
        'name' => 'title',
        'info' => 
        array (
          'name' => 'Title',
          'description' => 'Replaces entity legacy fields with regular fields.',
          'core' => '7.x',
          'package' => 'Fields',
          'configure' => 'admin/config/content/title',
          'dependencies' => 
          array (
            0 => 'system (>7.14)',
          ),
          'files' => 
          array (
            0 => 'title.module',
            1 => 'views/views_handler_title_field.inc',
            2 => 'tests/title.test',
          ),
          'version' => '7.x-1.0-alpha7',
          'project' => 'title',
          'datestamp' => '1363626024',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.0-alpha7',
      ),
      'languageicons' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/languageicons/languageicons.module',
        'basename' => 'languageicons.module',
        'name' => 'languageicons',
        'info' => 
        array (
          'name' => 'Language Icons',
          'description' => 'Adds icons to language links.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Multilingual',
          'core' => '7.x',
          'configure' => 'admin/config/regional/language/icons',
          'version' => '7.x-1.1',
          'project' => 'languageicons',
          'datestamp' => '1399825730',
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'version' => '7.x-1.1',
      ),
      'i18n_access' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/i18n_access/i18n_access.module',
        'basename' => 'i18n_access.module',
        'name' => 'i18n_access',
        'info' => 
        array (
          'name' => 'Translation Access',
          'description' => 'Control access to creating content in different languages.',
          'package' => 'Multilanguage',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'translation',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'i18n_access',
          'datestamp' => '1380582441',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.x-dev',
      ),
      'email' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/email/email.module',
        'basename' => 'email.module',
        'name' => 'email',
        'info' => 
        array (
          'name' => 'Email',
          'description' => 'Defines an email field type.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'email.migrate.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'email',
          'datestamp' => '1397134155',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.3',
      ),
      'fitvids' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/contrib/fitvids/fitvids.module',
        'basename' => 'fitvids.module',
        'name' => 'fitvids',
        'info' => 
        array (
          'name' => 'FitVids',
          'description' => 'jQuery plugin for fluid width video embeds.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'configure' => 'admin/config/media/fitvids',
          'scripts' => 
          array (
            0 => 'fitvids.js',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'fitvids.css',
            ),
          ),
          'version' => '7.x-1.17',
          'project' => 'fitvids',
          'datestamp' => '1417817582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.17',
      ),
      'custom' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/custom/custom/custom.module',
        'basename' => 'custom.module',
        'name' => 'custom',
        'info' => 
        array (
          'name' => 'Custom',
          'description' => 'TODO: Description of module',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/custom.test',
          ),
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'module_builder' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/devel/module_builder/module_builder.module',
        'basename' => 'module_builder.module',
        'name' => 'module_builder',
        'info' => 
        array (
          'name' => 'Module Builder',
          'description' => 'Builds scaffolding for custom modules.',
          'package' => 'Development',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'module_builder.module',
            1 => 'includes/module_builder.admin.inc',
            2 => 'tests/module_builder.test',
          ),
          'version' => '7.x-2.x-dev',
          'project' => 'module_builder',
          'datestamp' => '1450642448',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.x-dev',
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/devel/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'files' => 
          array (
            0 => 'devel_generate.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'devel' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/devel/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'version' => '7.x-1.5',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/devel/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'admin_devel' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/admin/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-rc5',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/admin/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'version' => '7.x-3.0-rc5',
      ),
      'admin_menu' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/admin/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'version' => '7.x-3.0-rc5',
      ),
      'masquerade' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/admin/masquerade/masquerade.module',
        'basename' => 'masquerade.module',
        'name' => 'masquerade',
        'info' => 
        array (
          'name' => 'Masquerade',
          'description' => 'This module allows permitted users to masquerade as other users.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'masquerade.test',
          ),
          'configure' => 'admin/config/people/masquerade',
          'version' => '7.x-1.0-rc7',
          'project' => 'masquerade',
          'datestamp' => '1394333639',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.0-rc7',
      ),
      'admin_menu_environmental' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/admin/admin_menu_environmental/admin_menu_environmental.module',
        'basename' => 'admin_menu_environmental.module',
        'name' => 'admin_menu_environmental',
        'info' => 
        array (
          'name' => 'Administration menu environmental',
          'description' => 'Change the admin menu\'s color according to environment and integration with masquerade.',
          'dependencies' => 
          array (
            0 => 'admin_menu',
            1 => 'masquerade',
          ),
          'package' => 'Administration',
          'configure' => 'admin/config/administration/admin_menu/environmental',
          'core' => '7.x',
          'version' => '7.x-1.x-dev',
          'project' => 'admin_menu_environmental',
          'datestamp' => '1430301482',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.x-dev',
      ),
      'module_filter' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/modules/admin/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'package' => 'Administration',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.js',
            2 => 'module_filter.module',
            3 => 'module_filter.admin.inc',
            4 => 'module_filter.theme.inc',
            5 => 'css/module_filter.css',
            6 => 'css/module_filter_tab.css',
            7 => 'js/module_filter.js',
            8 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-2.0',
          'project' => 'module_filter',
          'datestamp' => '1424631189',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'version' => '7.x-2.0',
      ),
    ),
    'themes' => 
    array (
      'myu' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/themes/myu/myu.info',
        'basename' => 'myu.info',
        'name' => 'Bootstrap Sub-Theme: Media: YouTube Upload (CDN)',
        'info' => 
        array (
          'name' => 'Bootstrap Sub-Theme: Media: YouTube Upload (CDN)',
          'description' => 'Uses the jsDelivr CDN for all CSS and JavaScript. No source files or compiling is necessary and is recommended for simple sites or beginners.',
          'core' => '7.x',
          'base theme' => 'bootstrap',
          'regions' => 
          array (
            'navigation' => 'Navigation',
            'header' => 'Top Bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'Primary',
            'sidebar_second' => 'Secondary',
            'footer_left' => 'Footer Left',
            'footer_right' => 'Footer Right',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/style.css',
            ),
          ),
        ),
        'version' => NULL,
      ),
      'bootstrap' => 
      array (
        'filename' => '/var/aegir/platforms/mediayoutubeupload/sites/all/themes/bootstrap/bootstrap.info',
        'basename' => 'bootstrap.info',
        'name' => 'Bootstrap',
        'info' => 
        array (
          'name' => 'Bootstrap',
          'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
          'core' => '7.x',
          'simplytest_dependencies' => 
          array (
            0 => 'jquery_update',
          ),
          'regions' => 
          array (
            'navigation' => 'Navigation',
            'header' => 'Top Bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'Primary',
            'sidebar_second' => 'Secondary',
            'footer' => 'Footer',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'settings' => 
          array (
            'bootstrap_fluid_container' => '0',
            'bootstrap_button_size' => '',
            'bootstrap_button_colorize' => '1',
            'bootstrap_button_iconize' => '1',
            'bootstrap_image_shape' => '',
            'bootstrap_image_responsive' => '1',
            'bootstrap_table_bordered' => '0',
            'bootstrap_table_condensed' => '0',
            'bootstrap_table_hover' => '1',
            'bootstrap_table_striped' => '1',
            'bootstrap_table_responsive' => '1',
            'bootstrap_breadcrumb' => '1',
            'bootstrap_breadcrumb_home' => '0',
            'bootstrap_breadcrumb_title' => '1',
            'bootstrap_navbar_position' => '',
            'bootstrap_navbar_inverse' => '0',
            'bootstrap_pager_first_and_last' => '1',
            'bootstrap_region_well-navigation' => '',
            'bootstrap_region_well-header' => '',
            'bootstrap_region_well-highlighted' => '',
            'bootstrap_region_well-help' => '',
            'bootstrap_region_well-content' => '',
            'bootstrap_region_well-sidebar_first' => 'well',
            'bootstrap_region_well-sidebar_second' => '',
            'bootstrap_region_well-footer' => '',
            'bootstrap_anchors_fix' => '0',
            'bootstrap_anchors_smooth_scrolling' => '0',
            'bootstrap_forms_required_has_error' => '0',
            'bootstrap_forms_has_error_value_toggle' => '1',
            'bootstrap_forms_smart_descriptions' => '1',
            'bootstrap_forms_smart_descriptions_limit' => '250',
            'bootstrap_forms_smart_descriptions_allowed_tags' => 'b, code, em, i, kbd, span, strong',
            'bootstrap_popover_enabled' => '1',
            'bootstrap_popover_animation' => '1',
            'bootstrap_popover_html' => '0',
            'bootstrap_popover_placement' => 'right',
            'bootstrap_popover_selector' => '',
            'bootstrap_popover_trigger' => 
            array (
              '\'hover\'' => '0',
              '\'focus\'' => '0',
              '\'click\'' => 'click',
            ),
            'bootstrap_popover_trigger_autoclose' => '1',
            'bootstrap_popover_title' => '',
            'bootstrap_popover_content' => '',
            'bootstrap_popover_delay' => '0',
            'bootstrap_popover_container' => 'body',
            'bootstrap_tooltip_enabled' => '1',
            'bootstrap_tooltip_animation' => '1',
            'bootstrap_tooltip_html' => '0',
            'bootstrap_tooltip_placement' => 'auto left',
            'bootstrap_tooltip_selector' => '',
            'bootstrap_tooltip_trigger' => 
            array (
              '\'hover\'' => 'hover',
              '\'focus\'' => 'focus',
              '\'click\'' => '0',
            ),
            'bootstrap_tooltip_delay' => '0',
            'bootstrap_tooltip_container' => 'body',
            'bootstrap_cdn_provider' => 'jsdelivr',
            'bootstrap_cdn_custom_css' => 'https://cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.css',
            'bootstrap_cdn_custom_css_min' => 'https://cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.min.css',
            'bootstrap_cdn_custom_js' => 'https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.js',
            'bootstrap_cdn_custom_js_min' => 'https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js',
            'bootstrap_cdn_jsdelivr_version' => '3.3.5',
            'bootstrap_cdn_jsdelivr_theme' => 'bootstrap',
            'toggle_name' => '1',
            'toggle_search' => '1',
            'jquery_update_jquery_version' => '2.1',
          ),
          'exclude' => 
          array (
            'css' => 
            array (
              0 => 'misc/vertical-tabs.css',
              1 => 'modules/aggregator/aggregator.css',
              2 => 'modules/book/book.css',
              3 => 'modules/comment/comment.css',
              4 => 'modules/dblog/dblog.css',
              5 => 'modules/file/file.css',
              6 => 'modules/filter/filter.css',
              7 => 'modules/forum/forum.css',
              8 => 'modules/help/help.css',
              9 => 'modules/menu/menu.css',
              10 => 'modules/openid/openid.css',
              11 => 'modules/poll/poll.css',
              12 => 'modules/search/search.css',
              13 => 'modules/statistics/statistics.css',
              14 => 'modules/syslog/syslog.css',
              15 => 'modules/system/maintenance.css',
              16 => 'modules/system/system.maintenance.css',
              17 => 'modules/system/system.menus.css',
              18 => 'modules/system/system.messages.css',
              19 => 'modules/system/system.theme.css',
              20 => 'modules/taxonomy/taxonomy.css',
              21 => 'modules/tracker/tracker.css',
              22 => 'modules/update/update.css',
              23 => 'modules/user/user.css',
            ),
          ),
          'breakpoints' => 
          array (
            'screen-xs-max' => '(max-width: 767px)',
            'screen-sm-min' => '(min-width: 768px)',
            'screen-sm-max' => '(max-width: 991px)',
            'screen-md-min' => '(min-width: 992px)',
            'screen-md-max' => '(max-width: 1199px)',
            'screen-lg-min' => '(min-width: 1200px)',
          ),
          'multipliers' => 
          array (
            'screen-xs-max' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-sm-min' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-sm-max' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-md-min' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-md-max' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-lg-min' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
          ),
          'version' => '7.x-3.4',
          'project' => 'bootstrap',
          'datestamp' => '1450532342',
        ),
        'version' => '7.x-3.4',
      ),
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);