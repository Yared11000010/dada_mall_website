@extends('admin_layouts.maindashboard')
@section('content')
<div class="content-wrapper text-sm" style="min-height: 1345.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-3 mt-3 ">
          <div class="col-sm-6">
            <h1>Shop</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Shop Managements</a></li>
              <li class="breadcrumb-item active">Edit Shop</li>
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
          <div class="col-md-6">

            <!-- general form elements disabled -->
            <div class="card   bg-white">
              <div class="card-header">
                <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active"><i class="fa fa-plus mr-2"></i>Edit Shop</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link" href="{{ route('shops.index') }}"><i class="fa fa-list mr-2"></i>All Shops</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{ route('shops.update',$shops->id) }}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="name">shop Name</label>
                        <input type="text"
                        class="form-control form-control-shop border"
                        name="name"
                        value="{{ $shops->name }}"
                        placeholder="shop name">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="room_number">Shop Room Number</label>
                      <input type="number"
                      class="form-control form-control-shop border"
                      name="room_number"
                      value="{{ $shops->room_number }}"
                      >
                      @error('room_number')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="floor">Shop floor</label>
                      <input type="text"
                      class="form-control form-control-shop border"
                      name="floor"
                      value="{{ $shops->floor }}"

                      placeholder="shop floor">
                      @error('floor')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="phone">Shop phone number</label>
                      <input type="number"
                      class="form-control form-control-shop border"
                      name="phone"
                      value="{{ $shops->phone}}"
                      placeholder="shop phone">
                      @error('phone')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                  </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label>Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10">
                            {{ $shops->description }}
                        </textarea>
                    </div>
                      @error('description')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Image</label>
                          <input type="file" name="image[]" multiple class="form-control border">
                        </div>
                        @error('image')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="pt-3">
                            <div class="row">
                              <img src="{{ asset('/storage/shops/'.$shops['image']) }}" style="width:80px; height:40px" class=" rounded" alt="">
                            </div>
                         </div>
                    </div>
                  <div class="form-group footer">
                    <button type="submit" class="btn bg-primary">Update Shop</button>
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
