<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateHousesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('houses', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string("name", 50)->nullable()->default(null);
                $table->float("price", 20, 2)->nullable()->default(null);
                $table->integer('bedrooms')->nullable()->default(null);
                $table->integer('bathrooms')->nullable()->default(null);
                $table->integer('storeys')->nullable()->default(null);
                $table->integer('garages')->nullable()->default(null);
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('houses');
        }
    }
