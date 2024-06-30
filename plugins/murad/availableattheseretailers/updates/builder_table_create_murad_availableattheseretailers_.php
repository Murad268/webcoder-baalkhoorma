<?php namespace Murad\Availableattheseretailers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradAvailableattheseretailers extends Migration
{
    public function up()
    {
        Schema::create('murad_availableattheseretailers_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_availableattheseretailers_');
    }
}
