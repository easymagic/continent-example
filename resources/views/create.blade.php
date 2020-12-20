@extends('layouts.main')

@section('content')

<div>
    <h3>
        Add Profile.
    </h3>
</div>

@include('includes.message')

{{-- @include('includes.back_button') --}}

<div class="col-md-4">

    {{-- name,email,gender,address --}}
    <form action="{{  route('profile.create.action') }}" method="POST">

        @csrf 

        <div>
          <label for="">
              Name
          </label>
        </div>
        <div>
            <input class="form-control" type="text" name="name" />
        </div>



        <div>
            <label for="">
                E-mail
            </label>
          </div>
          <div>
              <input class="form-control" type="email" name="email" />
          </div>

          
          <div>
            <label for="">
                Gender
            </label>
          </div>
          <div>
              <input  class="form-control" type="text" name="gender" />
          </div>

          <div>
            <label for="">
                Address
            </label>
          </div>
          <div>
              <input  class="form-control" type="text" name="address" />
          </div>

          <div>
              <hr>
          </div>
          <div>
              <input class="btn btn-success" type="submit" value="Submit" />
          </div>
            

    </form>


</div>


@endsection



