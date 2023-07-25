@extends('layout')

@section('content')
    {{-- Search bar --}}
    <div class="akun-header" style="padding: 20px; background-image: url('/images/header.png')">

            <h2 style="color: green">
                Akun
            </h2>
            <br>
            <h3>
                Belum Masuk
            </h3>
            <h4 style="color: #808080">
                Silahkan Masuk/Daftar
            </h4>
            <br>
    </div>

    <div class="bantuan" style="padding: 20px">
        <div class="row">
            <img class="col-2" src="/images/bantuan.png" alt="" style="width: auto; height: 20%;padding-top: 10px">
            <div class="col-8">
                <h3>Bantuan</h3>
                <p style="color: #808080; font-size: 22px">Temukan infromasi yang dibutuhkan</p>
            </div>
            <svg class="col-2" style="margin-top: 20px" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
        </div>
    </div>

    <div class="daftar">
        <div class="card" style="border-color: rgb(0, 128, 0); border-radius: 20px; border-width: 2px">
            <div class="row">
                <div class="col-10">
                    <h3 style="padding: 20px">Masuk / Daftar</h3>
                </div>
                <div class="col-2" style="margin-top: 20px">
                    <svg class="box-arrow" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style></style><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V32c0-17.7-14.3-32-32-32H352zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"/></svg>
                </div>
            </div>
        </div>
    </div>


@endsection
