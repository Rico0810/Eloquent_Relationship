<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@extends('template')

@section('container')
    <h1>Halaman Home</h1>
    <div class="header">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('/image/Rico.jpeg') }}" alt="">
            </div>
            <div class="col-md-8">
                <h3>Rico Frenaldi Tokanto, 20</h3>
                <br>
                <p>Aloo, Perkenalkan Saya Rico Frenaldi Tokanto, saya merupakan mahasiswa dari Universitas Bina Nusantara Fakultas Computer Science dengan jurusan Computer Science and Statistics. Saat ini saya sedang menjalani perkuliahan semester 6. Saya sangat menyukai mata kuliah Computer Network, karena itu berhubungan dengan cara kita mengalokasikan serta mengatur IP address untuk setiap komputer.</p>
                <br>
                <p>Selama berkuliah di BINUS UNIVERSITY Saya pernah bergabung di HIMSTAT (Himpunan Mahasiswa Statistika), Saya berada di Himpunan ini sekitar 4 semester. Selama saya menjadi aktivis saya selalu berada di divisi PR (Public Relation) dan pekerjaan Saya yaitu membuat artikel mengenai Statistika yang berhubungan dengan Indonesia. Pada kesempatan kali ini Saya akan menunjukkan beberapa artikel yang pernah saya buat sebelumnya.</p>
                <br>
                <a href="/blog">Klik disini untuk melihat artikel</a>
            </div>
        </div>
    </div>

    <!-- <div class="header">
        <div class="item-header1 d-flex align-items-center">
            <div class="d-flex">
                <img src="{{ asset('/image/Rico.jpeg') }}" alt="" width=200">
            </div>
            <h5>Name: Rico Frenaldi Tokanto</h5>
            <h5>Email</h5>
        </div>
    </div> -->

    <!-- <h3>Name: Rico Frenaldi Tokanto</h3>
    <h3>Email: ricotokan155@gmail.com</h3>
    <img src="{{ asset('/image/tugas.png') }}" alt="" width=200 class="img-thumbnail rounded-circle">
    <p>Halaman ini dibuat untuk memenuhi</p> -->
@endsection
