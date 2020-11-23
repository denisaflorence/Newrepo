@extends('shared/base')

@section('judul','.::Home::.')

@section('navigasi')
<h1>Ini Adalah About</h1>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="profile">Bangtan World</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="login">Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="setting">Setting</a>
            </li>
        </ul>
    </div>
</nav>
@endsection

@section('isi_konten')
<div class="row">
    <div class="col-sm-4">
        <h2>Tentang BTS</h2>
        <h5>Bangtan Boys</h5>
        <div class="fakeimg">
        </div>
        <p>Saya ingin menambahkan foto namun belum bisa mengupload karena belum belajar hehe.</p>
       
       
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="https://www.bighitcorp.com/eng/" target='_blank'>Bighit Entertainment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://w3schools.com" target='_blank'>w3schools.com</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="http://malasngoding.com" target='_blank'>malasngoding.com</a>
            </li>
        </ul>
        <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
        <h2>Week 09</h2>
        <h5>Development Framework, Nov 9, 2020</h5>
        <div class="fakeimg">Fake Image</div>
        <p>Model-View-Controller</p>
        <p>
            MVC adalah konsep arsitektur dalam pembangunan aplikasi berbasis web yang membagi aplikasi web menjadi 3 bagian besar. Yang mana setiap bagian memiliki tugas-tugas serta tanggung jawab masing-masing. Tiga bagian tersebut adalah: model, view dan controller.
            <br>
            <br>
            <a href='https://jagongoding.com/web/memahami-konsep-mvc/' class='btn btn-success' target='_blank'>Baca Lebih Lanjut</a>
        </p>
        <br>
    </div>
</div>
@endsection
@section('additional_script')
<script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
</script>
@endsection