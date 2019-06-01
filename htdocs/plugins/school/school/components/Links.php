<?php namespace School\School\Components;

    use Cms\Classes\ComponentBase;
    use School\School\Models\Link;

    class Links extends ComponentBase
    {

        public function componentDetails()
        {
            // TODO: Implement componentDetails() method.
            return [
                'name' => "Links",
                'description' => "List of links"
            ];
        }

        public function onRun(){

            $this->links = $this->loadLinks();

        }

        protected function loadLinks(){
            return Link::all();
        }

        public $links;

    }

