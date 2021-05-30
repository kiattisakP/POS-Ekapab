@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card " style="min-height: 85vh; ">
                <div class="card-header bg-white">
                    <form action="{{ route('suppliers.index') }}" method="get">
                        <div class="row">  
                            <div class="col"><h4 class="font-weight-bold">Supplier</h4></div>
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
                            <table class="table ">
                                <thead>
                                    <div class="row">
                                        <hr>
                                        <div class="col d-flex">
                                                <a href="{{ url('/suppliers/create')}}"
                                                    class="btn btn-sm-2 ml-auto text-white"  style="background: linear-gradient(to right, #ff5858, #f857a6);"> 
                                                    <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Supplier
                                                </a>
                                            </div>
                                    </div>
                                    
                                    <tr style="text-align:center">
                                        <th id="f14">SplCode</th>
                                        <th id="f14">Name</th>
                                        <th id="f14">Address</th>
                                        <th id="f14">Tel</th>
                                        <th id="f14">Emill</th>
                                        <th id="f14">Date/Time</th>
                                        <th id="f14"> </th>    
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($Supplier))
                                        @foreach($Supplier as $sup)
                                            <tr style="text-align:center">
                                                
                                                <td id="f16">{{ $sup->SplCode }}</td>
                                                <td id="f16">{{ $sup->SplName}}</td>
                                                <td id="f16">{{ $sup->SplAddress1 }}</td>
                                                <td id="f16">{{ $sup->SplTel}}</td>
                                                <td id="f16">{{ $sup->SplEmail}}</td>
                                                <td id="f16">{{ $sup->created_at }}</td>
                                                <td id="f16">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a type="button" 
                                                            href="{{ route('view_sup', $sup->id) }}"
                                                            class="btn btn-success"  
                                                            style="border: 0"
                                                            title="view Supplier">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>
                                                        <a type="button" 
                                                            href="{{ route('suppliers.edit', $sup->id) }}"
                                                            class="btn btn-success"
                                                            style="border: 0"  
                                                            title="edit Supplier">
                                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </a>
                                                        <a type="button" 
                                                            href="{{ route('delete_sup', $sup->id) }}"  
                                                            class="btn btn-danger" 
                                                            style="border: 0" 
                                                            title="DELETE Supplier">
                                                            
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                        </div>
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                </div>
                @else
                    <tr style="text-align:center">
                    <td colspan='9'>No Products Available</td>
                    </tr>
                @endif
                <div>
                    {{ $Supplier->links() }}
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