@extends('layouts.app')
@section('content')

<div class="mx-4 mt-4">
<h1>Hello, <?php echo ucwords($user['name']);?></h1>
</div>
<div class="card text-center mx-4 mb-4 mt-4">
  <div class="card-header">

  Books you have currently checked out:

  </div>
  <div class="card-body">


<tbody>

 
  <table class="table">
  <thead>
    <tr>
    <th scope="col">Book Author</th>
      <th scope="col">Book Name</th>
      <th scope="col">ISBN</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($bookListItems as $bookListItem) { ?>
<tr>
<td><?php echo $bookListItem['book_author']; ?></td>
  <td><?php echo $bookListItem['book_name']; ?></td>
  <td><?php echo $bookListItem['book_isbn']; ?></td>
 
  </tr>
<?php
  } ?>

  </tbody>
</table>
</div>
  <div class="card-footer text-muted">

  </div>
  </div>

<div class="card text-center mx-4">
  <div class="card-header">
    Adjust your account settings:
  </div>
  <div class="card-body">
  <div class="mt-3">
  <h5 class="card-title">Name:</h3>
    <p class="card-text"><?php echo ucwords($user['name']);?> </p> 
</div>
<div class="mt-3">
  <h5 class="card-title">Email:</h3>
    <p class="card-text"><?php echo ucwords($user['email']);?> </p> 
</div>
<div class="mt-3 mb-4">  

    <a href="/settings" class="btn btn-primary pl-5">Update Account Information</a>
</div>
  </div>
  <div class="card-footer text-muted">
    Problem? <a class="pl-5" href="/contact">Contact Us</a>
  </div>
</div>

@endsection