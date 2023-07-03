<!DOCTYPE html>
<html lang="en">
@extends('layout.index')
@section('content')
<body>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form action="{{route('alternatif.update', $alternatif->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <div class="input-group">
                                        <input id="nama" type="text" class="form-control" placeholder="Isi dengan nama orang atau kode" name="nama" value="{{ $alternatif->nama }}" disabled>
                                    </div>
                                </div>
                                @foreach ($kriteriabobot as $key => $cw)
                                <div class="form-group">
                                    <label for="criteria[{{$cw->id}}]">{{$cw->name}} - {{$cw->description}}</label>
                                    <select class="form-control" id="criteria[{{$cw->id}}]"
                                        name="criteria[{{$cw->id}}]">
                                        
                                        @php
                                            $res = $kriteriarating->where('criteria_id', $cw->id)->all();
                                        @endphp
                                       
                                        @foreach ($res as $cr)
                                        <option value="{{$cr->id}}" {{ $cr->id == $alternativescores[$key]->rating_id ? "selected=selected" : "" }}>
                                            {{$cr->rating}} - {{$cr->description}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>

            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main><!-- End #main -->
</body>

</html>
@endsection