@extends('shared/base')

@section('judul','.::Login::.')

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="/">Bangtan World</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="setting">Setting</a>
            </li>
        </ul>
    </div>
</nav>

@section('isi_konten')
<div class="row">
    <div class='col-md-4 hidden-xs'>
    
    </div>
    <div class='col-md-4 col-xs-12'>
        <h3>Masuk</h3>
   
            @if ($message = Session::get('error'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
    @endif
     
   
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
        </div>
      @endif
        <?php 
            $checkLogin='/authentication';
            if (Request::has('prev')) {
                $prev=Request::get('prev');
                $checkLogin=$checkLogin.'?prev='.$prev; 
            }
        ?>
        <form action='{{$checkLogin}}' method='POST'>
        @csrf
            <label for="Username">Username</label>
            <input class='form-control' type="text" name="nama_user" id="nama_user">
            <label for="Username">Password</label>
            <input class='form-control' type="password" name="kata_sandi" id="kata_sandi">
            <br>
            <button type='submit' class='btn btn-primary'>
                <i class='fa fa-sign-in'></i> Masuk
            </button>
            <button type='reset' class='btn btn-secondary'>
                <i class='fa fa-trash'></i> Batal
            </button>
            <a href='/register'>Belum punya akun?</a>
        </form>
    </div>
    <div class='col-md-4 hidden-xs'>
    
    </div>
</div>
<div class='row'>
    &nbsp;
</div>
@endsection

@section('additional_script')
<script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
</script>
@endsection