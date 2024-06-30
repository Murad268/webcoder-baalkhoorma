<?php namespace Murad\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradProducts8 extends Migration
{
    public function up()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->boolean('add_home_page_slider')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->boolean('add_home_page_slider')->nullable(false)->change();
        });
    }
}
