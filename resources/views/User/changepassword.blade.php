@extends('admin_layouts.maindashboard')
@section('content')
<div class="content-wrapper text-sm" style="min-height: 1345.6px;">
    <div class="row mt-10 pt-5">
        <div class="col-md-4">
        </div>

    <div class="col-md-4 ">
        @if($errors->any())
        {!! implode('', $errors->all('<div style="color:red">:message</div>')) !!}
        @endif
        @if(Session::get('error') && Session::get('error') != null)
        <div style="color:red">{{ Session::get('error') }}</div>
        @php
        Session::put('error', null)
        @endphp
        @endif
        @if(Session::get('success') && Session::get('success') != null)
        <div style="color:green">{{ Session::get('success') }}</div>
        @php
        Session::put('success', null)
        @endphp
        @endif

        <form class="form" action="{{ route('postChangePassword') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="current_password" class="form-label">Current Password</label>
                <input type="password" class="form-control border" id="current_password" name="current_password">
            </div>
            <div class="mb-3">
                <label for="new_password" class="form-label">New Password</label>
                <input type="password" class="form-control border" id="new_password" name="new_password">
            </div>
            <div class="mb-3">
                <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                <input type="password" class="form-control border" id="new_password_confirmation" name="new_password_confirmation">
            </div>
            <button type="submit" class="btn btn-s text-center" style="background:rgb(9, 136, 51);color:white;">Update Password</button>
        </form>
    </div>
    <div class="col-md-4">

    </div>
</div>

</div>
@endsection
