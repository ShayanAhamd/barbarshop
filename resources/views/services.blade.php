<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
</head>

<body>
    <div class="wrapper container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="top-header">
                    <header class="header pt-4 pb-3">
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
                            Services
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
                                <a href="{{route('logout')}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.7502 21C12.7502 21.414 12.4142 21.75 12.0002 21.75H8.00024C5.38124 21.75 3.25024 19.619 3.25024 17V7C3.25024 4.381 5.38124 2.25 8.00024 2.25H12.0002C12.4142 2.25 12.7502 2.586 12.7502 3C12.7502 3.414 12.4142 3.75 12.0002 3.75H8.00024C6.20824 3.75 4.75024 5.208 4.75024 7V17C4.75024 18.792 6.20824 20.25 8.00024 20.25H12.0002C12.4142 20.25 12.7502 20.586 12.7502 21ZM20.5302 11.47L16.5302 7.46997C16.2372 7.17697 15.7622 7.17697 15.4692 7.46997C15.1762 7.76297 15.1762 8.23801 15.4692 8.53101L18.1892 11.251H10.0002C9.58624 11.251 9.25024 11.587 9.25024 12.001C9.25024 12.415 9.58624 12.751 10.0002 12.751H18.1892L15.4692 15.4709C15.1762 15.7639 15.1762 16.239 15.4692 16.532C15.6152 16.678 15.8072 16.752 15.9992 16.752C16.1912 16.752 16.3832 16.679 16.5292 16.532L20.5292 12.532C20.8232 12.237 20.8232 11.763 20.5302 11.47Z"
                                        fill="#1F1F1F" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!--# SIDEBAR *-->
                    </header>
                    <div class="d-flex justify-content-between align-content-center">
                        <!-- Breadcrums -->
                        <nav id="breadcrums" class="pb-1" style="
                            --bs-breadcrumb-divider: url(
                            &#34;data:image/svg + xml,
                            %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='currentColor'/%3E%3C/svg%3E&#34;
                            );
                        " aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('logout')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                        <!--* Breadcrums *-->
                        <div class="content-head mb-2">
                            <p class=".col-head"><span class="fs-6 fw-bold">Customer:</span>&nbsp; {{ $customers !=""  ? $customers->first_name : "" }}</p>
                            <p class=".col-head"><span class="fs-6 fw-bold">Credit:</span>&nbsp;$250</p>
                        </div>
                    </div>
                </div>

                <section id="content">
                    <div class="py-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    @if(!empty($customers))
                                    @foreach($categories as $key => $category)
                                    <div class="col-lg-3 col-md-4 col-sm-6" onclick="categories({{$category->id}})" style="cursor: pointer;">
                                        <div class="service-col">
                                            <p  class="col-head">{{$category->name}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    @foreach($categories as $key => $category)
                                    <div class="col-lg-3 col-md-4 col-sm-6" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <div class="service-col">
                                            <a style="text-decoration: none;" href="#" class="col-head">{{$category->name}}</a>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content p-2 pb-4">
                        <div class="modal-header d-flex w-100 border-bottom-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <span class="h5">Please Select Coustomer First</span>
                        <button type="button" data-bs-dismiss="modal" class="btn-orang px-5 py-3" onclick="window.location = '{{route('customers')}}'">OK</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-lg-0">
                <div class="content-right">
                    <div class="content-right-head">
                        <a style="text-decoration: none" class="head-icon text-center" href="{{route('customers')}}">
                            <div class="head-icon text-center">
                                <span>
                                    <svg width="30" height="27" viewBox="0 0 30 27" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 14.25C18.9285 14.25 22.125 11.0535 22.125 7.125C22.125 3.1965 18.9285 0 15 0C11.0715 0 7.875 3.1965 7.875 7.125C7.875 11.0535 11.0715 14.25 15 14.25ZM15 2.25C17.688 2.25 19.875 4.437 19.875 7.125C19.875 9.813 17.688 12 15 12C12.312 12 10.125 9.813 10.125 7.125C10.125 4.437 12.312 2.25 15 2.25ZM25.125 21.225V22.524C25.125 23.7645 24.6705 24.954 23.847 25.8735C23.6265 26.1225 23.3175 26.2485 23.0085 26.2485C22.74 26.2485 22.473 26.154 22.2585 25.962C21.795 25.548 21.756 24.837 22.17 24.3735C22.623 23.8665 22.8735 23.2095 22.8735 22.524V21.225C22.8735 19.3515 21.6315 17.7316 19.854 17.2861C19.563 17.2126 19.26 17.253 19.0125 17.3925C16.5195 18.7815 13.4655 18.7755 10.992 17.3985C10.7325 17.2515 10.4295 17.2139 10.143 17.2844C8.36404 17.7314 7.12198 19.3515 7.12198 21.225V22.524C7.12198 23.2095 7.37247 23.8665 7.82547 24.3735C8.23947 24.837 8.20053 25.548 7.73703 25.962C7.27503 26.3745 6.5625 26.337 6.1485 25.8735C5.325 24.954 4.87051 23.763 4.87051 22.524V21.225C4.87051 18.3195 6.81147 15.8025 9.59097 15.102C10.431 14.889 11.3475 15.0105 12.093 15.438C13.8795 16.431 16.0995 16.4369 17.907 15.4319C18.642 15.0104 19.5555 14.8875 20.4 15.1035C23.184 15.8025 25.125 18.3195 25.125 21.225ZM22.9395 1.00653C23.1465 0.421531 23.7885 0.113984 24.375 0.320984C26.6175 1.11298 28.125 3.2445 28.125 5.625C28.125 7.224 27.441 8.75107 26.25 9.81757C26.034 10.0096 25.767 10.1039 25.5 10.1039C25.191 10.1039 24.8835 9.97794 24.6615 9.72894C24.2475 9.26544 24.2865 8.5545 24.75 8.1405C25.4655 7.5015 25.875 6.585 25.875 5.625C25.875 4.197 24.9705 2.91758 23.625 2.44208C23.0385 2.23508 22.7325 1.59153 22.9395 1.00653ZM29.625 17.3745V18.4576C29.625 19.0786 29.121 19.5826 28.5 19.5826C27.879 19.5826 27.375 19.0786 27.375 18.4576V17.3745C27.375 15.9 26.3985 14.625 25.0005 14.274C24.399 14.1225 24.0315 13.5119 24.183 12.9089C24.336 12.3059 24.9495 11.9416 25.548 12.0916C27.9495 12.6946 29.625 14.8665 29.625 17.3745ZM3.75 10.4835C2.559 9.41702 1.875 7.88995 1.875 6.29095C1.875 3.91045 3.3825 1.77894 5.625 0.986938C6.216 0.779938 6.85346 1.08749 7.06046 1.67249C7.26746 2.25899 6.9615 2.90103 6.375 3.10803C5.0295 3.58353 4.125 4.86295 4.125 6.29095C4.125 7.24945 4.5345 8.16596 5.25 8.80646C5.7135 9.22046 5.75253 9.93158 5.33853 10.3951C5.11803 10.6441 4.809 10.7701 4.5 10.7701C4.233 10.7701 3.9645 10.6755 3.75 10.4835ZM4.99951 14.9399C3.60151 15.2909 2.625 16.566 2.625 18.0405V19.125C2.625 19.746 2.121 20.25 1.5 20.25C0.879 20.25 0.375 19.746 0.375 19.125V18.0419C0.375 15.5339 2.05203 13.362 4.45203 12.759C5.05353 12.612 5.66549 12.9735 5.81699 13.5765C5.96849 14.1765 5.60251 14.7884 4.99951 14.9399Z"
                                            fill="#3A3B3F" />
                                    </svg>
                                </span>
                                <p class="profile-description text-nowrap">Customers</p>
                            </div>
                        </a>    
                        <div class="head-icon text-center">
                            <span>
                                <svg width="31" height="30" viewBox="0 0 31 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M28.0405 12.265L18.2395 2.46393C16.894 1.11843 15.1045 0.377441 13.2025 0.377441H6.50195C3.39995 0.377441 0.876953 2.90044 0.876953 6.00244V12.7014C0.876953 14.6049 1.61794 16.3929 2.96344 17.7384L12.7644 27.5395C14.1534 28.9285 15.9774 29.6229 17.8029 29.6229C19.6269 29.6229 21.4524 28.9285 22.84 27.5395L28.039 22.3404C30.8185 19.5624 30.8185 15.043 28.0405 12.265ZM26.449 20.7505L21.25 25.9494C19.3465 27.8499 16.2549 27.8484 14.3559 25.9494L4.55495 16.1485C3.64745 15.241 3.12695 13.9854 3.12695 12.7014V6.00244C3.12695 4.14094 4.64045 2.62744 6.50195 2.62744H13.201C14.4835 2.62744 15.7405 3.14798 16.648 4.05548L26.449 13.8564C28.3495 15.7569 28.3495 18.85 26.449 20.7505ZM10.252 8.25244C10.252 9.08044 9.57995 9.75244 8.75195 9.75244C7.92395 9.75244 7.25195 9.08044 7.25195 8.25244C7.25195 7.42444 7.92395 6.75244 8.75195 6.75244C9.57995 6.75244 10.252 7.42444 10.252 8.25244Z"
                                        fill="#3A3B3F" />
                                </svg>
                            </span>
                            <p class="profile-description text-nowrap">Orders</p>
                        </div>
                        <div class="head-icon text-center">
                            <span>
                                <svg width="30" height="28" viewBox="0 0 30 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.875 11C7.875 10.379 8.379 9.875 9 9.875H21C21.621 9.875 22.125 10.379 22.125 11C22.125 11.621 21.621 12.125 21 12.125H9C8.379 12.125 7.875 11.621 7.875 11ZM10.5 7.625H19.5C20.121 7.625 20.625 7.121 20.625 6.5C20.625 5.879 20.121 5.375 19.5 5.375H10.5C9.879 5.375 9.375 5.879 9.375 6.5C9.375 7.121 9.879 7.625 10.5 7.625ZM29.625 16.2306V20C29.625 23.9285 26.4285 27.125 22.5 27.125H7.5C3.5715 27.125 0.375 23.9285 0.375 20V16.2306C0.375 15.6246 0.472525 15.026 0.663025 14.4515L3.56552 5.74707C4.53602 2.83407 7.25249 0.875 10.3245 0.875H19.6755C22.7475 0.875 25.4625 2.83257 26.4345 5.74707L29.337 14.4515C29.5275 15.0245 29.625 15.6231 29.625 16.2306ZM3.05997 14.375H10.5C11.121 14.375 11.625 14.879 11.625 15.5C11.625 17.3615 13.1385 18.875 15 18.875C16.8615 18.875 18.375 17.3615 18.375 15.5C18.375 14.879 18.879 14.375 19.5 14.375H26.94L24.3015 6.45807C23.637 4.46457 21.7785 3.125 19.677 3.125H10.326C8.22446 3.125 6.36604 4.46457 5.70154 6.45807L3.05997 14.375ZM27.375 20V16.625H20.5125C19.989 19.1885 17.7165 21.125 15 21.125C12.2835 21.125 10.011 19.1885 9.48752 16.625H2.625V20C2.625 22.688 4.812 24.875 7.5 24.875H22.5C25.188 24.875 27.375 22.688 27.375 20Z"
                                        fill="#3A3B3F" />
                                </svg>
                            </span>
                            <p class="profile-description text-nowrap">Table Plan</p>
                        </div>
                    </div>
                    <div class="content-right-center">
                        <div class="m-auto text-center">
                            <span>
                                <svg width="69" height="69" viewBox="0 0 69 69" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M43.125 6.21729H25.875C15.1743 6.21729 6.46875 14.9228 6.46875 25.6235V42.8735C6.46875 53.5743 15.1743 62.2798 25.875 62.2798H43.125C53.8258 62.2798 62.5312 53.5743 62.5312 42.8735V25.6235C62.5312 14.9228 53.8258 6.21729 43.125 6.21729ZM58.2188 42.8735C58.2188 51.1967 51.4481 57.9673 43.125 57.9673H25.875C17.5519 57.9673 10.7812 51.1967 10.7812 42.8735V25.6235C10.7812 17.3004 17.5519 10.5298 25.875 10.5298H43.125C51.4481 10.5298 58.2188 17.3004 58.2188 25.6235V42.8735ZM48.1562 34.2485C48.1562 35.4388 47.1903 36.4048 46 36.4048H36.6562V45.7485C36.6562 46.9388 35.6902 47.9048 34.5 47.9048C33.3098 47.9048 32.3438 46.9388 32.3438 45.7485V36.4048H23C21.8097 36.4048 20.8438 35.4388 20.8438 34.2485C20.8438 33.0583 21.8097 32.0923 23 32.0923H32.3438V22.7485C32.3438 21.5583 33.3098 20.5923 34.5 20.5923C35.6902 20.5923 36.6562 21.5583 36.6562 22.7485V32.0923H46C47.1903 32.0923 48.1562 33.0583 48.1562 34.2485Z"
                                        fill="#41416E" />
                                </svg>
                            </span>
                            <p>add dish or drink</p>
                            <p>tap a product or service to add to the bill</p>
                        </div>
                    </div>
                    <div class="content-right-footer">
                        <div class="content-right-table">
                            <table class="right-table-text">
                                <tbody>
                                    <tr>
                                        <td scope="row">Items</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Total Discount</td>
                                        <td>$ 0.00</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Service Charges</td>
                                        <td>$00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="right-table-text">
                                <tbody>
                                    <tr>
                                        <td scope="row">Items</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Total Discount</td>
                                        <td>$ 0.00</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Service Charges</td>
                                        <td>$00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="content-right-footer-icon">
                            <div class="footer-icon">
                                <span>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 2.74854H9C5.14 2.74854 2 5.88954 2 9.74854V15.7485C2 19.6075 5.14 22.7485 9 22.7485H15C18.86 22.7485 22 19.6075 22 15.7485V9.74854C22 5.88954 18.86 2.74854 15 2.74854ZM20 15.7485C20 18.5055 17.757 20.7485 15 20.7485H9C6.243 20.7485 4 18.5055 4 15.7485V9.74854C4 6.99154 6.243 4.74854 9 4.74854H15C17.757 4.74854 20 6.99154 20 9.74854V15.7485ZM17 12.7485C17 13.3015 16.552 13.7485 16 13.7485H13V16.7485C13 17.3015 12.552 17.7485 12 17.7485C11.448 17.7485 11 17.3015 11 16.7485V13.7485H8C7.448 13.7485 7 13.3015 7 12.7485C7 12.1955 7.448 11.7485 8 11.7485H11V8.74854C11 8.19554 11.448 7.74854 12 7.74854C12.552 7.74854 13 8.19554 13 8.74854V11.7485H16C16.552 11.7485 17 12.1955 17 12.7485Z"
                                            fill="#3A3B3F" />
                                    </svg>
                                </span>
                                <p class="footer-icon-text">Misc Products</p>
                            </div>
                            <div class="footer-icon">
                                <span>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8 4.74854H16V6.74854H8V4.74854ZM18 6.74854H22V18.7485H18V22.7485H6V18.7485H2V6.74854H6V2.74854H18V6.74854ZM20 16.7485H18V14.7485H6V16.7485H4V8.74854H20V16.7485ZM8 16.7485H16V20.7485H8V16.7485ZM8 10.7485H6V12.7485H8V10.7485Z"
                                            fill="#3A3B3F" />
                                    </svg>
                                </span>
                                <p class="footer-icon-text">Print</p>
                            </div>
                            <div class="footer-icon">
                                <span>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 9.74854H11V15.7485H9V9.74854Z" fill="#3A3B3F" />
                                        <path d="M15 15.7485H13V9.74854H15V15.7485Z" fill="#3A3B3F" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M23 12.7485C23 18.8237 18.0751 23.7485 12 23.7485C5.92487 23.7485 1 18.8237 1 12.7485C1 6.6734 5.92487 1.74854 12 1.74854C18.0751 1.74854 23 6.6734 23 12.7485ZM21 12.7485C21 17.7191 16.9706 21.7485 12 21.7485C7.02944 21.7485 3 17.7191 3 12.7485C3 7.77797 7.02944 3.74854 12 3.74854C16.9706 3.74854 21 7.77797 21 12.7485Z"
                                            fill="#3A3B3F" />
                                    </svg>
                                </span>
                                <p class="footer-icon-text">Hold</p>
                            </div>
                            <div class="footer-icon">
                                <span>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M18.364 6.38457C21.8787 9.89929 21.8787 15.5978 18.364 19.1125C14.8492 22.6272 9.15076 22.6272 5.63604 19.1125C2.12132 15.5978 2.12132 9.89929 5.63604 6.38457C9.15076 2.86986 14.8492 2.86986 18.364 6.38457ZM16.1925 18.3553L6.39327 8.55602C4.33767 11.2978 4.55666 15.2047 7.05025 17.6983C9.54384 20.1919 13.4507 20.4109 16.1925 18.3553ZM16.9497 7.79879C19.4433 10.2924 19.6623 14.1992 17.6067 16.941L7.80749 7.14181C10.5493 5.0862 14.4562 5.3052 16.9497 7.79879Z"
                                            fill="#3A3B3F" />
                                    </svg>
                                </span>
                                <p class="footer-icon-text">No Sale</p>
                            </div>
                        </div>
                        <div class="content-right-footer-btn">
                            <button class="footer-btn" style="background: var(--red)">
                                <span>
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.75 3.99854H13.0807C12.7575 3.99854 12.4718 3.79305 12.369 3.4863L12.132 2.77374C11.9273 2.16099 11.355 1.74854 10.7092 1.74854H7.28998C6.64348 1.74854 6.07125 2.16107 5.86725 2.77457L5.63026 3.48557C5.52826 3.79232 5.24174 3.99854 4.91849 3.99854H2.25C1.836 3.99854 1.5 4.33379 1.5 4.74854C1.5 5.16329 1.836 5.49854 2.25 5.49854H3.04875L3.61198 13.948C3.71623 15.5185 5.03101 16.7485 6.60526 16.7485H11.3955C12.9697 16.7485 14.2845 15.5178 14.3887 13.948L14.952 5.49854H15.75C16.164 5.49854 16.5 5.16329 16.5 4.74854C16.5 4.33379 16.164 3.99854 15.75 3.99854ZM7.29076 3.24854L10.71 3.2478L10.947 3.96027C10.9515 3.97377 10.9582 3.98504 10.9635 3.99854H7.03798C7.04248 3.98504 7.05 3.97303 7.0545 3.95953L7.29076 3.24854ZM12.8918 13.8483C12.8393 14.6336 12.1822 15.2485 11.3947 15.2485H6.60452C5.81777 15.2485 5.16 14.6336 5.1075 13.8483L4.55173 5.49854H4.91927C4.99952 5.49854 5.07823 5.48802 5.15698 5.47977C5.18923 5.48427 5.21698 5.49854 5.25073 5.49854H12.7507C12.7837 5.49854 12.8122 5.48352 12.8445 5.47977C12.9232 5.48802 13.0012 5.49854 13.0822 5.49854H13.4497L12.8918 13.8483ZM11.25 8.49854V12.2485C11.25 12.6633 10.914 12.9985 10.5 12.9985C10.086 12.9985 9.75 12.6633 9.75 12.2485V8.49854C9.75 8.08379 10.086 7.74854 10.5 7.74854C10.914 7.74854 11.25 8.08379 11.25 8.49854ZM8.25 8.49854V12.2485C8.25 12.6633 7.914 12.9985 7.5 12.9985C7.086 12.9985 6.75 12.6633 6.75 12.2485V8.49854C6.75 8.08379 7.086 7.74854 7.5 7.74854C7.914 7.74854 8.25 8.08379 8.25 8.49854Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                Delete
                            </button>
                            <button class="footer-btn" style="background: var(--orang-2)">
                                <span>
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.6953 2.55275C15.1681 2.0255 14.4218 1.81855 13.6981 2.00005L3.86333 4.45851C2.55233 4.78626 1.67783 5.91429 1.68758 7.26579C1.69733 8.61729 2.58683 9.73247 3.90233 10.0422L7.38683 10.862L8.20659 14.3465C8.51634 15.662 9.63157 16.5515 10.9831 16.5612C10.9906 16.5612 10.9973 16.5612 11.0048 16.5612C12.3466 16.5612 13.4641 15.689 13.7903 14.3855L16.2488 4.5508C16.4296 3.8263 16.2226 3.08 15.6953 2.55275ZM15.1568 4.27623L12.6984 14.111C12.4516 15.095 11.6213 15.4243 10.9906 15.4355C10.3568 15.431 9.53406 15.0755 9.30156 14.0878L8.47356 10.5702L11.6476 7.39626C11.8674 7.17651 11.8674 6.82023 11.6476 6.60048C11.4279 6.38073 11.0716 6.38073 10.8518 6.60048L7.67783 9.77452L4.16033 8.94652C3.17258 8.71402 2.81708 7.89121 2.81258 7.25746C2.80808 6.62296 3.15232 5.79573 4.13707 5.54973L13.9711 3.09126C14.0513 3.07101 14.1323 3.06123 14.2118 3.06123C14.4668 3.06123 14.7129 3.16179 14.8996 3.34779C15.1449 3.59304 15.2408 3.94023 15.1568 4.27623Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                ORDER
                            </button>
                            <button class="footer-btn" style="background: var(--green)">
                                <span>
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.75 3.43604H5.25C3.28575 3.43604 1.6875 5.03429 1.6875 6.99854V11.4985C1.6875 13.4628 3.28575 15.061 5.25 15.061H12.75C14.7142 15.061 16.3125 13.4628 16.3125 11.4985V6.99854C16.3125 5.03429 14.7142 3.43604 12.75 3.43604ZM5.25 4.56104H12.75C14.094 4.56104 15.1875 5.65454 15.1875 6.99854V7.18604H2.8125V6.99854C2.8125 5.65454 3.906 4.56104 5.25 4.56104ZM12.75 13.936H5.25C3.906 13.936 2.8125 12.8425 2.8125 11.4985V8.31104H15.1875V11.4985C15.1875 12.8425 14.094 13.936 12.75 13.936ZM8.0625 11.4985C8.0625 11.809 7.8105 12.061 7.5 12.061H5.25C4.9395 12.061 4.6875 11.809 4.6875 11.4985C4.6875 11.188 4.9395 10.936 5.25 10.936H7.5C7.8105 10.936 8.0625 11.188 8.0625 11.4985Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                PAYMENT
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- bootstrap_5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!--* bootstrap_5 *-->
    <script>
        function categories(category_id) {
            $.ajax({
              url: '{{ route('subcategories') }}',
              type: 'get',
              data: {
                category_id:category_id,
              },
              dataType: 'json', 
              success: function (data) {
                $('body').html(data.html);
                // window.history.pushState("Details", "Title", "{{url('subcategories')}}");
              }
          });

        }
    </script>
</body>

</html>