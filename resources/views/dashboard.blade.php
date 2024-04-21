@extends('layouts.app')
  
{{-- @section('title', 'Laravel User Panel With Login and Registration') --}}
  
@section('contents')
<div class="d-flex align-items-center justify-content-between">
  <h1 class="mb-0">List User</h1>
  
</div>
<hr />

<table class="table table-hover">
  <thead class="table-primary">
      <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
      </tr>
  </thead>
  <tbody>+
      @if($user->count() > 0)
          @foreach($user as $us)
              <tr>
                  <td class="align-middle">{{ $loop->iteration }}</td>
                  <td class="align-middle">{{ $us->name }}</td>
                  <td class="align-middle">{{ $us->email }}</td>
                  
              </tr>
          @endforeach
      @else
          <tr>
              <td class="text-center" colspan="5">Product not found</td>
          </tr>
      @endif
  </tbody>
</table>
@endsection