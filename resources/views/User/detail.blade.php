@extends('admin_layouts.maindashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Profile</div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('profile.update') }}"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name"  class="form-control border" value="{{ $user->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control border" value="{{ $user->email }}" required>
                        </div>
                            <!-- textarea -->
                            <div class="form-group">
                              <label><span style="color:red"></span>Image</label>
                              <input type="file" name="image" class="form-control border">
                            </div>
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="pt-3">
                                <img src="{{ asset('/storage/banner/'.$user['image']) }}" style="width:80px; height:40px" class=" rounded" alt="">
                            </div>
                              <br><br>
                        <!-- Add more fields as needed -->

                        <button type="submit" class="btn btn-primary" style="background-color:rgb(14, 77, 19); border:none;">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
