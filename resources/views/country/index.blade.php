@extends('layouts.main')

@section('content')


    @include('includes.message')


     <div align="right">
        <a class="btn btn-success btn-sm" style="margin: 11px;" href="{{ route('country.create') }}?continent_id={{ request('continent_id') }}">Add Country</a>
    </div>

    {{-- name,email,gender,address --}}
    <table class="table table-striped">

        <tr>
            <th>
                Name
            </th>
            <th>
                Continent
            </th>
            <th>
                Created
            </th>
            <th>
                Updated
            </th>
            <th>
                Actions
            </th>
        </tr>

        @foreach ($list as $item)


            <tr>
                <td>
                    {{ $item->name  }}
                </td>
                <td>
                    {{ $item->continent->name }}
                </td>
                <td>
                    {{  $item->created_at }}
                </td>
                <td>
                    {{  $item->updated_at }}
                </td>
                <td>

                    <a class="btn btn-sm btn-primary" href="{{ route('country.edit',[$item->id]) }}">Edit</a>
                    <a class="btn btn-sm btn-primary" href="">States</a>
                    <form onsubmit="return confirm('Do you want to perform this action?')" method="post" action="{{ route('country.destroy',[$item->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
                    </form>

                </td>
            </tr>


        @endforeach


    </table>


@endsection
