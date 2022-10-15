@extends('layouts.app')
@section('content')


<div class="list-group">
  <a href="/library/category/1" class="list-group-item list-group-item-action active" aria-current="true">
  Programming
  </a>
  <a href="/library/category/2" class="list-group-item list-group-item-action">Database</a>
  <a href="/library/category/3" class="list-group-item list-group-item-action">Web Design</a>
  <a href="/library/category/4" class="list-group-it list-group-item-action">Web Development</a>
</div>

<form action="insert.php" method="post">
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Author</th>
      <th scope="col">Name</th>
      <th scope="col">ISBN</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php

foreach ($books as $book) {
  echo "
    <tr>
      <td>{$book['book_author']}</td>
    </tr>
    <tr>
      <td>{$book['book_name']}</td>
    </tr>
    <tr>
   
      <td>{$book['book_isbn']}<br/></td>
    
    </tr>
    <tr>
   
    <td>{$book['book_isbn']}<br/>
    
    </td>
  
  </tr>
    ";

  }
  ?>
  </tbody>
</table>
</form>

@endsection

