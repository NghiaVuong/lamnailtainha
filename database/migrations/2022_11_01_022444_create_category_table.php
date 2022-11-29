<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->longText('description')->nullable();
            $table->string('slug', 255)->unique();
            $table->enum('status', ['active','inactive'])->default(App\Models\Category::STATUS['PUBLISH']);

            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('blog_category', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('blog_id')->require();
            $table->foreign('blog_id')
                ->references('id')
                ->on('blog')
                ->onDelete('cascade');
                

            $table->unsignedBigInteger('category_id')->require();
            $table->foreign('category_id')
                ->references('id')
                ->on('category')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
