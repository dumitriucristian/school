<?php namespace school\School;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'School\School\Components\Links' => 'links'
        ];
    }

    public function registerSettings()
    {
    }
}
