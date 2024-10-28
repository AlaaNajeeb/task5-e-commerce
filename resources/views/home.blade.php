@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>   
    </div>
<br><br>
    @if (Auth::check() && Auth::user()->role === 'admin') 
 
     <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">statistics: </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#"># orders: {{$tableCounts['orders']}}</a>          
             <div class="small text-white"><i class="fas fa-angle-right"></i> </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#"># products: {{$tableCounts['products']}}</a>          
             <div class="small text-white"><i class="fas fa-angle-right"></i> </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#"># categories: {{$tableCounts['categories']}}</a>          
             <div class="small text-white"><i class="fas fa-angle-right"></i> </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#"># users: {{$tableCounts['users']}}</a>          
             <div class="small text-white"><i class="fas fa-angle-right"></i> </div>
            </div>
        </div>
    </div>

</div>
@endif

@endsection

 