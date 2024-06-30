<?php namespace Murad\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradSettings extends Migration
{
    public function up()
    {
        Schema::table('murad_settings_', function($table)
        {
            $table->string('copywrite_text');
        });
    }
    
    public function down()
    {
        Schema::table('murad_settings_', function($table)
        {
            $table->dropColumn('copywrite_text');
        });
    }
}
