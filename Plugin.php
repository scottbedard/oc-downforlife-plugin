<?php namespace Bedard\DownForLife;

use Backend;
use System\Classes\PluginBase;

/**
 * DownForLife Plugin Information File
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
            'name'        => 'Down For Life',
            'description' => 'Awesome homies who are down for life.',
            'author'      => 'Scott Bedard',
            'icon'        => 'icon-users'
        ];
    }

    /**
     * Registers the backend navigation items
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'downforlife' => [
                'label'       => 'Down For Life',
                'url'         => Backend::url('bedard/downforlife/homies'),
                'icon'        => 'icon-users',
                'permissions' => ['Bedard.DownForLife.*'],
                'order'       => 300,

                'sideMenu' => [
                    'homies' => [
                        'label'         => 'Down For Life',
                        'icon'          => 'icon-users',
                        'url'           => Backend::url('bedard/downforlife/homies'),
                        'permissions'   => ['Bedard.DownForLife.access_homies'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Registers the frontend components
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Bedard\DownForLife\Components\DownForLife' => 'downforlife',
        ];
    }
}
