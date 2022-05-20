@extends('layouts.home')

@section('container')
<!-- <div class="w-90 input-group mb-3 input-group-sm mt-5">
            <input type="date" class="form-control sm" style="margin-right:10px; height:50px;" name="date1" value="{{ request('date1') }}">
            <input type="date" class="form-control sm" style="margin-right:10px; height:50px;" name="date2" value="{{ request('date2') }}">
            <a href="booking">
                <button class="btn btn-outline-secondary" style="margin-right:10px; height:50px;" type="submit">Book Now!</button>
            </a>
        </div> -->
<div class="py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets/app-img/home02.jpg" class="d-block mx-lg-auto img-fluid" alt="Hotel Image 02" width="700" height="500" loading="lazy">
        </div>

        <div class="col-lg-6">
            <h2 class="display-6 lh-1 mb-3">Nigella Resort</h2>
            <p class="lead">Nigella Resort Malang, salah satu Resort terbaik di kota Malang yang dekat dengan pusat kota dan tempat berbelanja. Didukung dengan tempat spa lengkap, kolam renang serta kamar super keren akan membuat liburan Anda semakin menyenangkan.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="register" class="btn btn-dark btn-lg px-4 fw-bold">Registrasi</a>
                <a href="booking" class="btn btn-dark btn-lg px-4 fw-bold">Booking</a>
            </div>
        </div>
    </div>
</div>
@endsection