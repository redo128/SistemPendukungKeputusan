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
              <form action="{{route('kriteriabobot.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Kode</label>
                                    <div class="input-group">
                                        <input id="name" type="text" class="form-control" placeholder="Contoh: C1" name="name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="type">Tipe</label>
                                    <select class="form-control" id="type" name="type">
                                        <option value="benefit">Benefit</option>
                                        <option value="cost">Cost</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="weight">Bobot</label>
                                    <div class="input-group">
                                        <input id="weight" type="text" class="form-control" placeholder="Contoh: 0.15" name="weight" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <div class="input-group">
                                        <input id="description" type="text" class="form-control" placeholder="Contoh: Absensi" name="description" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main><!-- End #main -->
</body>

</html>
@endsection