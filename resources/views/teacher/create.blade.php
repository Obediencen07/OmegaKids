@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Register
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
      <form method="post" action="{{ route('teacher.store') }}">
          <div class="form-group">
              @csrf
              <label for="lname">Last Name:</label>
              <input type="text" class="form-control" name="lname"/>
          </div>
          <div class="form-group">
              <label for="fname">Firts Name :</label>
              <input type="text" class="form-control" name="fname"/>
          </div>
          <div class="form-group">
              <label for="gender">Gender :</label>
              <input type="text" class="form-control" name="gender"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" class="form-control" name="phone"/>
          </div>
          <div class="form-group">
              <label for="age">Age:</label>
              <input type="text" class="form-control" name="age"/>
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
      </form>
  </div>
</div>
@endsection
