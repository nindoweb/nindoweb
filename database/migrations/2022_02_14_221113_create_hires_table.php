<?php

use App\Models\Hire;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hiring', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('job_title');
            $table->string('file');
            $table->boolean('was_seen')->default(false);
            $table->string('status')->default(Hire::STATUS_APPLY);
            $table->softDeletes();
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
        Schema::dropIfExists('hires');
    }
}
