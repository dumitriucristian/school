<?php namespace school\School\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSchoolSchoolMetadata extends Migration
{
    public function up()
    {
        Schema::table('school_school_metadata', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('address')->change();
            $table->string('telefon')->change();
        });
    }
    
    public function down()
    {
        Schema::table('school_school_metadata', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('address', 191)->change();
            $table->string('telefon', 191)->change();
        });
    }
}
