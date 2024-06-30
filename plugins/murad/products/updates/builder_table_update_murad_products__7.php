<?php namespace Murad\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradProducts7 extends Migration
{
    public function up()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->boolean('add_home_page_slider');
        });
    }
    
    public function down()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->dropColumn('add_home_page_slider');
        });
    }
}
