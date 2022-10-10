<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_author');
            $table->string('book_name');
            $table->string('book_isbn');
            $table->integer('book_no_of_copies');
            $table->enum('book_status', ['Available', 'Unavailable']);
            $table->date('book_added_on');
            $table->date('book_updated_on');
            $table->foreignIdFor(Category::class);
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
        Schema::dropIfExists('books');
    }
};
