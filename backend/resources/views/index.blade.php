@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Role</td>
          <td>Interests</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($employee as $employees)
        <tr>
            <td>{{$employees->id}}</td>
            <td>{{$employees->name}}</td>
            <td>{{$employees->role}}</td>
            <td>{{$employees->interests}}</td>
            <td class="text-center">
                <a href="{{ route('employees.edit', $employees->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('employees.destroy', $employees->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection