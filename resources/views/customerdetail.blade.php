<!DOCTYPE html>
<html lang="en">

<head>
   @include('layouts.header')
</head>

<body>
    <div class="wrapper-2 container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="top-header" style="margin: 0 -0.75rem;">
                    <header class="header pt-4 pb-0">
                        <!-- SIDEBAR -->
                        <h1 class="main-head" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                            aria-controls="offcanvasExample" style="cursor: pointer">
                            <svg class="mb-1" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="2 - Regular / menu">
                                    <path id="menu-Regular"
                                        d="M2.25 5C2.25 4.586 2.586 4.25 3 4.25H16C16.414 4.25 16.75 4.586 16.75 5C16.75 5.414 16.414 5.75 16 5.75H3C2.586 5.75 2.25 5.414 2.25 5ZM21 11.25H3C2.586 11.25 2.25 11.586 2.25 12C2.25 12.414 2.586 12.75 3 12.75H21C21.414 12.75 21.75 12.414 21.75 12C21.75 11.586 21.414 11.25 21 11.25ZM12 18.25H3C2.586 18.25 2.25 18.586 2.25 19C2.25 19.414 2.586 19.75 3 19.75H12C12.414 19.75 12.75 19.414 12.75 19C12.75 18.586 12.414 18.25 12 18.25Z"
                                        fill="#151515" />
                                </g>
                            </svg>
                            Customers
                        </h1>
                        <aside>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                                aria-labelledby="offcanvasExampleLabel" style="background: #f0bd70">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                                        Offcanvas
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div>
                                        Some text as placeholder. In real life you can have the
                                        elements you have chosen. Like, text, images, lists, etc.
                                    </div>
                                    <div class="dropdown mt-3">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown">
                                            Dropdown button
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li>
                                                <a class="dropdown-item" href="#">Another action</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <div class="d-flex justify-content-center align-content-center gap-3">
                            <div class="d-flex align-content-center flex-column">
                                <h6 class="profile-head">{{session()->get('business_name')}}</h6>
                                <p class="profile-description">Til-10pm| 28 Oct</p>
                            </div>
                            <div class="d-flex justify-content-center align-content-center gap-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.5301 20.469L16.8361 15.775C18.0301 14.344 18.7501 12.505 18.7501 10.5C18.7501 5.951 15.0491 2.25 10.5001 2.25C5.95112 2.25 2.25012 5.951 2.25012 10.5C2.25012 15.049 5.95112 18.75 10.5001 18.75C12.5051 18.75 14.3441 18.0301 15.7751 16.8361L20.4691 21.53C20.6151 21.676 20.8071 21.75 20.9991 21.75C21.1911 21.75 21.3831 21.677 21.5291 21.53C21.8231 21.237 21.8231 20.762 21.5301 20.469ZM3.75012 10.5C3.75012 6.778 6.77812 3.75 10.5001 3.75C14.2221 3.75 17.2501 6.778 17.2501 10.5C17.2501 14.222 14.2221 17.25 10.5001 17.25C6.77812 17.25 3.75012 14.222 3.75012 10.5Z"
                                        fill="#1F1F1F" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.7502 21C12.7502 21.414 12.4142 21.75 12.0002 21.75H8.00024C5.38124 21.75 3.25024 19.619 3.25024 17V7C3.25024 4.381 5.38124 2.25 8.00024 2.25H12.0002C12.4142 2.25 12.7502 2.586 12.7502 3C12.7502 3.414 12.4142 3.75 12.0002 3.75H8.00024C6.20824 3.75 4.75024 5.208 4.75024 7V17C4.75024 18.792 6.20824 20.25 8.00024 20.25H12.0002C12.4142 20.25 12.7502 20.586 12.7502 21ZM20.5302 11.47L16.5302 7.46997C16.2372 7.17697 15.7622 7.17697 15.4692 7.46997C15.1762 7.76297 15.1762 8.23801 15.4692 8.53101L18.1892 11.251H10.0002C9.58624 11.251 9.25024 11.587 9.25024 12.001C9.25024 12.415 9.58624 12.751 10.0002 12.751H18.1892L15.4692 15.4709C15.1762 15.7639 15.1762 16.239 15.4692 16.532C15.6152 16.678 15.8072 16.752 15.9992 16.752C16.1912 16.752 16.3832 16.679 16.5292 16.532L20.5292 12.532C20.8232 12.237 20.8232 11.763 20.5302 11.47Z"
                                        fill="#1F1F1F" />
                                </svg>
                            </div>
                        </div>

                        <!--# SIDEBAR *-->
                    </header>
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
    </div>


    <!-- bootstrap_5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!--* bootstrap_5 *-->
</body>

</html>