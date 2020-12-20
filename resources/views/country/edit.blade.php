@extends('layouts.main')

@section('content')

    <div>
        <h3>
            Edit Country
        </h3>
    </div>

    @include('includes.message')

    {{-- @include('includes.back_button') --}}

    <div class="col-md-4">

        {{-- name,email,gender,address --}}
        <form action="{{  route('country.update',[$data->id]) }}" method="POST">

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
                <label for="">
                    Continents
                </label>
            </div>
            <div>
                <select class="form-control" name="continent_id" value="{{ $data->continent_id }}">
                    <option>--Select--</option>
                    @foreach ($continents as $continent)
                       @if ($continent->id == $data->continent_id)
                         <option value="{{ $continent->id }}" selected>{{ $continent->name }}</option>
                       @else
                         <option value="{{ $continent->id }}">{{ $continent->name }}</option>
                       @endif
                    @endforeach
                </select>
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


