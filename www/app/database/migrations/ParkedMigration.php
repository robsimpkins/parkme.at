<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Parked table migration.
 */
class ParkedMigration 
{
    function run()
    {
        Capsule::schema()->dropIfExists('parked');
        
        Capsule::schema()->create('parked', function($table) {
            $table->increments('id');
            $table->integer('location_id')->unsigned();
            $table->string('vehicle_type');
            $table->decimal('latitude', 10, 6);
            $table->decimal('longitude', 10, 6);
            $table->timestamps();
            $table->index('location_id');
        });
    }
}