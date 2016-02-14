
-- SUMMARY --

The Environmental administration menu module lets users change the admin menu's
color according to the environment based on domain. This allows for easy
recognition of environment and can help prevent making configuration changes on
the wrong environment.

This module also integrates the "Masquerade" module to allow switching to users
that don't have permission to the administration menu but still print it so you
can always differentiate environments.

-- INSTALLATION AND CONFIGURATION --

To install the Environmental administration menu module, extract the module to 
your modules folder, such as sites/all/modules. After enabling the module, it 
can be configured under Administer > Configuration > Administration > 
Administration menu > Environmental settings or:
"/admin/config/administration/admin_menu/environmental"

There you should enter a name for your domain, the domain itself and assign it 
a color. For example:

Name: Development server
Domain: example.dev
Color: green

It is also possible to override any setting set in the database by using the 
settings.php $conf variable. If you have environment specific settings you can
set the variable like so:

$conf['admin_menu_environmental_settings'] = array(
  'name' => 'Development server',
  'domain' => NULL,
  'color' => 'green',
);

Since we are using the settings we don't need domain so we set that to NULL.
