@extends('admin_layouts.maindashboard')
@section('content')
<style>
    #betignaw_wist{
        display: none;
    }
    #ye_temarkibet_betekristan_sim{
        display: none;
    }
    #yetemark_course{
        display:
        none;
    }
    #ye_nesaha_abt{
        display: none;
    }

</style>
<div class="content-wrapper text-sm" style="min-height: 1345.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Students Managements</a></li>
              <li class="breadcrumb-item active">Edit Students</li>
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
          <div class="col-md-8">
            <!-- general form elements disabled -->
            <div class="card   bg-white">
              <div class="card-header">
                <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:void();"><i class="fa fa-plus mr-2"></i>Edit Students</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link" href="{{ route('students.index') }}"><i class="fa fa-list mr-2"></i>All Studentss</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{ route('students.update',$student->id) }}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row ">
                    <div class="col"></div>
                    <div class="col">
                        <h1 class="text-center"  style="font-size: 20px; background:rgb(12, 85, 15); color:white; border-radius:1rem;">ወደ ገቢ ጉባኤያት የሚገቡ አዳዲስ ተማሪዎች መረጃ መያዣ ቅጽ</h1>
                    </div>

                    <div class="col"></div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="bach">Bach:</label><br>
                            <select name="bach" id="bach">
                              <option @if($student->bach=="Amahric") selected @endif value="Amahric">Amarenya</option>
                              <option @if($student->bach=="Oromic") selected @endif  value="Oromic">Orommiffaa</option>
                            </select>
                            <br><br>
                            @error('bach')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="image">Image</label>
                          <input type="file"
                          class="form-control border" name="image"
                          placeholder="image">
                          @error('image')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="pt-3">
                            <div class="row">
                              <img src="{{ asset('/storage/students/'.$student['image']) }}" style="width:80px; height:40px" class=" rounded" alt="">
                            </div>
                         </div>
                        </div>
                        </div>
                      <div class="col-sm-6">
                      <div class="form-group">
                        <label for="first_name"> First_name</label>
                        <input type="text" value="{{ $student->first_name }}" class="form-control form-control-Students border" name="first_name">
                        @error('first_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="middle_name"> middle_name</label>
                        <input type="text" value="{{ $student->middle_name }}" class="form-control form-control-Students border" name="middle_name">
                        @error('middle_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="last_name"> last_name</label>
                        <input type="text" value="{{ $student->last_name }}" class="form-control form-control-Students border" name="last_name">
                        @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="salaa"> Gender</label><br>
                              <input @if($student->gender=="Dhiraa") checked @endif type="radio" id="Dhiraa" name="tsota" value="Dhiraa">
                              <label for="Dhiraa">Dhiraa</label> &nbsp;
                              <input  @if($student->gender=="Dubaraa") checked @endif type="radio" id="Dubaraa" name="tsota" value="Dubaraa">
                              <label for="Diploma">Dubaraa</label>
                        @error('yetemirt_derega')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label for="kirstina"><span style="color:red">*</span> kirstina</label>
                          <input type="text" value="{{ $student->kirstina }}" class="form-control form-control-Students border" name="kirstina">
                          @error('kirstina')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                          <label for="birth_place"> birth_place</label>
                          <input type="text" value="{{ $student->birth_place }}" class="form-control form-control-Students border" name="birth_place">
                          @error('birth_place')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="city"> birth city</label>
                          <input type="text" value="{{ $student->city }}" class="form-control form-control-Students border" name="city">
                          @error('city')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="wereda"> wereda</label>
                          <input type="text" value="{{ $student->wereda }}" class="form-control form-control-Students border" name="wereda">
                          @error('wereda')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="mother_language"> mother_language</label>
                          <input type="text" value="{{ $student->mother_language }}"class="form-control form-control-Students border" name="mother_language">
                          @error('mother_language')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="other_language"> other_language</label>
                          <input type="text" value="{{ $student->other_language }}" class="form-control form-control-Students border" name="other_language">
                          @error('other_language')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="univeristy"> univeristy</label>
                          <input type="text" value="{{ $student->univeristy }}" class="form-control form-control-Students border" name="univeristy">
                          @error('univeristy')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="department"> department</label>
                          <input type="text" value="{{ $student->department }}" class="form-control form-control-Students border" name="department">
                          @error('department')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="program"> program</label><br>
                              <input @if($student->program=="ken") checked @endif type="radio" id="ken" name="program" value="ken">
                              <label for="ken">Ken</label> &nbsp;
                              <input @if($student->program=="mata") checked @endif type="radio" id="mata" name="program" value="mata">
                              <label for="mata">Mata</label>
                              <input @if($student->program=="weekend") checked @endif type="radio" id="weekend" name="program" value="weekend">
                              <label for="weekend">weekend</label><br>
                          @error('program')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="yetemirt_derega"> yetemirt_derega</label><br>
                              <input  @if($student->yetemirt_derega=="Degree") checked @endif   type="radio" id="Degree" name="yetemirt_derega" value="Degree">
                              <label for="Degree">Degree</label> &nbsp;
                              <input @if($student->yetemirt_derega=="Diploma") checked @endif  type="radio" id="Diploma" name="yetemirt_derega" value="Diploma">
                              <label for="Diploma">Diploma</label>
                          @error('yetemirt_derega')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="tesatfo_alchu"> tesatfo_alchu</label><br>
                              <input @if($student->tesatfo_alchu=="awo") checked @endif type="radio" id="awo" name="tesatfo_alchu" value="awo">
                              <label for="awo">Awo</label> &nbsp;
                              <input @if($student->tesatfo_alchu=="yeleginim")checked @endif   type="radio" id="yeleginim" name="tesatfo_alchu" value="yeleginim">
                              <label for="yeleginim">Yelegnim</label><br>
                          @error('tesatfo_alchu')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>

                      <div class="col-sm-6 " id="betignaw_wist">
                        <div class="form-group">
                          <label for="betignaw_wist_tesatefachu"> betignaw_wist_tesatefachu</label>
                          <input type="text" value="{{ $student->betignaw_wist_tesatefachu }}" class="form-control form-control-Students border" name="betignaw_wist_tesatefachu">
                          @error('betignaw_wist_tesatefachu')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6" id="yetemark_course">
                        <div class="form-group">
                          <label for="yetemark_course"> yetemark_course mindinew</label>
                          <input type="text" value="{{ $student->yetemark_course }}" class="form-control form-control-Students border" name="yetemark_course">
                          @error('yetemark_course')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6" id="ye_temarkibet_betekristan_sim">
                        <div class="form-group">
                          <label for="ye_temarkibet_betekristan_sim"> ye_temarkibet_betekristan_sim</label>
                          <input type="text"  value="{{ $student->ye_temarkibet_betekristan_sim }}" class="form-control form-control-Students border" name="ye_temarkibet_betekristan_sim">
                          @error('ye_temarkibet_betekristan_sim')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="phone"> phone</label>
                          <input type="text" value="{{ $student->phone }}" class="form-control form-control-Students border" name="phone">
                          @error('phone')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="facebook"> facebook</label>
                          <input type="text" value="{{ $student->facebook }}" class="form-control form-control-Students border" name="facebook">
                          @error('facebook')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="email"> email</label>
                          <input type="email" value="{{ $student->email }}" class="form-control form-control-Students border" name="email">
                          @error('email')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="ye_chiger_gize_tetari"> ye_chiger_gize_tetari</label>
                          <input type="text" value="{{ $student->ye_chiger_gize_tetari }}" class="form-control form-control-Students border" name="ye_chiger_gize_tetari">
                          @error('ye_chiger_gize_tetari')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="ye_chiger_gize_phone"> ye_chiger_gize_phone</label>
                          <input type="text"  value="{{ $student->ye_chiger_gize_phone }}" class="form-control form-control-Students border" name="ye_chiger_gize_phone">
                          @error('ye_chiger_gize_phone')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="ye_nesaha_abat_ale">የንስሀ አባት አለህ</label><br>
                              <input  @if($student->ye_nesaha_abat_ale=="awo") checked @endif  type="radio" id="awo_alegnn" name="ye_nesaha_abat_ale" value="awo">
                              <label for="">awo</label> &nbsp;
                              <input @if($student->ye_nesaha_abat_ale=="yelegnim") checked @endif type="radio" id="ayi_yelegnim" name="ye_nesaha_abat_ale" value="yelegnim">
                              <label for="">yelegnim</label><br>
                        @error('ye_nesaha_abat_ale')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-sm-6" id="ye_nesaha_abt">
                        <div class="form-group">
                        <label for="ye_nesaha_abat_sim">  የንስሀ አባት አለህ ስም</label><br>
                        <select name="ye_nesaha_abat_sim" id="bach">
                            {{-- <option value="">Select (Miretu) </option> --}}
                            @foreach ($nesaha as $n )
                             <option @if($student->ye_nesaha_abat_sim=="{{ $n->name }}") checked @endif value="{{ $n->name }}">{{ $n->name }}</option>
                            @endforeach
                        </select>
                        <br><br>
                        @error('ye_nesaha_abat_sim')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="ye_sefer_new_ahu_yemitnorew"> ye_sefer_new_ahu_yemitnorew</label>
                          <input type="text" value="{{ $student->ye_sefer_new_ahu_yemitnorew }}"  class="form-control form-control-Students border" name="ye_sefer_new_ahu_yemitnorew">
                          @error('ye_sefer_new_ahu_yemitnorew')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="kihenet_alot"> kihenet_alot</label>
                          <input type="text" value="{{ $student->kihenet_alot }}"  class="form-control form-control-Students border" name="kihenet_alot">
                          @error('kihenet_alot')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="sintegna_amat"> sintegna_amat iyetemark new </label>
                          <input type="text"  value="{{ $student->sintegna_amat }}"  class="form-control form-control-Students border" name="sintegna_amat">
                          @error('sintegna_amat')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn bg-primary">Update Student</button>
                      </div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // When the page loads, check the initial state of the radio button
    if ($('#awo_alegnn').is(':checked')) {
        $('#ye_nesaha_abt').show();
    } else {
        $('#ye_nesaha_abt').hide();
    }

    // Add a click event listener to the radio button
    $('#awo_alegnn').on('click', function() {
        if ($(this).is(':checked')) {
            $('#ye_nesaha_abt').show();
        } else {
            $('#ye_nesaha_abt').hide();
        }
    });
    $('#ayi_yelegnim').on('click', function() {
        if ($(this).is(':checked')) {
            $('#ye_nesaha_abt').hide();
        } else {
            $('#ye_nesaha_abt').show();
        }
    });
    $('#awo').on('click', function() {
        if ($(this).is(':checked')) {
            $('#betignaw_wist').show();
            $('#yetemark_course').show();
            $('#ye_temarkibet_betekristan_sim').show();
        } else {
            $('#betignaw_wist').hide();
            $('#yetemark_course').hide();
            $('#ye_temarkibet_betekristan_sim').hide();
        }
    });
    $('#yeleginim').on('click', function() {
        if ($(this).is(':checked')) {
            $('#betignaw_wist').hide();
            $('#yetemark_course').hide();
            $('#ye_temarkibet_betekristan_sim').hide();
        } else {
            $('#betignaw_wist').show();
            $('#yetemark_course').show();
            $('#ye_temarkibet_betekristan_sim').show();
        }
    });
});
</script>
@endsection
