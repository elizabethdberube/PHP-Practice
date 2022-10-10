<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Book;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_checkouts', function (Blueprint $table) {
            $table->id();
            $table->date('checkout_date');
            $table->date('expected_return_date');
            $table->date('return_date');
            $table->integer('book_fines');
            $table->enum('book_issue_status', ['Issue', 'Return', 'Not Return']);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Book::class);
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
        Schema::dropIfExists('book_checkouts');
    }
};
