<?php namespace school\School\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSchoolSchoolLink extends Migration
{
    public function up()
    {
        Schema::table('school_school_link', function($table)
        {
            $table->renameColumn('link', 'title');
        });
    }
    
    public function down()
    {
        Schema::table('school_school_link', function($table)
        {
            $table->renameColumn('title', 'link');
        });
    }
}
