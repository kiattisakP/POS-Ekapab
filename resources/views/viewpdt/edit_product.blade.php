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
                            <form action="{{url('/products')}}" method="POST" enctype="multipart/form-data">
                                
                            <table class="table">
                                <td>
                                {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="PdtSKUCode" value="{{ $product->PdtSKUCode }}">

                                    <input type="hidden" name="id" value="{{ $barcode->id }}">
                                    <input type="hidden" name="PdtSKUCode" value="{{ $barcode->PdtSKUCode }}">

                                    <input type="hidden" name="id" value="{{ $unit->id }}">
                                    
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" name="PdtName" value="{{ $product->PdtName }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Name Other</label>
                                        <input type="text" class="form-control" name="PdtNameOTH" value="{{ $product->PdtNameOTH }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Stock Qty</label>
                                        <input type="number" class="form-control" name="PdtStkQty" value="{{ $product->PdtStkQty }}" required>
                                    </div> 

                                    <div class="form-group">
                                        <label>Product Stock Amount</label>
                                        <input type="number" class="form-control" name="PdtStkAmt" value="{{ $product->PdtStkAmt }}" required>
                                    </div> 

                                    <div class="form-group">
                                        <label>Product  Vat Type</label>
                                        <input type="number" class="form-control" name="PdtVatType" value="{{ $product->PdtVatType }}" required>
                                    </div> 
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label>Product Type</label>
                                        <input type="number" class="form-control" name="PdtType" value="{{ $product->PdtType }}" required>
                                    </div> 

                                    <div class="form-group">
                                        <label>Product Group Code</label>
                                        <input type="text" class="form-control" name="PdtGrpCode" value="{{ $product->PdtGrpCode }}" required>
                                    </div> 

                                    <div class="form-group">
                                        <label>Product Brand Code</label>
                                        <input type="text" class="form-control" name="PdtBndCode" value="{{ $product->PdtBndCode }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Size Code</label>
                                        <input type="text" class="form-control" name="PdtSizeCode" value="{{ $product->PdtSizeCode }}" required>
                                    </div> 
                                    <div class="form-group">
                                        <label>Product Color Code</label>
                                        <input type="text" class="form-control" name="PdtColorCode" value="{{ $product->PdtColorCode }}" required>
                                    </div> 
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label>SupplierCode</label>
                                        <input type="text" class="form-control" name="SplCode" value="{{ $product->SplCode }}" required>
                                    </div> 

                                    <div class="form-group">
                                        <label>General Account Number </label>
                                        <input type="text" class="form-control" name="GLAccNO" value="{{ $product->GLAccNO }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Product Age</label>
                                        <input type="text" class="form-control" name="PdtAge" value="{{ $product->PdtAge }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Unit Type</label>
                                        <input type="text" class="form-control" name="UnitType" value="{{ $product->UnitType }}" required>
                                    </div> 

                                    <div class="form-group">
                                        <label>PdtBarcode </label>
                                        <input type="text" class="form-control" name="PdtBarcode" value="{{ $barcode->PdtBarcode }}" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label>PdtSKURef</label>
                                        <input type="text" class="form-control" name="PdtSKURef" value="{{ $barcode->PdtSKURef }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>PdtUnitCode</label>
                                        <input type="text" class="form-control" name="PdtUnitCode" value="{{ $barcode->PdtUnitCode }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Price1 </label>
                                        <input type="text" class="form-control" name="Price1" value="{{ $barcode->Price1 }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Price2</label>
                                        <input type="text" class="form-control" name="Price2" value="{{ $barcode->Price2 }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Price3</label>
                                        <input type="text" class="form-control" name="Price3" value="{{ $barcode->Price3 }}" required>
                                    </div> 
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label>Price4 </label>
                                        <input type="text" class="form-control" name="Price4" value="{{ $barcode->Price4 }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Price5</label>
                                        <input type="text" class="form-control" name="Price5" value="{{ $barcode->Price5 }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>UnitCode </label>
                                        <input type="text" class="form-control" name="UnitCode" value="{{ $unit->UnitCode }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>UnitName</label>
                                        <input type="text" class="form-control" name="UnitName" value="{{ $unit->UnitName }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>UnitFactor</label>
                                        <input type="text" class="form-control" name="UnitFactor" value="{{ $unit->UnitFactor }}" required>
                                    </div> 
                                </td>
                            </table>
                                    <div class="form-group">
                                        <label>รูปสินค้า</label>
                                        <div>
                                            <div class="custom-file">
                                                <br>
                                                <input name="image" id="image" type="file" class="custom-file-input"
                                                    accept="image/*"
                                                    value="{{ $product->image }}"
                                                    required
                                                    onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0]); document.getElementById('preview').style.display = 'none'">
                                                    <label class="custom-file-label">
                                                        เลือกไฟล์

                                                    </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            
                                        </div>
                                        @if($product->image)
                                        <img src="{{asset($product->image)}}" class="img-fluid" id="preview">
                                        @endif
                                        @include('layouts.error', ['name' => 'image'])
                                    </div>
                                

                                <hr>
                                <button type="submit" value="Update" class="btn btn-block text-white" style="background: linear-gradient(to right, #ff5858, #f857a6);"> Update</button>
                            </form>
                        </div> 
                    </div>
                </div>
          </div>
        </div>
    </div>
</div>
@endsection