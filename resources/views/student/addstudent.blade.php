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
        display: none;
    }
    #am{
       display: none;
    }
    #ye_nesaha{
        display: none;
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
              <li class="breadcrumb-item active">Add Students</li>
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
                    <a class="nav-link active" href="javascript:void();"><i class="fa fa-plus mr-2"></i>Add Students</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link" href="{{ route('students.index') }}"><i class="fa fa-list mr-2"></i>All Studentss</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="lanaguage">Language</label><br>
                          <input selected type="radio" id="Oromo" name="Language" value="Oromo">
                          <label for="Oromo">Oromo</label> &nbsp;
                          <input type="radio" id="amaharic" name="Language" value="Amaharic">
                          <label for="Amaharic">Amaharic</label>
                      @error('lanaguage')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                <div id="or">
                        <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row ">
                            <div class="col">

                            </div>
                            <div class="col">
                                <h1 class="text-center"  style="font-size: 20px; background:rgb(12, 85, 15); color:white; border-radius:1rem;">Galmee Baratootaa Haaraa</h1>
                            </div>

                            <div class="col"></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="bach">Bach:</label><br>
                                    <select name="bach" id="bach">
                                      <option value="Amahric">Amarenya</option>
                                      <option value="Oromic">Orommiffaa</option>
                                    </select>
                                    <br><br>
                                    @error('bach')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="image">Suraa</label>
                                <input type="file"
                                class="form-control border" name="image"
                                placeholder="image">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="first_name">Maqaa Duraa</label>
                                <input type="text" class="form-control form-control-Students border" name="first_name" required>
                                @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="middle_name"> Maqaa Abbaa</label>
                                <input type="text" class="form-control form-control-Students border" name="middle_name" required>
                                @error('middle_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="last_name"> Maqaa Akakayuu</label>
                                <input type="text" class="form-control form-control-Students border" name="last_name" required>
                                @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="salaa"> Salaa</label><br>
                                      <input type="radio" id="Dhiraa" name="tsota" value="Dhiraa">
                                      <label for="Dhiraa">Dhiraa</label> &nbsp;
                                      <input type="radio" id="Dubaraa" name="tsota" value="Dubaraa">
                                      <label for="Diploma">Dubaraa</label>
                                @error('yetemirt_derega')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                <label for="kirstina"><span style="color:red">*</span> Maqaa Kirstina</label>
                                <input type="text" class="form-control form-control-Students border" name="kirstina">
                                @error('kirstina')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                <label for="birth_place"> Iddoo Dhaloota</label>
                                <input type="text" class="form-control form-control-Students border" name="birth_place">
                                @error('birth_place')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="city"> Magaala itti dhalatee</label>
                                <input type="text" class="form-control form-control-Students border" name="city">
                                @error('city')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="wereda">Aanaa</label>
                                <input type="text" class="form-control form-control-Students border" name="wereda">
                                @error('wereda')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="mother_language">Afaan Dhaloota</label>
                                <input type="text" class="form-control form-control-Students border" name="mother_language">
                                @error('mother_language')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="other_language"> Afaan Dandessu Kan Birra</label>
                                <input type="text" class="form-control form-control-Students border" name="other_language">
                                @error('other_language')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="univeristy"> Univertisty Itti Barattuu</label>
                                <input type="text" class="form-control form-control-Students border" name="univeristy" required>
                                @error('univeristy')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="department"> Dipartimentii </label>
                                <input type="text" class="form-control form-control-Students border" name="department" required>
                                @error('department')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="program">Programii</label><br>
                                      <input type="radio" id="ken" name="program" value="Guyyaa">
                                      <label for="ken">Guyyaa</label> &nbsp;
                                      <input type="radio" id="mata" name="program" value="Galgalaa">
                                      <label for="mata">Galgalaa</label>
                                      <input type="radio" id="weekend" name="program" value="Torrbee">
                                      <label for="weekend">Torrbee</label><br>
                                @error('program')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="yetemirt_derega"> Sadarkaa Barnoota</label><br>
                                      <input type="radio" id="Degree" name="yetemirt_derega" value="Degree">
                                      <label for="Degree">Degree</label> &nbsp;
                                      <input type="radio" id="Diploma" name="yetemirt_derega" value="Diploma">
                                      <label for="Diploma">Diploma</label>
                                @error('yetemirt_derega')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tesatfo_alchu"> Kana Dura Mana Sanbaatarra Hirmaacha Turte </label><br>
                                      <input type="radio" id="awo" name="tesatfo_alchu" value="eyyee">
                                      <label for="awo">Eyyee</label> &nbsp;
                                      <input type="radio" id="yeleginim" name="tesatfo_alchu" value="Lakki">
                                      <label for="yeleginim">Lakki</label><br>
                                @error('tesatfo_alchu')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 " id="betignaw_wist">
                                <div class="form-group">
                                <label for="betignaw_wist_tesatefachu"> Kutaa  Maalii Keessatti Hirmaachaa Turtee </label>
                                <input type="text" class="form-control form-control-Students border" name="betignaw_wist_tesatefachu">
                                @error('betignaw_wist_tesatefachu')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6" id="yetemark_course">
                                <div class="form-group">
                                <label for="yetemark_course"> Korsiwan Baratee Ibsi</label>
                                <input type="text" class="form-control form-control-Students border" name="yetemark_course">
                                @error('yetemark_course')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6" id="ye_temarkibet_betekristan_sim">
                                <div class="form-group">
                                <label for="ye_temarkibet_betekristan_sim"> Mana Kiristinaa Barnoota Sanbataa Irratti  Baratee</label>
                                <input type="text" class="form-control form-control-Students border" name="ye_temarkibet_betekristan_sim">
                                @error('ye_temarkibet_betekristan_sim')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="phone"> Lakka Bilbilaa</label>
                                <input type="text" class="form-control form-control-Students border" name="phone" required>
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="facebook"> Feesbuuki</label>
                                <input type="text" class="form-control form-control-Students border" name="facebook">
                                @error('facebook')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="email"> imeelii</label>
                                <input type="email" class="form-control form-control-Students border" name="email">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="ye_chiger_gize_tetari"> yeroo rakko kan wamamuu</label>
                                <input type="text" class="form-control form-control-Students border" name="ye_chiger_gize_tetari">
                                @error('ye_chiger_gize_tetari')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="ye_chiger_gize_phone"> yeroo rakko kan wamamuu bilbilaa isaa</label>
                                <input type="text" class="form-control form-control-Students border" name="ye_chiger_gize_phone">
                                @error('ye_chiger_gize_phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="ye_nesaha_abat_ale">Abbaa Gaabbii  Qabdaa</label><br>
                                      <input type="radio" id="eyyee" name="ye_nesaha_abat_ale" value="eyyee">
                                      <label for="">Eyyee</label> &nbsp;
                                      <input type="radio" id="lakki" name="ye_nesaha_abat_ale" value="Lakki">
                                      <label for="">Lakki</label><br>
                                @error('ye_nesaha_abat_ale')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6" id="ye_nesaha">
                                <div class="form-group">
                                <label for="ye_nesaha_abat_sim"> Abbaa Gaabbii Maqaa isaani </label>
                                <select name="ye_nesaha_abat_sim" id="bach">
                                    <option value="" selected>Select (Filadhaa) </option>
                                    @foreach ($nesaha as $n )
                                     <option value="{{ $n->name }}">{{ $n->name }}</option>
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
                                <label for="ye_sefer_new_ahu_yemitnorew"> Gandii Attii Jiraatu</label>
                                <input type="text" class="form-control form-control-Students border" name="ye_sefer_new_ahu_yemitnorew">
                                @error('ye_sefer_new_ahu_yemitnorew')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="kihenet_alot"> Lubuummaa yoo qabatan</label>
                                <input type="text" class="form-control form-control-Students border" name="kihenet_alot">
                                @error('kihenet_alot')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="sintegna_amat"> Waggaa Meqaaffa Barataa </label>
                                <input type="text" class="form-control form-control-Students border" name="sintegna_amat">
                                @error('sintegna_amat')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-primary">Add Student</button>
                            </div>
                        </form>
                </div>
                <div id="am">
                    <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row ">
                        <div class="col">

                        </div>
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
                                  <option value="Amahric">Amahric</option>
                                  <option value="Oromic">Oromic</option>
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
                            </div>
                            </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label for="first_name"> First_name</label>
                            <input type="text" class="form-control form-control-Students border" name="first_name" required>
                            @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label for="middle_name"> middle_name</label>
                            <input type="text" class="form-control form-control-Students border" name="middle_name" required>
                            @error('middle_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                            <label for="last_name"> last_name</label>
                            <input type="text" class="form-control form-control-Students border" name="last_name" required>
                            @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="salaa"> Gender</label><br>
                                  <input type="radio" id="male" name="tsota" value="Male">
                                  <label for="Dhiraa">Male</label> &nbsp;
                                  <input type="radio" id="Dubaraa" name="tsota" value="Female">
                                  <label for="Diploma">Female</label>
                            @error('yetemirt_derega')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                            <label for="kirstina"><span style="color:red">*</span> kirstina</label>
                            <input type="text" class="form-control form-control-Students border" name="kirstina">
                            @error('kirstina')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                            <label for="birth_place"> የመጡበት ክልል</label>
                            <input type="text" class="form-control form-control-Students border" name="birth_place">
                            @error('birth_place')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="city"> ከተማ</label>
                            <input type="text" class="form-control form-control-Students border" name="city">
                            @error('city')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="wereda"> wereda</label>
                            <input type="text" class="form-control form-control-Students border" name="wereda">
                            @error('wereda')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="mother_language"> የአፍ መፍቻ ቋንቋ</label>
                            <input type="text" class="form-control form-control-Students border" name="mother_language">
                            @error('mother_language')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="other_language"> ተጨማሪ የሚችሉዋቸው ቋንቋ </label>
                            <input type="text" class="form-control form-control-Students border" name="other_language">
                            @error('other_language')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="univeristy"> univeristy</label>
                            <input type="text" class="form-control form-control-Students border" name="univeristy" required>
                            @error('univeristy')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="department"> department</label>
                            <input type="text" class="form-control form-control-Students border" name="department" required>
                            @error('department')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="program"> የሚማሩበት ጊዜ </label><br>
                                  <input type="radio" id="ken" name="program" value="መደበኛ">
                                  <label for="ken">መደበኛ</label> &nbsp;
                                  <input type="radio" id="mata" name="program" value="የማታ">
                                  <label for="mata">የማታ</label>
                                  <input type="radio" id="weekend" name="program" value="ዊኬንድ">
                                  <label for="weekend">ዊኬንድ </label><br>
                            @error('program')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="yetemirt_derega"> yetemirt_derega</label><br>
                                  <input type="radio" id="Degree" name="yetemirt_derega" value="Degree">
                                  <label for="Degree">Degree</label> &nbsp;
                                  <input type="radio" id="Diploma" name="yetemirt_derega" value="Diploma">
                                  <label for="Diploma">Diploma</label>
                            @error('yetemirt_derega')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tesatfo_alchu"> tesatfo_alchu</label><br>
                                  <input type="radio" id="awo" name="tesatfo_alchu" value="awo">
                                  <label for="awo">Awo</label> &nbsp;
                                  <input type="radio" id="yeleginim" name="tesatfo_alchu" value="yeleginim">
                                  <label for="yeleginim">Yelegnim</label><br>
                            @error('tesatfo_alchu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 " id="betignaw_wist">
                            <div class="form-group">
                            <label for="betignaw_wist_tesatefachu"> betignaw_wist_tesatefachu</label>
                            <input type="text" class="form-control form-control-Students border" name="betignaw_wist_tesatefachu">
                            @error('betignaw_wist_tesatefachu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6" id="yetemark_course">
                            <div class="form-group">
                            <label for="yetemark_course"> yetemark_course mindinew</label>
                            <input type="text" class="form-control form-control-Students border" name="yetemark_course">
                            @error('yetemark_course')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6" id="ye_temarkibet_betekristan_sim">
                            <div class="form-group">
                            <label for="ye_temarkibet_betekristan_sim"> ye_temarkibet_betekristan_sim</label>
                            <input type="text" class="form-control form-control-Students border" name="ye_temarkibet_betekristan_sim">
                            @error('ye_temarkibet_betekristan_sim')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="phone"> phone</label>
                            <input type="text" class="form-control form-control-Students border" name="phone" required>
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="facebook"> facebook</label>
                            <input type="text" class="form-control form-control-Students border" name="facebook">
                            @error('facebook')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="email"> email</label>
                            <input type="email" class="form-control form-control-Students border" name="email">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="ye_chiger_gize_tetari"> ye_chiger_gize_tetari</label>
                            <input type="text" class="form-control form-control-Students border" name="ye_chiger_gize_tetari">
                            @error('ye_chiger_gize_tetari')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="ye_chiger_gize_phone"> ye_chiger_gize_phone</label>
                            <input type="text" class="form-control form-control-Students border" name="ye_chiger_gize_phone">
                            @error('ye_chiger_gize_phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="ye_nesaha_abat_ale">የንስሀ አባት አለህ</label><br>
                                  <input type="radio" id="awo_alegn" name="ye_nesaha_abat_ale" value="awo">
                                  <label for="">awo</label> &nbsp;
                                  <input type="radio" id="ayi_yelegnim" name="ye_nesaha_abat_ale" value="yelegnim">
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
                                <option value="" selected>Select (Miretu) </option>
                                @foreach ($nesaha as $n )
                                 <option value="{{ $n->name }}">{{ $n->name }}</option>
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
                            <input type="text" class="form-control form-control-Students border" name="ye_sefer_new_ahu_yemitnorew">
                            @error('ye_sefer_new_ahu_yemitnorew')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="kihenet_alot"> ክህነት ካለዎት ምልክት ያድርጉ</label>
                            <input type="text" class="form-control form-control-Students border" name="kihenet_alot">
                            @error('kihenet_alot')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="sintegna_amat"> sintegna_amat iyetemark new </label>
                            <input type="text" class="form-control form-control-Students border" name="sintegna_amat">
                            @error('sintegna_amat')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn bg-primary">Add Student</button>
                        </div>
                    </form>
            </div>
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
  <script>
document.addEventListener("DOMContentLoaded", function() {
  var awoRadioButton = document.getElementById("awo");
  var eyyeeRadioButton = document.getElementById("eyyee");
  var lakkiRadioButton = document.getElementById("lakki");

  var awo_alegnRadioButton = document.getElementById("awo_alegn");
  var ayi_yelegnimRadioButton = document.getElementById("ayi_yelegnim");



  var orRadioButton = document.getElementById("Oromo");
  var amButton = document.getElementById("amaharic");

  var yeleginimRadioButton = document.getElementById("yeleginim");
  var oromoRadioButton = document.getElementById("or");
  var amahricRadioButton = document.getElementById("am");

  amButton.addEventListener("click", function(){
    if(amButton.checked){
        oromoRadioButton.style.display = "none";
        amahricRadioButton.style.display = "block";

    }
  });
  orRadioButton.addEventListener("click", function(){
    if(orRadioButton.checked){
        amahricRadioButton.style.display = "none";
        oromoRadioButton.style.display = "block";

    }
  });

  var yetemark_courseRadioButton = document.getElementById("yetemark_course");
  var ye_temarkibet_betekristan_simRadioButton = document.getElementById("ye_temarkibet_betekristan_sim");
  var textFieldDiv = document.getElementById("betignaw_wist");

  var ye_nesaha=document.getElementById("ye_nesaha");
  var ye_nesaha_abt=document.getElementById("ye_nesaha_abt");





  yeleginimRadioButton.addEventListener("click", function(){
    if(yeleginimRadioButton.checked){
        textFieldDiv.style.display = "none";
        yetemark_courseRadioButton.style.display = "none";
        ye_temarkibet_betekristan_simRadioButton.style.display = "none";
    }
  });
  awoRadioButton.addEventListener("click", function() {
    if (awoRadioButton.checked) {
      textFieldDiv.style.display = "block";
      yetemark_courseRadioButton.style.display = "block";
      ye_temarkibet_betekristan_simRadioButton.style.display = "block";

    } else  {
      textFieldDiv.style.display = "none";
    }
  });

  eyyeeRadioButton.addEventListener("click", function() {
    if (eyyeeRadioButton.checked) {
        ye_nesaha.style.display = "block";
    } else  {
      textFieldDiv.style.display = "none";
    }
  });


  lakkiRadioButton.addEventListener("click", function() {
    if (lakkiRadioButton.checked) {
        ye_nesaha.style.display = "none";
    } else  {
      textFieldDiv.style.display = "block";
    }
  });


  awo_alegnRadioButton.addEventListener("click", function() {
    if (awo_alegnRadioButton.checked) {
        ye_nesaha_abt.style.display = "block";
    } else  {
        ye_nesaha_abt.style.display = "none";
    }
  });


  ayi_yelegnimRadioButton.addEventListener("click", function() {
    if (ayi_yelegnimRadioButton.checked) {
        ye_nesaha_abt.style.display = "none";
    } else  {
        ye_nesaha_abt.style.display = "block";
    }
  });
});


</script>
@endsection
