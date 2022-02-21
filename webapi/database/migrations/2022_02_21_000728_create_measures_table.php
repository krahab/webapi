<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('measures', function (Blueprint $table) {
              $table->id(); // Clé primaire indexée
              $table->double('value');
              $table->enum('type', ['pm25', 'pm10', 'co2', 'no2',                                                            'so2', 'o3', 'temp', 'hum'])->index();
              $table->timestamps(); // Ajoute les champs created_at et updated_at
            });
        }
        

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('measures');
    }
}
