

@extends('client.layout.layout')

@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block "><img src="{{asset('Assets/images/8.jfif')}}" alt="Nature" style="width:100%" height="100%"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 btn-secondary mb-4">place an order!!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Name of the Product">
                                    </div>
                                    <!-- <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="name of product">
                                    </div> -->
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Quarter">
                                    </div>
                                    
                                    <div class="col-sm-6 p-3" >
                                        <select class="form-control">
                                            <option value="0" selected="">Perishable/non-perishable</option>
                                            <option value="1">perishable</option>
                                            <option value="2">non-perishable</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-sm-6 p-3" >
                                        <select class="form-control">
                                            <option value="0" selected="">Quantity</option>
                                            <option value="1">1 bag</option>
                                            <option value="2">2 bag</option>
                                            <option value="1">3 bag</option>
                                            <option value="2">4 bag</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 p-4">
                                        <a href="#" class="btn btn-secondary btn-circle">
                                            <i class="fas fa-check"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @stop