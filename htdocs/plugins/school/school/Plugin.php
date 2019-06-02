<?php namespace school\School;

use Backend\Facades\Backend;
use System\Classes\PluginBase;
use Mail;
use Event;

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

    public function boot(){

        Mail::pretend();

        Event::listen('rainlab.user.register', function($user) {
           // die('event happend');
            // Code to register $user->email to mailing list
            Mail::sendTo('dumitriucirstian@yahoo.com', 'new user registerd today');

        });
    }
}
