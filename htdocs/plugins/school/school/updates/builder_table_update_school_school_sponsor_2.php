<?php namespace school\School\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSchoolSchoolSponsor2 extends Migration
{
    public function up()
    {
        Schema::table('school_school_sponsor', function($table)
        {
            $table->dropColumn('logo');
        });
    }
    
    public function down()
    {
        Schema::table('school_school_sponsor', function($table)
        {
            $table->string('logo', 191);
        });
    }
}
