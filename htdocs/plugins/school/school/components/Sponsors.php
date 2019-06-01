<?php namespace School\School\Components;

use Cms\Classes\ComponentBase;
use School\School\Models\Sponsor;


class Sponsors extends \Cms\Classes\ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Sponsori',
            'description' => 'Sponsoriii nostri'

        ];
    }

    public function onRun(){

        $this->sponsors = $this->loadSponsors();

    }

    protected function loadSponsors(){
        return Sponsor::all();
    }

    public $sponsors;

}
