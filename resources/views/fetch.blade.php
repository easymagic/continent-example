@extends('layouts.main')

@section('content')


@include('includes.message')
    

{{-- <div align="right">
    <a class="btn btn-success btn-sm" style="margin: 11px;" href="">Add Profile</a>
</div> --}}

{{-- name,email,gender,address --}}
 <table class="table table-striped">

    <tr>
        <th>
           Name
        </th>
        <th>
            E-mail
        </th>
        <th>
            Gender
        </th>
        <th>
            Address
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

    @foreach ($list1 as $item)


    <tr>
        <td>
           {{ $item->name  }}
        </td>
        <td>
            {{  $item->email }}
        </td>
        <td>
            {{ $item->gender }}
        </td>
        <td>
            {{  $item->address }}
        </td>
        <td>
            {{  $item->created_at }}
        </td>
        <td>
            {{  $item->updated_at }}
        </td>
        <td>
            <a class="btn btn-sm btn-primary" href="/profile/{{ $item->id }}/show">Edit</a>
            <a class="btn btn-sm btn-danger" onclick="return confirm('Do you want to perform this action?')" href="profile/{{  $item->id }}/remove">Delete</a>
        </td>
    </tr>


    @endforeach


 </table>


@endsection
