@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Buat Order</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-9">
                            <button class="btn btn-success" onclick="buat_orderan()">Buat Order</button>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <p>Untuk membuat order klik tombol Buat Order diatas</p>
                    <div class="row">
                        <div class="col-lg-3">
                            <button class="btn btn-danger btn-block" onclick="hapus_terakhir()">Hapus Terakhir</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3" id="orderan">
                            <input type="text" class="form-control sku" name="sku[]" placeholder="Stock Keeping Unit"> 
                        </div>
                        <div class="col-lg-3">
                            <p class="form-text" id="totalnya">-</p>
                            <div id="harganya">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <code id="alert" style="display:none"></code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/main/order.js')}}">
    </script>
@endsection
