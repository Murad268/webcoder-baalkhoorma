<?php namespace Murad\Abouthistory\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradAbouthistory extends Migration
{
    public function up()
    {
        Schema::table('murad_abouthistory_', function($table)
        {
            $table->renameColumn('vide_url', 'vide_link');
        });
    }
    
    public function down()
    {
        Schema::table('murad_abouthistory_', function($table)
        {
            $table->renameColumn('vide_link', 'vide_url');
        });
    }
}
