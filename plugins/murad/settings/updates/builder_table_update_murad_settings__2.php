<?php namespace Murad\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradSettings2 extends Migration
{
    public function up()
    {
        Schema::table('murad_settings_', function($table)
        {
            $table->text('internal_quality_policy_text')->nullable();
            $table->string('email', 255)->nullable()->change();
            $table->string('addres', 255)->nullable()->change();
            $table->string('phone1', 255)->nullable()->change();
            $table->string('phone2', 255)->nullable()->change();
            $table->string('copywrite_text', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('murad_settings_', function($table)
        {
            $table->dropColumn('internal_quality_policy_text');
            $table->string('email', 255)->nullable(false)->change();
            $table->string('addres', 255)->nullable(false)->change();
            $table->string('phone1', 255)->nullable(false)->change();
            $table->string('phone2', 255)->nullable(false)->change();
            $table->string('copywrite_text', 255)->nullable(false)->change();
        });
    }
}
