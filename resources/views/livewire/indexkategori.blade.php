<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="kategori"></div>
    {{-- Search bar --}}
    <nav class="navbar navbar-light bg-white fixed-top">
        <form class="form-inline" style="margin:auto; width:450; border-radius:20px">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="kategori">
        </form>
      </nav>

    <!-- products slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/slide1.PNG" class="d-block w-100" alt="first slide">
          </div>
          <div class="carousel-item">
            <img src="/images/slide2.PNG" class="d-block w-100" alt="second slide">
          </div>
          <div class="carousel-item">
            <img src="/images/slide3.PNG" class="d-block w-100" alt="third slide">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- content --}}
    <div class="container">
        <div id="header" class="products_header" style="text-align: center">
            <div id="header-title"></div>



              <!-- category slider -->
              <div style="margin:5px; background-color: white; border-radius:10px">
                <div class="owl-carousel owl-theme" style="text-align: center">
                    <div class="item">
                        <a href="/" style="text-decoration: none; color: #000000">
                        <img src="/img-category/semua.png" alt="">
                        <small>Semua</small>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/index-kategori/sayur" style="text-decoration: none; color: #000000">
                        <img src="/img-category/sayur.png" alt="">
                        <small>Sayur</small>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/index-kategori/buah" style="text-decoration: none; color: #000000">
                            <img src="/img-category/buah.png" alt="">
                            <small>Buah</small>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/index-kategori/unggas" style="text-decoration: none; color: #000000">
                            <img src="/img-category/unggas.png" alt="">
                            <small>Unggas</small>
                        </a>
                    </div>
                    <div class="iem">
                        <a href="/index-kategori/seafood" style="text-decoration: none; color: #000000">
                            <img src="/img-category/seafood.png" alt="">
                            <small>Seafood</small>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/index-kategori/sembako" style="text-decoration: none; color: #000000">
                            <img src="/img-category/sembako.png" alt="">
                            <small>Sembako</small>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/index-kategori/bakery" style="text-decoration: none; color: #000000">
                            <img src="/img-category/bakery.png" alt="">
                            <small>Bakery & Sarapan</small>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/index-kategori/bumbu" style="text-decoration: none; color: #000000">
                            <img src="/img-category/bumbu.png" alt="">
                            <small>Bumbu & Saus</small>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/index-kategori/beku" style="text-decoration: none; color: #000000">
                            <img src="/img-category/beku.png" alt="">
                            <small>Produk Beku</small>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/index-kategori/instan" style="text-decoration: none; color: #000000">
                            <img src="/img-category/instan.png" alt="">
                            <small>Makanan Instan</small>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/index-kategori/protein" style="text-decoration: none; color: #000000">
                            <img src="/img-category/protein.png" alt="">
                            <small>Protein</small>
                        </a>
                    </div>
                </div>

                <div class="row" style="text-align:center;">
                    <div class="col">
                        <img src="/img-category/favorit.png" alt="">
                        <small>Semua</small>
                    </div>
                    <div class="col">
                        <img src="/img-category/produk.png" alt="">
                        <small>Sayur</small>
                    </div>
                    <div class="col">
                        <img src="/img-category/sale.png" alt="">
                        <small>Buah</small>
                    </div>
                    <div class="col">
                        <img src="/img-category/grosir.png" alt="">
                        <small>Unggas</small>
                    </div>
                    <div class="col">
                        <img src="/img-category/cook.png" alt="">
                        <small>Seafood</small>
                    </div>
                </div>
            </div>




              {{-- product cart --}}
              <div class="row row-cols-1 row-cols-md-2">
                @foreach ($values as $value)
                    @if (data_get($value,'kategori') === $kategori)
                    <div class="getkategori col">
                        <div class="card shadow-sm  mb-3 bg-white rounded">
                          <a href="detail/{{data_get($value, 'id')}}">
                          <div class="gambar" style="padding-top: 250px; background-image: url('{{ data_get($value, 'gambar') }}');  background-size: cover;">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">{{ data_get($value,  'produk') }}</h5>
                            <h6 class="card-text">{{ data_get($value, 'deskripsi') }}</h6>
                            <p class="card-text" style="color:#F47229; font-weight:bold;">{{ data_get($value, 'harga') }}</p>
                          </div>
                          </a>
                        </div>
                      </div>
                    @endif

                @endforeach
              </div>

              </div>

        </div>

    </div>
</div>
