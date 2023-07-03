@extends('layout.index')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- @include('layout.header') -->
    </head>
    <body>
  <!-- ======= Sidebar ======= -->
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle d-flex items-center justify-content-between">
      <div>
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            
          </ol>
        </nav>
      </div>
      <div>
        <a class="btn {{ $key === 'desc' ? 'btn-primary' : 'btn-outline-primary' }}" href="{{ route('rank.order', 'desc') }}">Hasil dari Tertinggi</a>
        <a class="btn {{ $key === 'asc' ? 'btn-primary' : 'btn-outline-primary' }}" href="{{ route('rank.order', 'asc') }}">Hasil dari Terendah</a>
      </div>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nama</th>
                    @foreach($kriteriabobot2 as $a)
                    <th scope="col">{{$a->name}}</th>
                    @endforeach
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($alternatif2 as $a)
                    <tr>
                      <td>{{$a->nama}}</td>
                      @php
                        $data=$secores->where('ida',$a->id)->all();
                      @endphp
                      @foreach($data as $d)
                        <td>{{$d->rating}}</td>
                      @endforeach
                      <td>{{$a->totalresult}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table><!-- End Left side columns -->
      </div>
    </section>    
  </main><!-- End #main -->
</body>
@endsection