@extends('layouts.app')
@section('content')


<div class="list-group">
  <a href="/library/1/" class="list-group-item list-group-item-action active" aria-current="true">
  Programming
  </a>
  <a href="/library/2" class="list-group-item list-group-item-action">Database</a>
  <a href="/library/3" class="list-group-item list-group-item-action">Web Design</a>
  <a href="/library/4" class="list-group-item list-group-item-action">Web Development</a>
</div>


  
  <?php
if (isset($books)) { 
?>
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
    <tr>
    <?php
foreach ($books as $book) {
  echo "
  
      <td>{$book['book_author']}</td>
 
      <td>{$book['book_name']}</td>

   
      <td>{$book['book_isbn']}<br/></td>
    

    <td>{$book['book_status']}<br/>
  
  
  
    ";

  }
?>
</tr>
  </tbody>
</table>
</form>
<?php
 } else {
  
 }
?>
@endsection

