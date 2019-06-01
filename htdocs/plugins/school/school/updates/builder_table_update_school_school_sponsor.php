<?php namespace school\School\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSchoolSchoolSponsor extends Migration
{
    public function up()
    {
        Schema::table('school_school_sponsor', function($table)
        {
            $table->string('logo', 191)->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('school_school_sponsor', function($table)
        {
            $table->string('logo', 191)->nullable()->change();
        });
    }
}
