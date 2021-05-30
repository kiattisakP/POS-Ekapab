@extends('layouts.app')
@section('content')
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col">
                            <div class="row">  
                                <div class="col-md-12 ">
                                    <div class="pull-left">
                                        <h4 class="font-weight-bold">
                                            &nbsp;&nbsp;&nbsp;สินค้า : {{ $product->PdtName }} 
                                        </h4>
                                        <h5 class="font-weight-bold">
                                            &nbsp;&nbsp;&nbsp;Product : {{ $product->PdtNameOTH }} 
                                        </h5>
                                    </div>
                                    <div class="pull-right">
                                        <a type="button" 
                                        href="{{route('products.index')}}"
                                        class="btn btn-info"
                                        style="border: 0"
                                        title="Product">รายการสินค้า
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <br>
                        <div class="center">
                        <table  class="table table-sm "  style="width: 72%;">
                            <td id="td1" class="center" style="border: none; ">
                                    <img src="{{asset($product->image)}}"  id="preview">
                            </td>
                                <td id="td2" style="border: none; ">
                                    <div class="pull-right">
                                        <div class="col">
                                            <h6 id="h">SKU &nbsp;:</h6>
                                            <h6 id="h">Barcode &nbsp;:</h6>
                                            <h6 id="h">ประเภท &nbsp;:</h6>
                                            <h6 id="h">ราคาที่ 1 &nbsp;:</h6>
                                            <h6 id="h">ราคาที่ 2 &nbsp;:</h6>
                                            <h6 id="h">ราคาที่ 3 &nbsp;:</h6>
                                            <h6 id="h">ราคาที่ 4 &nbsp;:</h6>
                                            <h6 id="h">ราคาที่ 5 &nbsp;:</h6>
                                            <h6 id="h">UnitName &nbsp;:</h6>
                                        </div>
                                    </div>
                                </td >
                                <td  style="border: none; ">
                                    <div class="pull-left">
                                        <div class="col">
                                            <h6 id="hh">{{ $product->PdtSKUCode }}</h6>
                                            <h6 id="hh">{{ $barcode->PdtBarcode }}</h6>
                                            <h6 id="hh">{{ $product->PdtType }}</h6>    
                                            <h6 id="hh">{{ $barcode->Price1 }}</h6>
                                            <h6 id="hh">{{ $barcode->Price2 }}</h6>
                                            <h6 id="hh">{{ $barcode->Price3 }}</h6>
                                            <h6 id="hh">{{ $barcode->Price4 }}</h6>
                                            <h6 id="hh">{{ $barcode->Price5 }}</h6>
                                            <h6 id="hh">{{ $unit->UnitName }}</h6>
                                        </div>
                                    </div>
                                </td> 
                            

                        </table>
                        </div>
                        <hr>
            </div>
            
        </div>
    </div>
    
@endsection