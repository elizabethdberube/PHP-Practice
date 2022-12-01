@extends('layouts.app')
@section('content')

<div class="card text-center mx-4 mb-4 mt-4">
  <div class="card-header">
  <h1>Update your info:</h1>
  </div>
  <div class="card-body">
  <form method="POST" action="">


<div class="mx-4 mb-4">
<label for="name" class="pb-2">Name:</label>
    <input id="name" type="name" class="form-control" name="name" value="<?php echo ucwords($user['name']);?>" autofocus>
</div>
<div class="mx-4 mb-4">
<label for="email" class="pb-2">Email:</label>
    <input id="email" type="email" class="form-control" name="email" value="<?php echo ucwords($user['email']);?>" autofocus>
</div>
<div class="mx-4 mb-4">
<label for="password" class="pb-2">Password:</label>
    <input id="password" type="password" class="form-control" name="password" value="password" autofocus>
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>
  </div>
  
</div>

@endsection