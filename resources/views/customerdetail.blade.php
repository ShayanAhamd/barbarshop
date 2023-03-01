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
                            <li class="breadcrumb-item active" aria-current="page">Customer Details</li>
                        </ol>
                    </nav>
                    <!--* Breadcrums *-->
                </div>

                <section id="content">
                    <div class="pt-3">
                        <div class="d-flex justify-content-between align-content-center">
                            <div>
                                <h4 class="sub-head my-2">Customer Details & Transaction History</h4>
                                <h6 class="table-heading mb-1">
                                    Customer Details:
                                </h6>
                            </div>
                            @php
                            $id = session()->get('customer_id');
                            @endphp
                            <a class="text-decoration-none" href="{{url('customers')}}">
                                <button class="btn-orang">Back</button>
                            </a>
                        </div>
                        <div class="table-responsive px-3">
                            <table class="customer-details-table">
                                <tr
                                    class="d-flex justify-content-between align-items-center flex-md-row gap-2 flex-column">
                                    <td class="w-md-50">
                                        <table class="details-sub-table w-100">
                                            <tr>
                                                <td style="width: 35%;">Title:</td>
                                                <td style="width: 65%;">{{$customers->title}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">First Name:</td>
                                                <td style="width: 65%;">{{$customers->first_name}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Last Name:</td>
                                                <td style="width: 65%;">{{$customers->last_name}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Business Name:</td>
                                                <td style="width: 65%;">{{$customers->businessname}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Date Of Birth:</td>
                                                <td style="width: 65%;">{{$customers->dob}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Contact Number 1:</td>
                                                <td style="width: 65%;">{{$customers->contact_no1}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Contact Number 2:</td>
                                                <td style="width: 65%;">{{$customers->contact_no2}}</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="w-md-50">
                                        <table class="details-sub-table w-100">
                                            <tr>
                                                <td style="width: 35%;">Email:</td>
                                                <td style="width: 65%;">{{$customers->email}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Address:</td>
                                                <td style="width: 65%;">{{$customers->address}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Town:</td>
                                                <td style="width: 65%;">{{$customers->town}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Type:</td>
                                                <td style="width: 65%;">{{$customers->type}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 35%;">Notes:</td>
                                                <td style="width: 65%;">{{$customers->notes}}</td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="w-100 my-3">
                            <h6 class="table-heading mb-1">
                                Additional Card Member
                            </h6>
                            <div class="mx-3">
                                <div class="customer-details-table py-2 px-3">
                                    <p class="">No additional Customer added</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 my-3">
                            <h6 class="table-heading mb-1">
                                Additional Card Member
                            </h6>
                            <div class="mx-3">
                                <div class="customer-details-table py-2 px-3">
                                    <p class="profile-description">No additional Customer added</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 my-3">
                            <h6 class="table-heading mb-1">
                                Customer Order History
                            </h6>
                            <div class="mx-3">
                                {{-- <div class="customer-transction-history">
                                    <div class="history-fill">
                                        <p class="profile-description">Total Discount</p>
                                    </div>
                                    <div class="history-value">
                                        <p class="profile-description">$ 500</p>
                                    </div>
                                    <div class="history-fill">
                                        <p class="profile-description">Total Discount</p>
                                    </div>
                                    <div class="history-value">
                                        <p class="profile-description">$ 500</p>
                                    </div>
                                    <div class="history-fill">
                                        <p class="profile-description">Total Discount</p>
                                    </div>
                                    <div class="history-value">
                                        <p class="profile-description">$ 500</p>
                                    </div>
                                    <div class="history-fill">
                                        <p class="profile-description">Total Discount</p>
                                    </div>
                                    <div class="history-value">
                                        <p class="profile-description">$ 500</p>
                                    </div>
                                </div> --}}
                                <div class="table-responsive mt-3">
                                    <table class="customer-table2">
                                        <thead>
                                            <tr>
                                                <th style="width: 15%;">Order No</th>
                                                <th style="width: 15%;">Order Tracking No</th>
                                                <th style="width: 10%;">Order Date</th>
                                                {{-- <th scope="row" style="width: 45%;">Store</th> --}}
                                                <th style="width: 10%;">Total</th>
                                                <th class="text-end" scope="col" style="width: 10%;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                                <td>{{$order['id']}}</td>
                                                <td>{{$order['tracking_no']}}</td>
                                                <td>{{$order['order_date']}}</td>
                                                <td>{{$order['total_amount']}}</td>
                                                <td class="text-end">
                                                    <a href="{{url('view-order/'.$order['id'])}}">
                                                        <button class="btn-orang1">View</button>
                                                    </a>

                                                </td>
                                            </tr>
                                            @endforeach
                                            {{-- <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr> --}}

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="w-100 my-3">
                            <h6 class="table-heading mb-1">
                                Customer Transaction History
                            </h6>
                            <div class="mx-3">
                                <div class="table-responsive mt-3">
                                    <table class="customer-table2">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Staff</th>
                                                <th>Discount </th>
                                                <th>Total</th>
                                                <th scope="row">Store</th>
                                                <th class="text-end" scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </section>

                {{-- <section id="content">
                    <div class="pt-3">
                        <h4 class="sub-head my-2">Customer Order Details</h4>
                        <h6 class="table-heading mb-1">
                            Orders Details:
                        </h6>
                            <table class="table table-striped table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">Order No</th>
                                    <th scope="col">Order Date</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                  <tr>
                                    <th scope="row">{{ $order['id'] }}</th>
                                    <td>{{ $order['order_date'] }}</td>
                                    <td>{{ $order['total_amount'] }}</td>
                                    <td>View</td>
                                  </tr>
                                 @endforeach
                                </tbody>
                              </table>

                         <div class="w-100 my-3">
                            <h6 class="table-heading mb-1">
                                Additional Card Member
                            </h6>
                            <div class="mx-3">
                                <div class="customer-details-table py-2 px-3">
                                    <p class="">No additional Customer added</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 my-3">
                            <h6 class="table-heading mb-1">
                                Additional Card Member
                            </h6>
                            <div class="mx-3">
                                <div class="customer-details-table py-2 px-3">
                                    <p class="profile-description">No additional Customer added</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 my-3">
                            <h6 class="table-heading mb-1">
                                Customer Transaction History
                            </h6>
                            <div class="mx-3">
                                <div class="customer-transction-history">
                                    <div class="history-fill">
                                        <p class="profile-description">Total Discount</p>
                                    </div>
                                    <div class="history-value">
                                        <p class="profile-description">$ 500</p>
                                    </div>
                                    <div class="history-fill">
                                        <p class="profile-description">Total Discount</p>
                                    </div>
                                    <div class="history-value">
                                        <p class="profile-description">$ 500</p>
                                    </div>
                                    <div class="history-fill">
                                        <p class="profile-description">Total Discount</p>
                                    </div>
                                    <div class="history-value">
                                        <p class="profile-description">$ 500</p>
                                    </div>
                                    <div class="history-fill">
                                        <p class="profile-description">Total Discount</p>
                                    </div>
                                    <div class="history-value">
                                        <p class="profile-description">$ 500</p>
                                    </div>
                                </div>
                                <div class="table-responsive mt-3">
                                    <table class="customer-table2">
                                        <thead>
                                            <tr>
                                                <th style="width: 15%;">Date</th>
                                                <th style="width: 10%;">Staff</th>
                                                <th scope="row" style="width: 45%;">Store</th>
                                                <th style="width: 10%;">Discount </th>
                                                <th style="width: 10%;">Total</th>
                                                <th class="text-end" scope="col" style="width: 10%;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 my-3">
                            <h6 class="table-heading mb-1">
                                Customer Transaction History
                            </h6>
                            <div class="mx-3">
                                <div class="table-responsive mt-3">
                                    <table class="customer-table2">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Staff</th>
                                                <th>Discount </th>
                                                <th>Total</th>
                                                <th scope="row">Store</th>
                                                <th class="text-end" scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12/12/2021 - 10:30 am</td>
                                                <td>Tina</td>
                                                <td>Golden Cissor</td>
                                                <td>10%</td>
                                                <td>$ 100</td>
                                                <td class="text-end">
                                                    <button class="btn-orang1 ">Select</button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
            </div>
        </div>
    </div>
 @endsection
