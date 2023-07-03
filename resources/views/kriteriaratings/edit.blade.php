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

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <form action="{{route('kriteriaratings.update', $kriteriarating->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <div class="input-group">
                                        <input id="rating" type="text" class="form-control" placeholder="Contoh: 5" name="rating" value="{{ $kriteriarating->rating }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <div class="input-group">
                                        <input id="description" type="text" class="form-control" placeholder="Contoh: Sangat Baik" name="description" value="{{ $kriteriarating->description }}" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form><!-- End Left side columns -->
      </div>
    </section>

   
        
  </main><!-- End #main -->
<!-- @include('layout.footer') -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
@endsection