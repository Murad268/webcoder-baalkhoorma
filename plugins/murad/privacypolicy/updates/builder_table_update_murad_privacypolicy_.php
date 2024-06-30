<?php namespace Murad\Privacypolicy\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradPrivacypolicy extends Migration
{
    public function up()
    {
        Schema::table('murad_privacypolicy_', function($table)
        {
            $table->text('description')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('murad_privacypolicy_', function($table)
        {
            $table->string('description', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
