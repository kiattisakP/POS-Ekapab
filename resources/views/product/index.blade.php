@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="min-height: 85vh">
                <div class="card-header bg-white">
                    <form action="{{ route('products.index') }}" method="get">
                        <div class="row">  
                            <div class="col"><h4 class="font-weight-bold">รายการสินค้า</h4></div>
                            <div class="col" style="width: 50px;">
                                <input type="text" 
                                        name="search"
                                        style="width: 300px;"
                                        class="form-control form-control-sm col-sm-12 float-right"
                                        placeholder="ค้นหา" 
                                        onblur="this.form.submit()">
                            </div>
                            
                        </div>
                    </form>
                </div>
                <div class="card-body">
                            <table class="table">
                                <thead>
                                    <div class="row">
                                        <hr>
                                        <div class="col d-flex">
                                                <a href="{{ url('/products/create')}}"
                                                    class="btn btn-sm-2 ml-auto text-white" id="btn" style="background: linear-gradient(to right, #ff5858, #f857a6); width: 120px"> 
                                                    <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;เพิ่มสินค้า
                                                </a>
                                            </div>
                                    </div>
                                    
                                    <tr >
                                        <th id="f14">SKU</th>
                                        <th id="f14">IMG</th>
                                        <th id="f14">Name</th>
                                        <th id="f14">Qty</th>
                                        <th id="f14">Type</th>
                                        <th id="f14">พนักงาน</th>
                                        <th id="f14">วันที่/เวลาเพิ่มสินค้า</th>
                                        <th id="f14"> </th>  
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($product as $pdt)
                                            <tr >
                                                <td id="f16">{{ $pdt->PdtSKUCode }}</td>
                                                <td id="f16">                                                                     
                                                    <img class="img"
                                                        style="width: 70px; height: 60px;"
                                                        src="{{ $pdt->image }}"
                                                        alt="ไม่มีภาพ" >
                                                </td>
                                                <td id="f16">{{ $pdt->PdtName}}</td>
                                                <td id="f16">{{ $pdt->PdtStkQty }}</td>
                                                <td id="f16">{{ $pdt->PdtType }}</td>
                                                <td id="f16">{{ $pdt->user_name }}</td> 
                                                <td id="f16">{{ $pdt->created_at }}</td>
                                                <td class="pull-right">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a type="button" 
                                                            href="{{ route('view_product', $pdt->id) }}" 
                                                            class="btn btn-success"  
                                                            style="border: 0"
                                                            title="view PRODUCT">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>
                                                        <a type="button" 
                                                            href="{{ route('products.edit', $pdt->id) }}" 
                                                            class="btn btn-success"
                                                            style="border: 0"  
                                                            title="edit PRODUCT">
                                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </a>
                                                        <a type="button" 
                                                            href="{{ route('delete_product', $pdt->id) }}" 
                                                            class="btn btn-danger" 
                                                            style="border: 0" 
                                                            title="DELETE PRODUCT">
                                                            
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                        </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('style')
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

    </style>
    @endpush