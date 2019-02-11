@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Last Name</td>
          <td>First Name</td>
          <td>Gender</td>
          <td>Age</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($kids as $kid)
        <tr>
            <td>{{$kid->id}}</td>
            <td>{{$kid->lname}}</td>
            <td>{{$kid->fname}}</td>
            <td>{{$kid->gender}}</td>
            <td>{{$kid->age}}</td>
            <td><a href="{{ route('kids.edit',$kid->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('kids.destroy', $kid->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
