@extends('layouts.layout')
@section('content')
<div class="wrapper container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="top-header">
                    {{-- Include Header --}}
                    @include('layouts.header')
                    <div class="d-flex justify-content-between align-content-center">
                        <!-- Breadcrums -->
                        <nav id="breadcrums" class="pb-1"
                            style="
                            --bs-breadcrumb-divider: url(
                            &#34;data:image/svg + xml,
                            %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='currentColor'/%3E%3C/svg%3E&#34;
                            );
                        "
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('logout') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                        <!--* Breadcrums *-->
                        <div class="content-head mb-2">
                            <p class=".col-head"><span class="fs-6 fw-bold">Customer:</span>&nbsp;
                                {{ $customers != '' ? $customers->first_name : '' }}</p>
                            <p class=".col-head"><span class="fs-6 fw-bold">Credit:</span>&nbsp;$250</p>
                        </div>
                    </div>
                </div>

                <section id="content">
                    <div class="py-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    @if (!empty($customers))
                                        @foreach ($categories as $key => $category)
                                            <div class="col-lg-3 col-md-4 col-sm-6"
                                                onclick="categories({{ $category->id }})" style="cursor: pointer;">
                                                <div class="service-col">
                                                    <p class="col-head">{{ $category->name }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        @foreach ($categories as $key => $category)
                                            <div class="col-lg-3 col-md-4 col-sm-6" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                <div class="service-col">
                                                    <a style="text-decoration: none;" href="#"
                                                        class="col-head">{{ $category->name }}</a>
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
            <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content p-2 pb-4">
                        <div class="modal-header d-flex w-100 border-bottom-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <span class="h5">Please Select Coustomer First</span>
                        <button type="button" data-bs-dismiss="modal" class="btn-orang px-5 py-3"
                            onclick="window.location = '{{ route('customers') }}'">OK</button>
                    </div>
                </div>
            </div>
            {{-- Cart Area --}}
            @include('layouts.cart')
        </div>
    </div>    
@endsection
@section('scripts')
    <script>
        function categories(category_id) {
            $.ajax({
                url: '{{ route('subcategories') }}',
                type: 'get',
                data: {
                    category_id: category_id,
                },
                dataType: 'json',
                success: function(data) {
                    $('body').html(data.html);
                    // window.history.pushState("Details", "Title", "{{ url('subcategories') }}");
                }
            });

        }
</script>
@endsection    
