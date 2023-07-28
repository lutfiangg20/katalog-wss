@extends('layout')

@section('content')
<div class="kategori"></div>
{{-- @livewire('indexkategori') --}}
@livewire('indexkategori',['kategori' => Route::current()->parameter('ketegori')])
@endsection
