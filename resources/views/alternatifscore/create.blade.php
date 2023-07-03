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
              <form action="{{route('alternatif.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <div class="input-group">
                                        <input id="name" type="text" class="form-control" placeholder="Isi dengan nama orang atau kode" name="name" required>
                                    </div>
                                </div>
                                @foreach($kriteriabobot as $ab)
                                <div class="form-group">
                                    <label for="kriteriabobot_id[{{$ab->id}}]">{{$ab->description}}</label>
                                    <select class="form-control" id="kriteriabobot_id[{{$ab->id}}]" name="kriteriabobot_id[{{$ab->id}}]">
                                      @php
                                      $cari=$kriteriaratings->where('kriteriabobot_id',$ab->id)->all();
                                      @endphp
                                      @foreach($cari as $c)
                                        <option value="{{$c->id}}">{{$c->kriteriabobot->name}} = {{$c->description}}</option>
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