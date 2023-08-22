@extends('admin_layouts.maindashboard')
@section('content')
<div class="content-wrapper text-sm" style="min-height: 1345.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-3 mt-3 ">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User Managements</a></li>
              <li class="breadcrumb-item active">Update User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->

          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-10">

            <!-- general form elements disabled -->
            <div class="card   bg-white">
              <div class="card-header">
                <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" href=""><i class="fa fa-plus mr-2"></i>Update User</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link" href="{{ route('users.index') }}"><i class="fa fa-list mr-2"></i>All Users</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{ route('users.update',$user->id) }}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1"><span style="color:red">*</span> User Name</label>
                        <input type="text"
                        class="form-control form-control-user border"
                        name="name"
                        value="{{ $user->name}}"
                        placeholder="User Name">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>

                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="roles"><span style="color:red">*</span>Roles</label>
                        <select class="custom-select @error('role') is-invalid
                        @enderror"
                         name="role">
                          <option  @if(!empty($user->role)&&$user->role=="Admin")
                          selected="" @endif value="Admin">Admin</option>
                          <option  @if(!empty($user->role)&&$user->role=="Super Admin")
                            selected="" @endif value="Super Admin">Super Admin</option>
                          <option  @if(!empty($user->role)&&$user->role=="Customer")
                            selected="" @endif value="Customer">Customer</option>
                          <option  @if(!empty($user->role)&&$user->role=="Client")
                            selected="" @endif value="Client">Client</option>
                        </select>
                        @error('role')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label><span style="color:red">*</span>Email</label>
                        <input type="email" name="email" class="form-control border"  value="{{ $user->email}}"
                        placeholder="Enter ...">
                      </div>
                      @error('email')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                          <label><span style="color:red"></span>Image</label>
                          <input type="file" name="image" class="form-control border">
                        </div>
                        @error('image')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="pt-3">
                            <div class="row">
                              <img src="{{ asset('/storage/banner/'.$user['image']) }}" style="width:80px; height:40px" class=" rounded" alt="">
                            </div>
                         </div>
                    </div>
                  </div>

                  <div class="form-group footer">
                    <button type="submit" class="btn bg-primary">Update User</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>

          </div>

          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
