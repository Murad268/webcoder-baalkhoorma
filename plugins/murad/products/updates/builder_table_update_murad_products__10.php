<?php namespace Murad\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradProducts10 extends Migration
{
    public function up()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->text('order_proccess')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->text('order_proccess')->nullable(false)->change();
        });
    }
}
