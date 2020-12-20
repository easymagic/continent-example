@extends('layouts.main')

@section('content')

    <div>
        <h3>
            Add Country
        </h3>
    </div>

    @include('includes.message')

    {{-- @include('includes.back_button') --}}

    <div class="col-md-4">

        {{-- name,email,gender,address --}}
        <form action="{{  route('country.store') }}" method="POST">

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
                    Continents
                </label>
            </div>
            <div>
                <select class="form-control" name="continent_id">
                    <option>--Select--</option>
                    @foreach ($continents as $continent)
                        <option value="{{ $continent->id }}">{{ $continent->name }}</option>
                    @endforeach
                </select>
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


