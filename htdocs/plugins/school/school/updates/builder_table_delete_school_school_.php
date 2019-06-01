<?php namespace school\School\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSchoolSchool extends Migration
{
    public function up()
    {
        Schema::dropIfExists('school_school_');
    }
    
    public function down()
    {
        Schema::create('school_school_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 191);
        });
    }
}
