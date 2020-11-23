@extends('shared/base')

@section('judul','.::Register::.')

@section('navigasi')
@section('isi_konten')
        <div class="row">
            <div class='col-md-4 hidden-xs'>
            </div>
            <div class='col-md-4 col-xs-12'>
                <h3>Pendaftaran</h3>
                <form action='/authenticate' method='POST'>
                    <label for="Username">Nama Lengkap</label>
                    <input class='form-control' type="text" name="nama_lengkap" id="nama_lengkap">
                    <label for="Username">Negara Asal</label>
                    <select class="form-control select2" style="width: 100%;" name="negara_asal" id="negara_asal">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Indonesia</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                    <hr>
                    <label for="Username">Username</label>
                    <input class='form-control' type="text" name="nama_user" id="nama_user">
                    <label for="Username">Password</label>
                    <input class='form-control' type="password" name="kata_sandi" id="kata_sandi">
                    <br>
                    <button type='submit' class='btn btn-primary'>
                        <i class='fa fa-edit'></i> Daftar
                    </button>
                    <button type='reset' class='btn btn-secondary'>
                        <i class='fa fa-trash'></i> Batal
                    </button>
                    <a href='/login'>Sudah punya akun?</a>
                </form>
            </div>
            <div class='col-md-4 hidden-xs'>
            
            </div>
        </div>
        <div class='row'>
            &nbsp;
        </div>
    </div>
@endsection

@section('additional_script')
<script src='assets/plugins/select2/js/select2.min.js'></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();

            //Initialize Select2 Elements
            $('.select2').select2()
        })
    </script>
@endsection