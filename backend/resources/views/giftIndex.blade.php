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
  <a href="{{ route('gifts.create')}}" class="btn btn-primary btn-sm"">Create New</a>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Category</td>
          <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($Gifts as $Gift)
        <tr>
            <td>{{$Gift->id}}</td>
            <td>{{$Gift->name}}</td>
            <td>{{$Gift->category}}</td>
            <td class="text-center">
                <a href="{{ route('gifts.edit', $Gift->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('gifts.destroy', $Gift->id)}}" method="post" style="display: inline-block">
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