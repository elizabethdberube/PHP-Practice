@extends('layouts.app')
@section('content')


<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

  <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form>

  <h1>Checkout for <?php echo ucwords($user['name']);?>:</h1>

  <h5>Book:<?php echo"{$book['book_name']}"; ?></h5>

  <button class="btn btn-primary">Submit</button>
</form>
</div>
</div>

@endsection
