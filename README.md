twAdminGuardPlugin
==================

Integration of twAdminPlugin with sfGuardPlugin


Installation
------------

  * Install and configure sfGuardPlugin

  * Install and configure twAdminPlugin

Secure your application
-----------------------

To secure a symfony application:

  * Enable the module `twGuardAuth` in `settings.yml`

``` yaml
all:
  .settings:
    enabled_modules: [..., twGuardAuth]
```


  * Change the default login and secure modules in `settings.yml`

``` yaml
login_module:   twGuardAuth
login_action:   signin

secure_module:  twGuardAuth
secure_action:  secure
```


  * Optionally add the following routing rules to `routing.yml`

``` yaml
sf_guard_signin:
  url:   /login
  param: { module: twGuardAuth, action: signin }

sf_guard_signout:
  url:   /logout
  param: { module: twGuardAuth, action: signout }

sf_guard_password:
  url:   /request_password
  param: { module: twGuardAuth, action: password }
```


  You can customize the `url` parameter of each route.
  N.B.: You must have a `@homepage` routing rule (used when a user sign out)

  These routes are automatically registered by the plugin if the module `sfGuardAuth`
  is enabled unless you defined `tw_admin_guard_plugin_routes_register` to false
  in the `app.yml` configuration file:

``` yaml
all:
  tw_admin_guard_plugin:
    routes_register: false
```


  * Secure some modules or your entire application in `security.yml`

``` yaml
default:
  is_secure: on
```


  * You're done. Now, if you try to access a secure page, you will be redirected
    to the login page.
    If you have loaded the default fixture file, try to login with `admin` as
    username and `admin` as password.

Manage your users, permissions and groups
-----------------------------------------

To be able to manage your users, permissions and groups, `sfGuardPlugin` comes
with 3 modules that can be integrated in your backend application.
These modules are auto-generated thanks to the symfony admin generator.

  * Enable the modules in `settings.yml`

``` yaml
all:
  .settings:
    enabled_modules: [..., twAdmin]
```


  * Access the modules with the default route:

        http://www.example.com/backend.php/tw_guard_user

**Rest is the same like in sfGuardPlugin Documentation**
