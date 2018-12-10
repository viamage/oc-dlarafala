<?php namespace Viamage\DlaRafala;

use Backend;
use System\Classes\PluginBase;
use Viamage\DlaRafala\Components\UserServerRequest;

/**
 * DlaRafala Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'DlaRafala',
            'description' => 'No description provided yet...',
            'author'      => 'Viamage',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            UserServerRequest::class => 'user_server_request',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'viamage.dlarafala.some_permission' => [
                'tab' => 'DlaRafala',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'dlarafala' => [
                'label'       => 'DlaRafala',
                'url'         => Backend::url('viamage/dlarafala/serverrequests'),
                'icon'        => 'icon-leaf',
                'permissions' => ['viamage.dlarafala.*'],
                'order'       => 500,
            ],
        ];
    }
}
