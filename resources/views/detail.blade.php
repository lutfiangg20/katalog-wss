@extends('layout')

@section('content')




              <div class="card shadow-sm  mb-3 bg-white rounded">
                <img src="{{$values[$id]['gambar'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-harga" style="color:#F47229; font-weight:bold;">{{ $values[$id]['harga'] }}</h5>
                    <h5 class="card-produk">{{ $values[$id]['produk'] }}</h6>
                    <p class="card-text">{{$values[$id]['deskripsi'] }}</p>
                </div>
                </a>
              </div>

@endsection
