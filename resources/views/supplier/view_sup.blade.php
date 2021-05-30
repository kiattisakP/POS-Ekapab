@extends('layouts.app')
@section('content')
<div class="container mb-5">
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col">
                <div class="row">  
                    <div class="col-md-12 ">
                        <div class="pull-left">
                            <h4 class="font-weight-bold">Supplier : {{ $sup->SplName }} </h4>
                        </div>
                        <div class="pull-right">
                            <a type="button" 
                                href="{{route('suppliers.index')}}"
                                class="btn btn-info"
                                style="border: 0"
                                title="Product">Supplier
                            </a>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <td>
                <div class="row">
                    <h5>Supplier Code :</h5>&nbsp;<h5>{{ $sup->SplCode }}</h5>
                </div>
                <div class="row">
                    <h5>Name :</h5>&nbsp;<h5>{{ $sup->SplName }}</h5><hr>
                </div>
                <div class="row">
                    <h5>NameOTH :</h5>&nbsp;<h5>{{ $sup->SplNameOTH }}</h5><hr>
                </div>
                <div class="row">  
                    <h5>Address1 :</h5>&nbsp;<h5>{{ $sup->SplAddress1 }}</h5><hr>
                </div>
                <div class="row">
                    <h5>Address2 :</h5>&nbsp;<h5>{{ $sup->SplAddress1 }}</h5><hr>
                </div>
                <div class="row">
                    <h5>Supplier Tax :</h5>&nbsp;<h5>{{ $sup->SplTaxNo }}</h5><hr>
                </div>
                <div class="row">
                    <h5>Tel :</h5>&nbsp;<h5>{{ $sup->SplTel }}</h5><hr>
                </div>

                <div class="row">
                    <h5>Emill :</h5>&nbsp;<h5>{{ $sup->SplEmail }}</h5><hr>
                </div>
                <div class="row">
                    <h5>Supplier Other Info :</h5>&nbsp;<h5>{{ $sup->SplOthinfo }}</h5><hr>
                </div>
                <div class="row">
                    <h5>Supplier Vat Type :</h5>&nbsp;<h5>{{ $sup->SplVatType }}</h5><hr>
                </div>
                <div class="row">
                    <h5>Supplier Limit :</h5>&nbsp;<h5>{{ $sup->SplLimit }}</h5><hr>
                </div>
                <div class="row">
                    <h5>Supplier Amount :</h5>&nbsp;<h5>{{ $sup->SplAmt }}</h5><hr>
                </div>
                <div class="row">
                    <h5>Created :</h5>&nbsp;<h5>{{ $sup->created_at }}</h5><hr>
                </div>
                <div class="row">
                    <h5>Updated :</h5>&nbsp;<h5>{{ $sup->updated_at }}</h5><hr>
                </div>
            </td>
            <td>
                <div class="row">
                    <h5>ContectName :</h5>&nbsp;<h5>{{ $supcon->ContectName }}</h5><hr>
                </div>
                <div class="row">
                    <h5>ContectTel :</h5>&nbsp;<h5>{{ $supcon->ContectTel }}</h5><hr>
                </div>
                <div class="row">
                    <h5>ContectEmail :</h5>&nbsp;<h5>{{ $supcon->ContectEmail }}</h5><hr>
                </div>
            </td>
                </table>
        </div>
    </div>
@endsection