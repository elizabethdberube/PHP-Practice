@extends('layouts.app')
@section('content')


<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
  Programming
  </a>
  <a href="#" class="list-group-item list-group-item-action">Database</a>
  <a href="#" class="list-group-item list-group-item-action">Web Design</a>
  <a href="#" class="list-group-item list-group-item-action">Web Development</a>
</div>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


@endsection

