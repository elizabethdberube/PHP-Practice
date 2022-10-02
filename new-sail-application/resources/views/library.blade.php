@extends('layouts.app')
@section('content')

<ul class="dropdown-menu">
  <li><a class="dropdown-item" href="#">Programming</a></li>
  <li><a class="dropdown-item" href="#">Database</a></li>
  <li><a class="dropdown-item" href="#">Web Design</a></li>
  <li><a class="dropdown-item" href="#">Web Development</a></li>
</ul>


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

