@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="min-height: 85vh">
                <div class="card-header bg-white font-weight-bold">เอกภาพอินเตอร์อิเล็คตริก</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                    @endif
                    You are logged in!
                    <br>
                    You are in the state :
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
