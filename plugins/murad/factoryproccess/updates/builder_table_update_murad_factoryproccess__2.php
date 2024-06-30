<?php namespace Murad\Factoryproccess\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradFactoryproccess2 extends Migration
{
    public function up()
    {
        Schema::table('murad_factoryproccess_', function($table)
        {
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('murad_factoryproccess_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
