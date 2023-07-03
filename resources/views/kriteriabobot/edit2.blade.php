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
              <form action="{{route('kriteriabobot.update', $kriteriabobot->id)}}" method="post">
              @csrf
              @method('PUT')  
              <div class="form-group row mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input id="name" type="text" class="form-control" readonly="readonly" name="name" value="{{$kriteriabobot->name}}"  aria-describedby="name">
                  </div>
                </div>
                <div class="form-group row mb-3">
                  <label for="typr" class="col-sm-2 col-form-label">Type</label>
                  <div class="col-sm-10">
                  <select class="form-control" id="type" name="type">
                                        @if ($kriteriabobot->type == "benefit")
                                        <option value="benefit" selected='selected'>Benefit</option>
                                        <option value="cost">Cost</option>
                                        @else
                                        <option value="benefit">Benefit</option>
                                        <option value="cost" selected='selected'>Cost</option>
                                        @endif
                                    </select>
                </div>
                </div>
                <div class="form-group row mb-3">
                  <label for="weight" class="col-sm-2 col-form-label">Weight</label>
                  <div class="col-sm-10">
                    <input id="weight" type="number" class="form-control" value="{{$kriteriabobot->weight}}">
                  </div>
                </div>
                <div class="form-group row mb-3">
                  <label for="description" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input id="description" type="text" class="form-control" value="{{$kriteriabobot->description}}"  aria-describedby="description">
                  </div>
                </div>
                <div class="form-group row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>
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