<?php namespace Murad\Abouthistory\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradAbouthistory3 extends Migration
{
    public function up()
    {
        Schema::table('murad_abouthistory_', function($table)
        {
            $table->dropColumn('title');
        });
    }
    
    public function down()
    {
        Schema::table('murad_abouthistory_', function($table)
        {
            $table->string('title', 255);
        });
    }
}
