<?php namespace school\School\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSchoolSchoolMetadata extends Migration
{
    public function up()
    {
        Schema::create('school_school_metadata', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('address');
            $table->string('telefon');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('school_school_metadata');
    }
}
