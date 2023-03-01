@extends('layouts.layout')
@section('content')
    <div class="wrapper container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="top-header">
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
                            <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
                        </ol>
                    </nav>
                    <!--* Breadcrums *-->
                </div>
                <section id="content">
                    <div class="py-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    @foreach($subcategories as $key => $subcategory)
                                    <div class="col-lg-3 col-md-4 col-sm-6" onclick="subcategories({{$subcategory->id}})" style="cursor: pointer;">
                                        <div class="service-col">
                                            <p  class="col-head">{{$subcategory->name}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
           {{-- Cart Area --}}
           @include('layouts.cart');
        </div>
    </div>    
@endsection
@section('scripts')
<script>
    function subcategories(subcategory_id) {
        $.ajax({
            url: '{{ route('products') }}',
            type: 'get',
            data: {
            subcategory_id:subcategory_id,
            },
            dataType: 'json', 
            success: function (data) {
            $('body').html(data.html);
                console.log(data);
            
            }
        });

    }
</script>
@endsection