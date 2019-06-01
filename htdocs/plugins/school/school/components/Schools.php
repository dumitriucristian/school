<?php namespace School\School\Components;

    use Cms\Classes\ComponentBase;
    use School\School\Models\School;

class Schools extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Date Generale',
            'description' => 'Datele generale ale scolii'
        ];
    }


    public function onRun(){

        $this->schools = $this->loadSchoolData();

    }

    protected function loadSchoolData(){
        return School::all();
    }

    public $schools;

}
