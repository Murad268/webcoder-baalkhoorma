<?php namespace Murad\Aboutcsr\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradAboutcsr2 extends Migration
{
    public function up()
    {
        Schema::table('murad_aboutcsr_', function($table)
        {
            $table->dropColumn('title');
        });
    }
    
    public function down()
    {
        Schema::table('murad_aboutcsr_', function($table)
        {
            $table->string('title', 255)->nullable();
        });
    }
}
