@extends('layouts.app')

@section('content')
<div class="row m-0  bg-white vh-100">            
    <div class="col-md-6 d-md-block d-none p-0 mt-n1 vh-100 overflow-hidden text-center wrapper" style="background-color: #9DC08B">
        <img src="{{ asset('assets/img/about-img.svg') }}" alt="" class="my-4" width="75%" >
    </div>
    <div class="col-md-6 mt-4">               
        <a href="/" class="navbar-brand d-flex my-4">
            <div class="logo-main">
                <img src="{{ asset('assets/img/alphabeta.png') }}" width="100px" />
            </div>
            <h4 class="logo-title">Rumah Belajar Alphabeta</h4>
        </a>
        <div class="row align-items-center justify-content-center ">
            <div class="col-md-10">
                <div class="card shadow d-flex justify-content-center mt-3">
                    <div class="card-body">
                        <h2 class="mb-2 text-center">Login</h2>
                        <p class="text-center mb-3"> Login to Stay Connected </p>
                        <form role="form" method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" aria-describedby="username" placeholder=" ">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" aria-describedby="password" placeholder=" ">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary mt-3" >Login</button>
                            </div>
                        </form>

                    </div>
                </div>    
            </div>
        </div>
    </div>   
</div>
@endsection
