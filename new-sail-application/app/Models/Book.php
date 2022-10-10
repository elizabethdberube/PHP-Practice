<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Category;

class Book extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $Book = [
        'id',
        'category_id',
        'book_author',
        'book_isbn',
        'book_no_of_copies',
        'book_status',
        'book_added_on',
        'book_updated_on',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }


}
