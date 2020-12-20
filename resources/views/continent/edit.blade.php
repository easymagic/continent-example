@extends('layouts.main')

@section('content')

    <div>
        <h3>
            Edit Continent
        </h3>
    </div>

    @include('includes.message')

    {{-- @include('includes.back_button') --}}

    <div class="col-md-4">

        {{-- name,email,gender,address --}}
        <form action="{{  route('continent.update',[$data->id]) }}" method="POST">

            @csrf
            @method('PUT')

            <div>
                <label for="">
                    Name
                </label>
            </div>
            <div>
                <input class="form-control" type="text" name="name" value="{{ $data->name }}" />
            </div>


            <div>
                <hr>
            </div>
            <div>
                <input class="btn btn-success" type="submit" value="Save" />
            </div>


        </form>


    </div>


@endsection


