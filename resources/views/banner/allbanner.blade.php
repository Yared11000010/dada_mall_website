@extends('admin_layouts.maindashboard')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper text-sm">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>banners</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">banner Managements</a></li>
              <li class="breadcrumb-item active">All banners</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" ><i class="fa fa-list mr-2"></i>All banner</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link" href="{{ route('banners.create') }}"><i class="fa fa-plus mr-2"></i>Add banners</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Num</th>
                    <th>Image</th>
                    <th>title</th>
                    <th>description</th>
                    <th>Created At</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($banner as $k => $banners )
                   <tr>
                    <td>{{ $banners->id }}</td>
                    <td><img src="{{ asset('/storage/banner/'.$banners['image']) }}" style="width: 40px; height:40px; box-shadow:1px 1px 2px 1px gray" alt=""></td>
                    <td>{{ $banners->title }}</td>
                    <td>{{ $banners->description }}</td>
                    <td>{{ $banners->created_at }} </td>
                    <td>
                      <a href="{{ url('banners/'.$banners->id.'/edit') }}" class="btn btn-primary btn-sm text-sm"><i class="nav-icon fas fa-edit"></i></a>
                      <div class="btn btn-white">
                        <form action="{{ url('banners/'.$banners->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <input type="submit" value="Delete"  onclick="return confirm('Are you sure,you want to delete this banner ?? ') "  class=" btn" style="background: rgb(119, 40, 40);color:white;">
                        </form>
                      </div>
                    </td>
                  </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('style')
 <!-- DataTables -->
 <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endsection
@section('script')
<!-- DataTables -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>

<script src="{{ asset('backend/dist/js/bootbox.min.js') }}"></script>
<!-- page script -->

<script>
  $(document).on("click", "#delete", function(e){
  e.preventDefault();
  var link = $(this).attr("href");
  bootbox.confirm("Do you really want to delete this element ?", function(confirmed){
    if (confirmed){
        window.location.href = link;
      };
    });
  });
</script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
