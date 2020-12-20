@extends('layouts.main')


@section('content')

    <div>
        <h3>
            Edit Profile.
        </h3>
    </div>

    @include('includes.message')

    {{-- @include('includes.back_button') --}}

    <div class="col-md-4">

        {{-- name,email,gender,address --}}
        <form action="{{  route('profile.update',[$data->id])  }}" method="POST">

            @csrf
            @method('PUT')

            <div>
                <label for="">
                    Name
                </label>
            </div>
            <div>
                <input class="form-control" type="text" name="name" value="{{  $data->name }}" />
            </div>



            <div>
                <label for="">
                    E-mail
                </label>
            </div>
            <div>
                <input class="form-control" type="email" name="email" value="{{  $data->email }}" />
            </div>


            <div>
                <label for="">
                    Gender
                </label>
            </div>
            <div>
                <input class="form-control" type="text" name="gender" value="{{  $data->gender }}" />
            </div>

            <div>
                <label for="">
                    Address
                </label>
            </div>
            <div>
                <input class="form-control" type="text" name="address" value="{{  $data->address }}" />
            </div>

            <div>
                <hr>
            </div>
            <div>
                <input class="btn btn-success" type="submit" value="Save" />
            </div>


        </form>


    </div>


@endsection()

