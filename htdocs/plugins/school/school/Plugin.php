<?php namespace school\School;

use Backend\Facades\Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'School\School\Components\Links'        => 'links',
            'School\School\Components\Schools'       => 'schools',
            'School\School\Components\Sponsors'     => 'sponsors'
        ];
    }

    public function registerSettings()
    {
    }

    /*
    public function registerNavigation()
    {
        return [
            'school' => [
                'label'         => 'School Management',
                'url'           => Backend::url('/'),
                'icon'          => 'icon-pencil',
                'permissions'   => ['*'],

                'sideMenu'      => [
                    'label'         => 'Links',
                    'url'           => Backend::url('/'),
                    'icon'          => 'icon-pencil',
                    'permissions'   => ['*'],
                ]
            ]
        ];
    }
    */
}
