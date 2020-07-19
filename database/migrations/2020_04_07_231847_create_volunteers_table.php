<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
          $table->id();
          $table->string('First_Name');
          $table->UnsignedBigInteger('link_id');
          $table->string('Last_Name');
          $table->date('Date_of_Birth');
          $table->string('Place_of_Birth');
          $table->string('Contact_Number');
          $table->string('Address');
          $table->string('Gender');
          $table->string('Blood_Group');
          $table->string('Education_Level');
          $table->string('Area_of_Intrest');
          $table->string('Category');
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
        Schema::dropIfExists('volunteers');
    }
}
