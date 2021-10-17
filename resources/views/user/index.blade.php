@extends('layouts.app')
@section('content')

<div class="py-12">
    <h4>User Page</h4>
    <a href="{{ route('add.user') }}"> <button class="btn btn-info">Add User</button>
        <br><br>
 <div class="container">
 <div class="row">

     <div class="col-md-12">
         <div class="card">

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
             <div class= "card-header">All User Data</div>


         <table class="table">
         <thead>
          <tr>
            <th scope="col" width="5%">Serial No.</th>
            <th scope="col" width="15%">Name</th>
            <th scope="col" width="15%">Email</th>
            <th scope="col" width="15%">Action</th>

          </tr>
        </thead>
        <tbody>
             @php($i = 1)
            @foreach($users as $user)
            <tr>
            <th scope="row">{{ $i++ }}</th>{{-- for pagination counting --}}
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>


                <td>
                    <a href="{{ url('user/edit/'.$user->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ url('user/delete/'.$user->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                </td>

          </tr>
          @endforeach

        </tbody>
      </table>

    </div>
</div>


 </div>
</div>
@endsection
