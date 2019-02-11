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
      <form method="post" action="{{ route('hbf.update', $hbf->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">HBF Name:</label>
          <input type="text" class="form-control" name="name" value={{ $hbf->name }} />
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
