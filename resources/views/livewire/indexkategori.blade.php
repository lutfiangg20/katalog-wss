<div>
    {{-- The Master doesn't talk, he acts. --}}
    {{-- Search bar --}}
    <nav class="navbar navbar-light bg-white fixed-top">
        <form class="form-inline" style="margin:auto; width:450px; border-radius:20px">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="kategori" wire:model="cari">
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
              <div wire:ignore>
                <div style="margin:5px; background-color: white; border-radius:10px">
                    <div class="owl-carousel owl-theme" style="text-align: center">
                        <div class="item">
                            <a href="/" style="text-decoration: none; color: #000000">
                            <img src="/img-category/semua.png" alt="">
                            <small>Semua</small>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" wire:click.prevent="sayur" style="text-decoration: none; color: #000000">
                            <img src="/img-category/sayur.png" alt="">
                            <small>Sayur</small>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" wire:click.prevent="buah" style="text-decoration: none; color: #000000">
                                <img src="/img-category/buah.png" alt="">
                                <small>Buah</small>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" wire:click.prevent="ayam" style="text-decoration: none; color: #000000">
                                <img src="/img-category/unggas.png" alt="">
                                <small>Ayam</small>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" wire:click.prevent="ikan" style="text-decoration: none; color: #000000">
                                <img src="/img-category/seafood.png" alt="">
                                <small>ikan</small>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" wire:click.prevent="sembako" style="text-decoration: none; color: #000000">
                                <img src="/img-category/sembako.png" alt="">
                                <small>Sembako</small>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" wire:click.prevent="bakery" style="text-decoration: none; color: #000000">
                                <img src="/img-category/bakery.png" alt="">
                                <small>Bakery & Sarapan</small>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" wire:click.prevent="bumbu" style="text-decoration: none; color: #000000">
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

                    <div class="row" style="text-align:center; padding-top: 5px">
                        <div class="col">
                            <img src="/img-category/favorit.png" alt="">
                            <small>Favori</small>
                        </div>
                        <div class="col">
                            <img src="/img-category/produk.png" alt="">
                            <small>Produk Terbaru</small>
                        </div>
                        <div class="col">
                            <img src="/img-category/sale.png" alt="">
                            <small>Flash Sale</small>
                        </div>
                        <div class="col">
                            <img src="/img-category/grosir.png" alt="">
                            <small>Grosir</small>
                        </div>
                        <div class="col">
                            <img src="/img-category/cook.png" alt="">
                            <small>Easy Cook</small>
                        </div>
                    </div>
                </div>
              </div>





              {{-- product cart --}}
              <div class="row row-cols-1 row-cols-md-2">
                @foreach ($produks as $p)

                    <div class="getkategori col">
                        <div class="card shadow-sm  mb-3 bg-white rounded">
                          <a href="detail/{{$p->id}}">
                          <div class="gambar" style="padding-top: 250px; background-image: url('{{ $p->gambar }}');  background-size: cover;">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">{{ $p->produk }}</h5>
                            <h6 class="card-text">{{ $p->deskripsi }}</h6>
                            <p class="card-text" style="color:#F47229; font-weight:bold;">{{ $p->harga }}</p>
                          </div>
                          </a>
                        </div>
                      </div>


                @endforeach
              </div>

              </div>

        </div>

    </div>
    <script>
        document.addEventListener('livewire:load', function () {
            // Your JS here.
            $('.owl-carousel').owlCarousel({
        loop:false,
        margin:15,
    /*     nav:true, */
        dots:false,

        /* nav:false, */
        responsive:{
            0:{
                items:1
            },
            600:{
            items:7
        },
            1000:{
                items:7
            }
            }
        })
        })
    </script>
</div>
