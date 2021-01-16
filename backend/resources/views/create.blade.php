@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Add Employee
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('employees.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="role">Role</label>
              <input type="text" class="form-control" name="role"/>
          </div>
          <div class="form-group">
              <label for="interests">Interests</label>
              <input type="text" class="form-control" name="interests"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Employee</button>
      </form>
  </div>
</div>
@endsection