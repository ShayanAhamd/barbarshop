@extends('layouts.layout')
@section('content')
<div class="wrapper-2 container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="top-header" style="margin: 0 -0.75rem;">
                   {{-- Include Header --}}
                   @include('layouts.header')
                    <!-- Breadcrums -->
                    <nav id="breadcrums" class="pb-1" style="
                        --bs-breadcrumb-divider: url(
                          &#34;data:image/svg + xml,
                          %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='currentColor'/%3E%3C/svg%3E&#34;
                        );
                      " aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Order Details</li>
                        </ol>
                    </nav>
                    <!--* Breadcrums *-->
                </div>


                <section id="content">
                    <div class="pt-3">
                        <div class="d-flex justify-content-between align-content-center">
                            <div>
                                <h4 class="sub-head my-2">Customer Order Details</h4>
                                <h6 class="table-heading mb-1">
                                    Orders Details:
                                </h6>
                            </div>
                            @php
                            $id = session()->get('customer_id');
                            @endphp
                            <a class="text-decoration-none" href="{{url('customerDetail/'.$id)}}">
                                <button class="btn-orang">Back</button>
                            </a>
                        </div>
                      
                       
                            <div class="table-responsive mt-3">
                                <table class="customer-table2">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Original Price</th>
                                            <th>Discounted Price</th>
                                            <th>Discount Name</th>
                                            <th>Discount Amount</th>
                                            <th>Discount Percentage</th>
                                            <th>Note</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders->orderitems as $item)
                                        <tr>
                                            <td>{{$item->products->name}}</td>
                                            <td>{{$item->qty}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->disc_price}}</td>
                                            <td>{{$item->discount_name}}</td>
                                            <td>{{$item->disc_amount}}</td>
                                            <td>{{$item->disc_percentage}}</td>
                                            <td>{{$item->notes}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                            <div class=" w-100 my-3">
                                <div class="customer-transction-history">
                                    <div class="history-fill">
                                        <p class="profile-description">Total Discount</p>
                                    </div>
                                    <div class="history-value">
                                        <p class="profile-description">${{$orders->totaldiscount}}</p>
                                    </div>
                                    <div class="history-fill">
                                        <p class="profile-description">Total Amount</p>
                                    </div>
                                    <div class="history-value">
                                        <p class="profile-description">$ {{ $orders->total_amount }}</p>
                                    </div>
                                    <div class="history-fill">
                                        <p class="profile-description">Grand Total</p>
                                    </div>
                                    <div class="history-value">
                                        <p class="profile-description">$ {{ $orders->duetotal }}</p>
                                    </div>
                                </div>    
                            </div>  
                             
                    </div>
                </section>
            </div>
        </div>
</div>    
@endsection
@section('scripts')    