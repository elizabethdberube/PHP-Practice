@extends('layouts.app')
@section('content')


<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
 <div class="card">
  <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="card-body">
 
    <form method="POST" action="/checkout/<?php echo $book['id']?>">
    @csrf

  <h1>Checkout for <?php echo ucwords($user['name']);?>:</h1>
  <hr></hr>
  <h5>Book you are checking out:</h5>
  <input id="{{$book['id']}}" name="{{$book['id']}}" type="hidden" class="form-control" required="required">
  <input id="{{$book['book_name']}}" name="{{$book['book_name']}}" type="hidden" class="form-control" required="required">  
  <input id="{{$book['book_author']}}" name="{{$book['book_author']}}" type="hidden" class="form-control" required="required">
  <input id="{{$book['book_isbn']}}" name="{{$book['book_isbn']}}" type="hidden" class="form-control" required="required">
  <input id="{{$book['book_status_enum']}}" name="{{$book['book_status_enum']}}" type="hidden" class="form-control" required="required">
  <p><?php echo"{$book['id']}"; ?></p>
  <p><?php echo"{$book['book_name']}"; ?></p>
   <p><?php echo"{$book['book_author']}"; ?></p>
   <p><?php echo"{$book['book_isbn']}"; ?></p>
   <p><?php echo"{$book['book_status_enum']}"; ?></p>
   
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-primary" href="javascript:history.back(1)">Back</a>
</form>
</div>
</div>
</div>
</div>

@endsection
