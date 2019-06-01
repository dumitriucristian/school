<?php namespace school\School\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSchoolSchoolLink extends Migration
{
    public function up()
    {
        Schema::create('school_school_link', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('link');
            $table->string('url');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('school_school_link');
    }
}
