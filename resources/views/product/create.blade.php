@extends('layouts.app')
@section('content')
<div class="back">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card" style="min-height:85vh;">
                <div class="card-header bg-white">
                    <div class="row">
                        <div class="col">
                            <h4 class="font-weight-bold">เพิ่มสินค้า</h4>
                        </div>
                    </div>
                </div>
                <div id="card-body" class="card-body" style="min-height:85vh ">
                    <div class="row justify-content-center" >
                                @if(Session::has('error'))
                                        @include('layouts.flash-error',[ 'message'=> Session('error') ])
                                @endif
                                    <form action="{{url('/products')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <table class="table" >  
                                            <td style="border: none;">
                                            <input type="hidden" name="id" >
                                                <div class="form-group">
                                                    <label for="PdtSKUCode">
                                                        <h6 class="h">Product SKUCode</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="PdtSKUCode" 
                                                        value="{{ old('PdtSKUCode') }}">
                                                    @include('layouts.error', ['name' => 'PdtSKUCode'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="PdtBarcode">
                                                        <h6 class="h">Product Barcode</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control"
                                                        name="PdtBarcode" 
                                                        value="{{ old('PdtBarcode') }}">
                                                    @include('layouts.error', ['name' => 'PdtBarcode'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="PdtBndCode">
                                                        <h6 class="h">Product BrandCode</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="PdtBndCode" 
                                                        value="{{ old('PdtBndCode') }}">
                                                    @include('layouts.error', ['name' => 'PdtBndCode'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="PdtUnitCode">
                                                        <h6 class="h">Product UnitCode</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="PdtUnitCode" 
                                                        value="{{ old('PdtUnitCode') }}">
                                                    @include('layouts.error', ['name' => 'PdtUnitCode'])
                                                </div>                                   
                                                <div class="form-group">
                                                    <label for="PdtSizeCode">
                                                        <h6 class="h">Product SizeCode</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="PdtSizeCode" 
                                                        value="{{ old('PdtSizeCode') }}">
                                                    @include('layouts.error', ['name' => 'PdtSizeCode'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="PdtGrpCode">
                                                        <h6 class="h">Product GroupCode</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="PdtGrpCode" 
                                                        value="{{ old('PdtGrpCode') }}">
                                                    @include('layouts.error', ['name' => 'PdtGrpCode'])
                                                </div>
                                            </td>
                                            <td style="border: none;"> 
                                                <div class="form-group">
                                                    <label for="PdtColorCode">
                                                        <h6 class="h">Product ColorCode</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="PdtColorCode" 
                                                        value="{{ old('PdtColorCode') }}">
                                                    @include('layouts.error', ['name' => 'PdtColorCode'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="SplCode">
                                                        <h6 class="h">SupplierCode</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="SplCode" 
                                                        value="{{ old('SplCode') }}">
                                                    @include('layouts.error', ['name' => 'SplCode'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="UnitCode">
                                                        <h6 class="h">UnitCode</h6> 
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="UnitCode" 
                                                        value="{{ old('UnitCode') }}">
                                                    @include('layouts.error', ['name' => 'UnitCode'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="PdtName">
                                                        <h6 class="h">Product Name</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="PdtName" 
                                                        value="{{ old('PdtName') }}">
                                                    @include('layouts.error', ['name' => 'PdtName'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="PdtNameOTH">
                                                        <h6 class="h">Product Name Other</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="PdtNameOTH" 
                                                        value="{{ old('PdtNameOTH') }}">
                                                    @include('layouts.error', ['name' => 'PdtNameOTH'])
                                                </div>
                                            </td>
                                            <td style="border: none;">
                                                <div class="form-group">
                                                    <label for="PdtStkQty">                                          
                                                        <h6 class="h">Product Stock Qty</h6>
                                                    </label>
                                                    <input type="number" 
                                                        class="form-control" 
                                                        name="PdtStkQty" 
                                                        value="{{ old('PdtStkQty') }}">
                                                    @include('layouts.error', ['name' => 'PdtStkQty'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="PdtStkAmt">
                                                        <h6 class="h">Product Stock Amount</h6>
                                                    </label>
                                                    <input type="number" 
                                                        class="form-control" 
                                                        name="PdtStkAmt" 
                                                        value="{{ old('PdtStkAmt') }}">
                                                    @include('layouts.error', ['name' => 'PdtStkAmt'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="PdtVatType">
                                                        <h6 class="h">Product Vat Type</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="PdtVatType" 
                                                        value="{{ old('PdtVatType') }}">
                                                    @include('layouts.error', ['name' => 'PdtVatType'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="PdtType">
                                                        <h6 class="h">Product Type</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="PdtType" 
                                                        value="{{ old('PdtType') }}">
                                                    @include('layouts.error', ['name' => 'PdtType'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="GLAccNO">
                                                        <h6 class="h">General Account Number </h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="GLAccNO" 
                                                        value="{{ old('GLAccNO') }}">
                                                    @include('layouts.error', ['name' => 'GLAccNO'])
                                                </div>
                                            </td>
                                            <td style="border: none;">
                                                <div class="form-group">
                                                    <label for="Price1">
                                                        <h6 class="h">Price 1</h6>        
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="Price1" 
                                                        value="{{ old('Price1') }}">
                                                    @include('layouts.error', ['name' => 'Price1'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="Price2">
                                                        <h6 class="h">Price 2</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="Price2" 
                                                        value="{{ old('Price2') }}">
                                                    @include('layouts.error', ['name' => 'Price2'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="Price3">
                                                        <h6 class="h">Price 3</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="Price3" 
                                                        value="{{ old('Price3') }}">
                                                    @include('layouts.error', ['name' => 'Price3'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="Price4">
                                                        <h6 class="h">Price 4</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="Price4" 
                                                        value="{{ old('Price4') }}">
                                                    @include('layouts.error', ['name' => 'Price4'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="Price5">
                                                        <h6 class="h">Price5</h6>                                                      
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="Price5" 
                                                        value="{{ old('Price5') }}">
                                                    @include('layouts.error', ['name' => 'Price5'])
                                                </div>
                                            </td>
                                            <td style="border: none;">
                                                <div class="form-group">
                                                    <label for="PdtAge">
                                                        <h6 class="h">Product Age</h6>
                                                    </label>
                                                    <input type="date" 
                                                        class="form-control" 
                                                        name="PdtAge"
                                                        value="{{ old('PdtAge') }}" >
                                                    @include('layouts.error', ['name' => 'PdtAge'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="UnitType">
                                                        <h6 class="h">UnitType</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="UnitType" 
                                                        value="{{ old('UnitType') }}">
                                                    @include('layouts.error', ['name' => 'UnitType'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="PdtSKURef">
                                                        <h6 class="h">Product SKU Reference</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="PdtSKURef" 
                                                        value="{{ old('PdtSKURef') }}">
                                                    @include('layouts.error', ['name' => 'PdtSKURef'])
                                                </div>
                                                <div class="form-group">
                                                    <label for="UnitName">
                                                        <h6 class="h">UnitName</h6>     
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="UnitName" 
                                                        value="{{ old('UnitName') }}">
                                                    @include('layouts.error', ['name' => 'UnitName'])
                                                </div>
            
                                                <div class="form-group">
                                                    <label for="UnitFactor">
                                                        <h6 class="h">UnitFactor</h6>
                                                    </label>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        name="UnitFactor"
                                                        value="{{ old('UnitFactor') }}">
                                                    @include('layouts.error', ['name' => 'UnitFactor'])
                                                </div>
                                                
                                            </td>
                                        </table>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="image">
                                                    <h6 class="h">Addimage</h6>
                                                </label>
                                                <div>
                                                    <div class="custom-file">
                                                        
                                                        <input name="image" id="image" type="file" class="custom-file-input"
                                                            accept="image/*"
                                                            onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"><label
                                                            class="custom-file-label">เลือกไฟล์</label>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <img id="output" src="" class="img-fluid">
                                                    </div>
                                                        @include('layouts.error', ['name' => 'image'])
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" 
                                                class="btn text-white btn-block" 
                                                style="background: linear-gradient(to right, #ff5858, #f857a6);">เพิ่มสินค้า</button>
                                        </div>
                                    </form>

                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection
    @push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @if(Session::has('error'))
    <script>
        toastr.error('สินค้าคงเหลือในสต๊อกไม่เพียงพอ กรุณาตรวจสอบสต๊อกของท่าน')
    </script>
    @endif

    @if(Session::has('errorTransaksi'))
    <script>
        toastr.error('อันนี้มัน "เออเร่อ" นะนี่ย')
    </script>
    @endif

    @if(Session::has('success'))
    <script>
        toastr.success('การซื้อขายสำเร็จ')
    </script>
    @endif

    <script>
        $(document).ready(function () {
            $('#fullHeightModalRight').on('shown.bs.modal', function () {
                $('#oke').trigger('focus');
            });
        });

        oke.oninput = function () {
            let jumlah = parseInt(
                document.getElementById('totalHidden').value) ? parseInt(
                    document.getElementById('totalHidden').value) : 0;
            let bayar = parseInt(
                document.getElementById('oke').value) ? parseInt(
                    document.getElementById('oke').value) : 0;
            let hasil = bayar - jumlah;
                document.getElementById("pembayaran").innerHTML = bayar ? '' + rupiah(bayar) + '.00'+' บาท' : '' + 0 +'.00'+' บาท';
                document.getElementById("kembalian").innerHTML = hasil ? '' + rupiah(hasil) + '.00'+' บาท' : '' + 0 +'.00'+' บาท';

            cek(bayar, jumlah);
            const saveButton = document.getElementById("saveButton");   

            if(jumlah === 0){
                saveButton.disabled = true;
            }
        };

        function cek(bayar, jumlah) {
            const saveButton = document.getElementById("saveButton");   

            if (bayar < jumlah) {
                saveButton.disabled = true;
            } else {
                saveButton.disabled = false;
            }
        }

        function rupiah(bilangan) {
            var number_string = bilangan.toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

            if (ribuan) {
                separator = sisa ? ',' : '';
                rupiah += separator + ribuan.join(',');
            }
            return rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        }

    </script>

    @endpush

    @push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <style>
        .gambar {
            width: 100%;
            height: 175px;
            padding: 0.9rem 0.9rem
        }

        @media only screen and (max-width: 600px) {
            .gambar {
                width: 100%;
                height: 100%;
                padding: 0.9rem 0.9rem
            }
        }

        html {
            overflow: scroll;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 0px;
           
            background: transparent;
            
        }

       
        ::-webkit-scrollbar-thumb {
            background: #FF0000;
        }

        .cart-btn {
            position: absolute;
            display: block;
            top: 5%;
            right: 5%;
            cursor: pointer;
            transition: all 0.3s linear;
            padding: 0.6rem 0.8rem !important;

        }

        .productCard {
            cursor: pointer;

        }

        .productCard:hover {
            border: solid 1px rgb(172, 172, 172);

        }

    </style>
    @endpush