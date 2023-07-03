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
        <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($kriteriab as $k)
                <tr>
                    <td>{{$k->id}}</td>
                    <td>{{$k->name}}</td>
                    <td>{{$k->type}}</td>
                    <td>{{$k->weight}}</td>
                    <td>{{$k->description}}</td>
                    <td>
                    <form action="{{ route('kriteriabobot.destroy',$k->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                                                    <a href="{{ route('kriteriabobot.edit',$k->id) }}"
                                                        class="btn btn-primary"><span class="fa fa-edit">Edit</span>
                                                    </a>
                                                </span>
                                                <span data-toggle="tooltip" data-placement="bottom" title="Hapus Data">
                                                    <button type="submit" class="btn btn-danger">
                                                        <span class="fa fa-trash-alt">Delete</span>
                                                    </button>
                                                </span>
                                            </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table><!-- End Left side columns -->
      </div>
    </section>
    <a href="{{route('kriteriabobot.create')}}"><button class="btn btn-primary" type="submit">Tambah Data</button></a>
        
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