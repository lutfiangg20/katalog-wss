@extends('layout')

@section('content')
    {{-- Search bar --}}
    <div class="container-kategori">
    <nav class="navbar navbar-light ">
        <form class="form-inline" style="margin:auto; width:450px; border-radius:20px">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
      </nav>

        <!-- category slider -->
      <div class="kategori-sticky" style="margin:5px; border-radius:10px;">
        <div class="owl-carousel owl-theme" style="text-align: center">
            <div class="item">
                <a href="/kategori" style="text-decoration: none; color: #000000">
                <img src="/img-category/semua.png" alt="">
                <small>Semua</small>
                </a>
            </div>
            <div class="item">
                <a href="/kategori-kategori/sayur" style="text-decoration: none; color: #000000">
                <img src="/img-category/sayur.png" alt="">
                <small>Sayur</small>
                </a>
            </div>
            <div class="item">
                <a href="/kategori-kategori/buah" style="text-decoration: none; color: #000000">
                    <img src="/img-category/buah.png" alt="">
                    <small>Buah</small>
                </a>
            </div>
            <div class="item">
                <a href="/kategori-kategori/unggas" style="text-decoration: none; color: #000000">
                    <img src="/img-category/unggas.png" alt="">
                    <small>Unggas</small>
                </a>
            </div>
            <div class="item">
                <a href="/kategori-kategori/seafood" style="text-decoration: none; color: #000000">
                    <img src="/img-category/seafood.png" alt="">
                    <small>Seafood</small>
                </a>
            </div>
            <div class="item">
                <a href="/kategori-kategori/sembako" style="text-decoration: none; color: #000000">
                    <img src="/img-category/sembako.png" alt="">
                    <small>Sembako</small>
                </a>
            </div>
            <div class="item">
                <a href="/kategori-kategori/bakery" style="text-decoration: none; color: #000000">
                    <img src="/img-category/bakery.png" alt="">
                    <small>Bakery & Sarapan</small>
                </a>
            </div>
            <div class="item">
                <a href="/kategori-kategori/bumbu" style="text-decoration: none; color: #000000">
                    <img src="/img-category/bumbu.png" alt="">
                    <small>Bumbu & Saus</small>
                </a>
            </div>
            <div class="item">
                <a href="/kategori-kategori/beku" style="text-decoration: none; color: #000000">
                    <img src="/img-category/beku.png" alt="">
                    <small>Produk Beku</small>
                </a>
            </div>
            <div class="item">
                <a href="/kategori-kategori/instan" style="text-decoration: none; color: #000000">
                    <img src="/img-category/instan.png" alt="">
                    <small>Makanan Instan</small>
                </a>
            </div>
            <div class="item">
                <a href="/kategori-kategori/protein" style="text-decoration: none; color: #000000">
                    <img src="/img-category/protein.png" alt="">
                    <small>Protein</small>
                </a>
            </div>
        </div>
        </div>
    </div>



    {{-- content --}}
    <div class="container">

        <div class="row">
            <div class="sidebar col-sm-2">
                <div class="nav-sticky ">
                    <ul class="nav flex-column col-sm-2">
                        <li class="side-nav-item">
                            <a class=" text-large" aria-current="page" href="#" >
                            <span data-feather="users" class="align-text-center"></span>
                                <small>Semua Sayuran</small>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a class=" text-large" href="#" >
                                <small>Sayuran Hijau</small>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a class=" text-large" href="#">
                                <small>Bawang</small>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a class=" text-large" href="#">
                                <small>Cabai</small>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a class=" text-large" href="#">
                                <small>Rempah</small>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a class=" text-large" href="#">
                                <small>Umbi & Kacang</small>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a class=" text-large" href="#">
                                <small>Jamur</small>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a class=" text-large" href="#">
                                <small>Hidroponik & Organik</small>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a class=" text-large" href="#">
                                <small>Paket Masak</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-10" style="background-color: white">
              <div class="row">
                <div class="row row-cols-1 row-cols-md-2">
                    @foreach ($values as $value)
                    <div class="col">
                      <div class="card shadow  mb-3 bg-white rounded" style="width: 185px;">
                        <a href="detail/{{data_get($value, 'id')}}">
                        <div class="gambar" style="padding-top: 200px; background-image: url('{{ data_get($value, 'gambar') }}')"></div>
                        <div class="card-body">
                          <h6 class="card-title">{{ data_get($value, 'produk') }}</h6>
                          <small class="card-text">{{ data_get($value, 'deskripsi') }}</small>
                          <h6 class="card-text" style="color:#F47229;">{{ data_get($value, 'harga') }}</h6>
                        </div>
                        </a>
                      </div>
                    </div>
                    @endforeach
                  </div>
              </div>
            </div>
          </div>

    </div>

@endsection
