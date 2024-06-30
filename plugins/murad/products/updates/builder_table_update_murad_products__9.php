<?php namespace Murad\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradProducts9 extends Migration
{
    public function up()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->text('order_proccess');
        });
    }
    
    public function down()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->dropColumn('order_proccess');
        });
    }
}
