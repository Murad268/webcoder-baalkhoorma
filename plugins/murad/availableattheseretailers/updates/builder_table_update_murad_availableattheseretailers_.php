<?php namespace Murad\Availableattheseretailers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradAvailableattheseretailers extends Migration
{
    public function up()
    {
        Schema::table('murad_availableattheseretailers_', function($table)
        {
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::table('murad_availableattheseretailers_', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
