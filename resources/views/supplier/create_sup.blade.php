@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white">
                    <h4 class="font-weight-bold">Add Supplier</h4>
                </div>
                    <div class="card-body">
                            @if(Session::has('error'))
                                @include('layouts.flash-error',[ 'message'=> Session('error') ])
                            @endif
                           
                            <form action="{{url('/suppliers')}}" method="POST" enctype="multipart/form-data">
                                <table class="table">
                                    <td>
                                    @csrf
                                    <input type="hidden" name="id">
                                    <div class="form-group">
                                        <label for="SplCode">
                                            <h6>รหัสผู้จัดจำหน่าย</h6>
                                            <h6 class="h">SplCode</h6>
                                        </label>
                                        <input type="text" 
                                            class="form-control"  
                                            name="SplCode"
                                            style="width: 20rem;" 
                                            value="{{ old('SplCode') }}">
                                        @include('layouts.error', ['name' => 'SplCode'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplName">
                                            <h6>ชื่อผู้ผลิต</h6>
                                            <h6 class="h">SplName</h6>
                                        </label>
                                        <input type="text" 
                                            class="form-control" 
                                            style="width: 20rem;"
                                            name="SplName" 
                                            value="{{ old('SplName') }}">
                                        @include('layouts.error', ['name' => 'SplName'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplNameOTH">
                                            <h6>ชื่อผู้ผลิตอื่น ๆ</h6>
                                            <h6 class="h">SplNameOTH</h6>
                                        </label>
                                        <input type="text" 
                                            class="form-control" 
                                            style="width: 20rem;"
                                            name="SplNameOTH" 
                                            value="{{ old('SplNameOTH') }}">
                                        @include('layouts.error', ['name' => 'SplNameOTH'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplAddress1">
                                            <h6>ที่อยู่ที่ 1</h6>
                                            <h6 class="h">SplAddress1</h6>
                                        </label>
                                        <input type="text" 
                                            class="form-control" 
                                            style="width: 20rem;" 
                                            name="SplAddress1" 
                                            value="{{ old('SplAddress1') }}">
                                        @include('layouts.error', ['name' => 'SplAddress1'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplAddress2">
                                            
                                            <h6>ที่อยู่ที่2</h6>
                                            <h6 class="h">SplAddress2</h6>

                                        </label>
                                        <input type="text" 
                                            class="form-control"
                                            style="width: 20rem;"  
                                            name="SplAddress2" 
                                            value="{{ old('SplAddress2') }}">
                                        @include('layouts.error', ['name' => 'SplAddress2'])
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="SplTaxNo">
                                            
                                            <h6>หมายเลขภาษีต</h6>
                                            <h6 class="h">SplTaxNo</h6>
                                        </label>
                                        <input type="number" 
                                            class="form-control" 
                                            style="width: 20rem;"
                                            name="SplTaxNo" 
                                            value="{{ old('SplTaxNo') }}">
                                        @include('layouts.error', ['name' => 'SplTaxNo'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplTel">
                                            
                                            <h6>เบอร์โทรติดต่อ</h6>
                                            <h6 class="h">SplTel</h6>
                                        </label>
                                        <input type="number" 
                                            class="form-control"  
                                            style="width: 20rem;"
                                            name="SplTel" 
                                            value="{{ old('SplTel') }}">
                                        @include('layouts.error', ['name' => 'SplTel'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplEmail">
                                            
                                            <h6>อีเมล์ติดต่อ</h6>
                                            <h6 class="h">SplEmail</h6>
                                        </label>
                                        <input type="text" 
                                            class="form-control"
                                            style="width: 20rem;"  
                                            name="SplEmail" 
                                            value="{{ old('SplEmail') }}">
                                        @include('layouts.error', ['name' => 'SplEmail'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplOthinfo">
                                            
                                            <h6>ข้อมูลอื่น ๆ</h6>
                                            <h6 class="h">SplOthinfo</h6>
                                        </label>
                                        <input type="text" 
                                            class="form-control" 
                                            style="width: 20rem;"
                                            name="SplOthinfo" 
                                            value="{{ old('SplOthinfo') }}">
                                        @include('layouts.error', ['name' => 'SplOthinfo'])
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="SplCraditterm">
                                            <h6>Supplier Card iterm</h6>
                                            <h6 class="h">SplCraditterm</h6>
                                            
                                        </label>
                                        <input type="text" 
                                            class="form-control"
                                            style="width: 20rem; "  
                                            name="SplCraditterm" 
                                            value="{{ old('SplCraditterm') }}">
                                        @include('layouts.error', ['name' => 'SplCraditterm'])
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="SplVatType">
                                            
                                            <h6>ประเภทภาษี</h6>
                                            <h6 class="h">SplVatType</h6>
                                        </label>
                                        <input type="text" 
                                            class="form-control"  
                                            style="width: 20rem;"
                                            name="SplVatType" 
                                            value="{{ old('SplVatType') }}">
                                        @include('layouts.error', ['name' => 'SplVatType'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplLimit">
                                            
                                            <h6>ข้อจำกัด</h6>
                                            <h6 class="h">SplLimit</h6>
                                        </label>
                                        <input type="text" 
                                            class="form-control" 
                                            style="width: 20rem;" 
                                            name="SplLimit" 
                                            value="{{ old('SplLimit') }}">
                                        @include('layouts.error', ['name' => 'SplLimit'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplAmt">

                                            <h6>จำนวนผู้ผลิต</h6>
                                            <h6 class="h">SplAmt</h6>
                                        </label>
                                        <input type="text" 
                                            class="form-control"
                                            style="width: 20rem;" 
                                            name="SplAmt" 
                                            value="{{ old('SplAmt') }}">
                                        @include('layouts.error', ['name' => 'SplAmt'])
                                    </div>

                                    <div class="form-group">
                                        <label for="PdtAge">
                                            
                                            <h6>Product Age</h6>
                                            <h6 class="h">PdtAge</h6>
                                        </label>
                                        <input type="text" 
                                            class="form-control"
                                            style="width: 20rem;"  
                                            name="PdtAge" 
                                            value="{{ old('PdtAge') }}">
                                        @include('layouts.error', ['name' => 'PdtAge'])
                                    </div>

                                    <div class="form-group">
                                        <label for="UnitType">
                                            <h6>Unit Type</h6>
                                            <h6 class="h">UnitType</h6>
                                            
                                        </label>
                                        <input type="text" 
                                            class="form-control"
                                            style="width: 20rem;" 
                                            name="UnitType" 
                                            value="{{ old('UnitType') }}">
                                        @include('layouts.error', ['name' => 'UnitType'])
                                    </div>
                                    
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label for="ContectName">
                                            
                                            <h6>ContectName</h6>
                                            <h6 class="h">ContectName</h6>
                                        </label>
                                        <input type="text" 
                                            class="form-control"  
                                            style="width: 20rem;"
                                            name="ContectName" 
                                            value="{{ old('ContectName') }}">
                                        @include('layouts.error', ['name' => 'ContectName'])
                                    </div>

                                    <div class="form-group">
                                        <label for="ContectTel">
                                            
                                            <h6>ContectTel</h6>
                                            <h6 class="h">ContectTel</h6>
                                        </label>
                                        <input type="text" 
                                            class="form-control" 
                                            style="width: 20rem;" 
                                            name="ContectTel" 
                                            value="{{ old('ContectTel') }}">
                                        @include('layouts.error', ['name' => 'ContectTel'])
                                    </div>

                                    <div class="form-group">
                                        <label for="ContectEmail">

                                            <h6>ContectEmail</h6>
                                            <h6 class="h">ContectEmail</h6>
                                        </label>
                                        <input type="text" 
                                            class="form-control"
                                            style="width: 20rem;" 
                                            name="ContectEmail" 
                                            value="{{ old('ContectEmail') }}">
                                        @include('layouts.error', ['name' => 'ContectEmail'])
                                    </div>

                                    <div class="form-group">
                                        <label for="ContectOth1">
                                            
                                            <h6>ContectOth1</h6>
                                            <h6 class="h">ContectOth1</h6>
                                        </label>
                                        <input type="text" 
                                            class="form-control"
                                            style="width: 20rem;"  
                                            name="ContectOth1" 
                                            value="{{ old('ContectOth1') }}">
                                        @include('layouts.error', ['name' => 'ContectOth1'])
                                    </div>

                                    <div class="form-group">
                                        <label for="ContectOth2">
                                            <h6>ContectOth2</h6>
                                            <h6 class="h">ContectOth2</h6>
                                            
                                        </label>
                                        <input type="text" 
                                            class="form-control"
                                            style="width: 20rem;" 
                                            name="ContectOth2" 
                                            value="{{ old('ContectOth2') }}">
                                        @include('layouts.error', ['name' => 'ContectOth2'])
                                    </div>
                                    
                                </td>
                            </table>
                            <div class="form-group">
                                <button type="submit" class="btn text-white btn-block" style="background: linear-gradient(to right, #ff5858, #f857a6);">Add Supplier</button>
                            </div>
                            </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
