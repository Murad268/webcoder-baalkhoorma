<?php namespace Murad\Certificatesanddiplomas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradCertificatesanddiplomas extends Migration
{
    public function up()
    {
        Schema::create('murad_certificatesanddiplomas_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_certificatesanddiplomas_');
    }
}
