<?php namespace Murad\Homepageabouthistorytext\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradHomepageabouthistorytext extends Migration
{
    public function up()
    {
        Schema::create('murad_homepageabouthistorytext_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_homepageabouthistorytext_');
    }
}
