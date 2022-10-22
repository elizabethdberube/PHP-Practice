<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
use App\Models\Book;

class Book_Checkout extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $Book_Checkout = [
        'id',
        'user_id',
        'book_id',
        'expected_return_date',
        'return_date',
        'book_fines',
        'book_issue_status',
    ];

    public function book() {
        return $this->belongsTo(Book::class);
    }
    public function User() {
        return $this->belongsTo(User::class);
    }


}
