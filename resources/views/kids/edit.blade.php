@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 30px;
  }
</style>
<div class="card uper">
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
      <form method="post" action="{{ route('kids.update', $kids->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="lname">Last Name:</label>
          <input type="text" class="form-control" name="lname" value={{ $kids->lname }} />
        </div>
        <div class="form-group">
          <label for="fname">First Name:</label>
          <input type="text" class="form-control" name="fname" value={{ $kids->fname }} />
        </div>
        <div class="form-group">
          <label for="age">Age:</label>
          <input type="text" class="form-control" name="age" value={{ $kids->age }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
