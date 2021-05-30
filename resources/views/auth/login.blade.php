@extends('layouts.applogin')
@section('content')
<div class="back">
    <div class="page-center-in">
    <div class="container justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-6 " >
                <div class="card" style="width: 26rem; height: 20rem; margin-top: 150px;">
                    <div class="card-body">
                        <div class="h3" style="text-align: center;">
                            <h3>Point Of Sale</h3>
                            <div class="p">
                                <p>ระบบชื้อขายหน้าร้าน</p>
                            </div>
                        </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                
                                    <div class="form-group row justify-content-center">
                                        <div class="col-md-16">
                                            <input id="username" 
                                                    type="text" 
                                                    class="form-control @error('username') is-invalid @enderror" 
                                                    name="username" 
                                                    size= "30"
                                                    value="{{ old('username') }}" 
                                                    placeholder="รหัสพนักงาน"
                                                    required autocomplete="username">
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <div class="col-md-16">
                                            <input id="password" 
                                                    type="password" 
                                                    class="form-control @error('password') is-invalid @enderror" 
                                                    name="password" 
                                                    size= "30"
                                                    placeholder="รหัสผ่าน"
                                                    required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0 justify-content-center" >
                                        <div class="col-md-16 ">
                                                <button type="submit" class="btn custom text-white "  style="background: linear-gradient(to right, #ff5858, #f857a6);">
                                                    <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;เข้าสู่ระบบ
                                                </button>   
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
