<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//not sure about this
use Illuminate\Foundation\Auth\Admin as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Category;

class Book extends Authenticatable
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
