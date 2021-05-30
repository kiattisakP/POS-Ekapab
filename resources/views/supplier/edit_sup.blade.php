@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-sm-12 ">
            <div class="row justify-content-center" >
                <div class="col-sm">
                    <div class="pull-left">
                        <h4 class="font-weight-bold">
                            เเก้ไข : {{ $supplier->SplName }}
                        </h4>
                    </div>
                    <div class="pull-right">
                        <a type="button" 
                            href="{{route('suppliers.index')}}"
                            class="btn btn-info"
                            style="border: 0"
                            title="Product">
                            รายการสินค้า
                        </a>
                    </div>
                </div>
            </div>
                        <form action="{{url('/suppliers')}}" method="POST" enctype="multipart/form-data">
                            <table class="table">
                                <td>
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $supplier->id }}">
                            <input type="hidden" name="SplCode" value="{{ $supplier->SplCode }}">

                            <input type="hidden" name="id" value="{{ $supcon->id }}">
                            <input type="hidden" name="SplCode" value="{{ $supcon->SplCode }}">
                            <div class="form-group">
                                <label>Supplier Name</label>
                                <input type="text" class="form-control" name="SplName" value="{{ $supplier->SplName }}" required>
                            </div>
                            <div class="form-group">
                                <label>SplNameOTH</label>
                                <input type="text" class="form-control" name="SplNameOTH" value="{{ $supplier->SplNameOTH }}" required>
                            </div>
                            <div class="form-group">
                                <label>SplAddress1</label>
                                <input type="text" class="form-control" name="SplAddress1" value="{{ $supplier->SplAddress1 }}" required>
                            </div> 
                            <div class="form-group">
                                <label>SplAddress2</label>
                                <input type="text" class="form-control" name="SplAddress2" value="{{ $supplier->SplAddress2 }}" required>
                            </div>
                        </td>
                        <td>  
                            <div class="form-group">
                                <label>SplTaxNo</label>
                                <input type="number" class="form-control" name="SplTaxNo" value="{{ $supplier->SplTaxNo }}" required>
                            </div> 
                            <div class="form-group">
                                <label>SplTel</label>
                                <input type="number" class="form-control" name="SplTel" value="{{ $supplier->SplTel }}" required>
                            </div> 

                            <div class="form-group">
                                <label>SplEmail</label>
                                <input type="text" class="form-control" name="SplEmail" value="{{ $supplier->SplEmail }}" required>
                            </div> 

                            <div class="form-group">
                                <label>SplOthinfo</label>
                                <input type="text" class="form-control" name="SplOthinfo" value="{{ $supplier->SplOthinfo }}" required>
                            </div> 
                        </td>
                        <td> 
                            <div class="form-group">
                                <label>SplCraditterm</label>
                                <input type="text" class="form-control" name="SplCraditterm" value="{{ $supplier->SplCraditterm }}" required>
                            </div>

                            <div class="form-group">
                                <label>SplVatType</label>
                                <input type="text" class="form-control" name="SplVatType" value="{{ $supplier->SplVatType }}" required>
                            </div> 
                            <div class="form-group">
                                <label>SplLimit</label>
                                <input type="text" class="form-control" name="SplLimit" value="{{ $supplier->SplLimit }}" required>
                            </div>
 
                            <div class="form-group">
                                <label>SplAmt</label>
                                <input type="text" class="form-control" name="SplAmt" value="{{ $supplier->SplAmt }}" required>
                            </div>
                        </td>
                        <td> 
                            <div class="form-group">
                                <label>PdtAge</label>
                                <input type="text" class="form-control" name="PdtAge" value="{{ $supplier->PdtAge }}" required>
                            </div>
                            <div class="form-group">
                                <label>UnitType</label>
                                <input type="text" class="form-control" name="UnitType" value="{{ $supplier->UnitType }}" required>
                            </div> 
                        </td>

                        <td> 
                            <div class="form-group">
                                <label>ContectName</label>
                                <input type="text" class="form-control" name="ContectName" value="{{ $supcon->ContectName }}" required>
                            </div>
                            <div class="form-group">
                                <label>ContectTel</label>
                                <input type="text" class="form-control" name="ContectTel" value="{{ $supcon->ContectTel }}" required>
                            </div>
                            <div class="form-group">
                                <label>ContectEmail</label>
                                <input type="text" class="form-control" name="ContectEmail" value="{{ $supcon->ContectEmail }}" required>
                            </div>
                            <div class="form-group">
                                <label>ContectOth1</label>
                                <input type="text" class="form-control" name="ContectOth1" value="{{ $supcon->ContectOth1 }}" required>
                            </div> 
                            <div class="form-group">
                                <label>ContectOth2</label>
                                <input type="text" class="form-control" name="ContectOth2" value="{{ $supcon->ContectOth2 }}" required>
                            </div> 
                        </td>

                    </table>
                            <hr>
                            <button type="submit" value="Update" class="btn btn-block text-white" style="background: linear-gradient(to right, #ff5858, #f857a6);"> Update</button>
                        </form> 
                
            </div>
        </div>
    </div>
@endsection