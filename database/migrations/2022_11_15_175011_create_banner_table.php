<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->longText('content')->nullable();
            $table->string('slug', 255)->unique();
            $table->string('thumbnail', 255)->nullable();
            $table->enum('tag',['1','2','3'])->nullable();

            $table->enum('status', ['active', 'inactive'])->default(App\Models\banner::STATUS['PUBLISH']);

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
        Schema::dropIfExists('banner');
    }
}
