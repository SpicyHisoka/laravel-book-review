<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->text('review');
            $table->unsignedTinyInteger('rating');

            $table->timestamps();

            //Questa sintassi è più lunga, posso fare anche diversamente (codice non commentato)
            // $table->unsignedBigInteger('book_id'); Qeusta sarà la nostra foreign key
            //Imposto book_id come foreign key e la associo a books
            //onDelete specifica che quando un libro viene eliminato, a cascata vengono eliminate anche le reviews
            //Questa sintassi è più lunga, posso fare anche diversamente (codice non commentato)
            // $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

            $table->foreignId('book_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
