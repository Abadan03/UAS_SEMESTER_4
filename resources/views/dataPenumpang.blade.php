@extends('layouts.defaults')
@section('content')


<div class="main-content">
    <div class="container">
        <div class="row">
        <h4 class="title-form mt-5 text-dark">Data Pemesanan</h4>
        <p  class="text-secondary">Isi Data Penumpang</p>
        <hr>

        <form class="needs-validation mt-4" novalidate>
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Nama Penumpang</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="{{ Auth::user()->name }}" required>
                <div class="invalid-feedback">
                  Valid name is required.
                </div>
              </div>

              <div class="col-6">
                <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                <input type="email" class="form-control" id="email" placeholder="">
                <div class="invalid-feedback">
                  Please enter a valid email
                </div>
              </div>

              <div class="col-6">
                <label for="address" class="form-label">No.Telepon</label>
                <input type="text" class="form-control" id="address" placeholder="" required>
                <div class="invalid-feedback">
                  Please enter your No Telepon.
                </div>
              </div>

              <div class="col-md-6">
                <label for="country" class="form-label">jumlah penumpang</label>
                <select class="form-select" id="country" required>
                  <option value="">0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>

            <hr>
            <input type="submit" value="simpan data" class="submit-btn ">
          </form>
    </div>
</div>


@endsection
