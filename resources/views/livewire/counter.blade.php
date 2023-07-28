<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <nav class="navbar navbar-light bg-white fixed-top">
        <form class="form-inline" style="margin:auto; width:450px; border-radius:20px">
          <input class="form-control" id="search" type="search" placeholder="Search" aria-label="Search" wire:model="cari">
        </form>
      </nav>

      {{-- content --}}
    <div class="container">
        <div id="header" class="products_header" style="text-align: center">
            <div id="header-title"></div>

    <!-- products slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-bs-interval="1000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="1000">
            <img src="/images/slide1.PNG" class="d-block w-100" alt="first slide">
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="/images/slide2.PNG" class="d-block w-100" alt="second slide">
          </div>
          <div class="carousel-item" data-bs-interval="1000">
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

     <!-- category slider -->
            <div wire:ignore style="padding:2px; margin:1px; background-color: white; border-radius:10px">
                <div class="owl-carousel owl-theme" style="text-align: center">
                    <div class="item">
                        <a href="#" wire:click.prevent="semua" style="text-decoration: none; color: #000000">
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
                        <a href="#" wire:click.prevent="pindang" style="text-decoration: none; color: #000000">
                            <img src="/img-category/pindang.png" alt="">
                            <small>Pindang</small>
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
    <div class="row row-cols-2 mx-1" >
        @foreach ($produks as $p)
        <div class="col pt-3">
          <div class="card shadow-sm bg-white rounded">
            <a href="detail/{{$p->id}}">
            <div class="gambar" style="padding-top: 200px; background-image: url('{{ $p->gambar }}');">
            </div>
           {{--  <img src="{{ data_get($value, 'gambar') }}" class="card-img-top" alt="..."> --}}
            <div class="card-body text-truncate" style="text-align: left">
              <h6 class="card-title text-truncate"">{{ $p->produk }}</h6>
              <small class="card-text">{{ $p->deskripsi }}</small>
              <h6 class="card-text" style="color:#df6207;">{{ $p->harga }}</h6>
            </div>
            </a>
          </div>
        </div>
        @endforeach


      </div>
      <div class="loadmore" style="padding-bottom: 90px; padding-top: 20px; text-align: center;">
        @if($produks->hasMorePages())
            <a href="" wire:click.prevent="loadMore">Load more</a>
        @endif
      </div>


</div>



</div>
