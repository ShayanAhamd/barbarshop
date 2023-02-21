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
                            Order Detail
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
                                <img src="{{asset('assets/icons/ai.svg')}}" alt="">
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
                                
                                <h4 class="px-2 mt-4">Grand Total:<span class="ms-2">${{ $orders->total_amount }}</span> </h4>
                            </div>
                             
                    </div>
                </section>
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