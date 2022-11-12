@extends('layouts.app')
@section('content')

<div class="mx-4 mt-4">
<h1>Hello, <?php echo ucwords($user['name']);?></h1>
</div>
<div class="card text-center mx-4 mb-4 mt-4">
  <div class="card-header">
    Your account details:
  </div>
  <div class="card-body">

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
    <p class="card-text"><?php echo ucwords($user['name']);?> </p> <a href="/settings" class="btn btn-primary pl-10">Update Name</a>
</div>
<div class="mt-3">
  <h5 class="card-title">Email:</h3>
    <p class="card-text"><?php echo ucwords($user['email']);?> </p> <a href="/settings" class="btn btn-primary pl-10">Update Email</a> 
</div>
<div class="mt-3 mb-4">  
  <h5 class="card-title">Password:</h3>
    <p class="card-text"></p> <a href="/settings" class="btn btn-primary pl-5">Update Password</a>
</div>
  </div>
  <div class="card-footer text-muted">
    Problem? <a class="pl-5" href="/contact">Contact Us</a>
  </div>
</div>

@endsection