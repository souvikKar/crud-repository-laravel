@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <a href="{{ route('user.list') }}" class="btn btn-success">Back</a>
    <div class="card card-default">


        <div class="card-header card-header-border-bottom">
            <h2>Edit User Page</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('update/user/'.$users->id)  }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="exampleFormControlInput1">User Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1"  placeholder="Name" value="{{ $users->name  }}">

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">User Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" value="{{ $users->email  }}">

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">User Password</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                </div>


                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>



</div>

@endsection
