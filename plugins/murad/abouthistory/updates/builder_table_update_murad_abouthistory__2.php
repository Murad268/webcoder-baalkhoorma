<?php namespace Murad\Abouthistory\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradAbouthistory2 extends Migration
{
    public function up()
    {
        Schema::table('murad_abouthistory_', function($table)
        {
            $table->renameColumn('vide_link', 'video_link');
        });
    }
    
    public function down()
    {
        Schema::table('murad_abouthistory_', function($table)
        {
            $table->renameColumn('video_link', 'vide_link');
        });
    }
}
