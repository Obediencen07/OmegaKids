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
          <td>ClassName/Level</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($classe as $classe)
        <tr>
            <td>{{$classe->id}}</td>
            <td>{{$classe->name}}</td>
            <td><a href="{{ route('classe.edit',$classe->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('classe.destroy', $classe->id)}}" method="post">
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
