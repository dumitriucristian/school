<?php namespace school\School\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSchoolSchoolSponsor extends Migration
{
    public function up()
    {
        Schema::create('school_school_sponsor', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('logo')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('school_school_sponsor');
    }
}
