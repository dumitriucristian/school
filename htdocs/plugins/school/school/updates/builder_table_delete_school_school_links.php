<?php namespace school\School\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSchoolSchoolLinks extends Migration
{
    public function up()
    {
        Schema::dropIfExists('school_school_links');
    }
    
    public function down()
    {
        Schema::create('school_school_links', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('title', 191);
            $table->string('url', 191);
            $table->primary(['id']);
        });
    }
}
