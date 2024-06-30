<?php namespace Murad\Factoryproccess\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradFactoryproccess extends Migration
{
    public function up()
    {
        Schema::table('murad_factoryproccess_', function($table)
        {
            $table->string('proccess_name', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('murad_factoryproccess_', function($table)
        {
            $table->string('proccess_name', 255)->nullable(false)->change();
        });
    }
}
