@extends('layouts.layout')
@section('content')
    <div class="wrapper container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="top-header">
                    {{-- Include Header --}}
                    @include('layouts.header')
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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $category->name }} </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $subcategory->name }} </li>
                        </ol>
                    </nav>
                    <!--* Breadcrums *-->
                </div>

                <section id="content">
                    <div class="py-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-lg-3 col-md-4 col-sm-6" onclick="addtocard({{ $product->id }})"
                                            style="cursor: pointer;">
                                            {{-- onclick="addtocard({{$product->id}})" --}}
                                            {{-- <a style="text-decoration: none" href="{{ route('add.to.cart',$product->id)}}"> --}}
                                            <div class="service-col big">
                                                <p class="col-head">{{ $product->name }}</p>
                                                <p class="col-price">$ {{ $product->price }}</p>
                                                <input name="one" id="chb1" type="radio" class="d-none">
                                            </div>
                                            {{-- </a> --}}
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
    {{--  for discount popup --}}
    <!-- {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <h5 class="mid-head" id="exampleModalLabel">
                    APPLY DISCOUNT
                </h5>
                <div class="box-body box-body-inner" id="discountslist">

                    @foreach ($discounts as $key => $discount)
                        <button type="button" class="btn-styleless"
                            onclick="discount('{{ $discount->name }}',{{ $discount->id }},{{ $discount->percentage }} )">

                            {{ $discount->name . ' [' . $discount->percentage . '%]' }}
                        </button>
                    @endforeach

                </div>

            </div>

        </div>
    </div>   --}} -->

    {{-- For payment Popup --}}
    <!-- {{-- <section id="content">
        <div class="modal fade" id="payment" tabindex="-1" aria-labelledby="paymentLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="pay-modal-content">
                    <div class="modal-body">
                        <div class="px-5">
                            <div class="row px-3">
                                <div class="col-md-3 bg-w p-3">
                                    <div class="mb-5">
                                        <p class="sub-head">Total Amount</p>
                                        @if (session('cart'))
                                            <p class="mid-head subtotal">$ {{ $subtotal }}</p>
                                        @else
                                            <p class="mid-head subtotal">$ 00.00</p>
                                        @endif
                                    </div>
                                    <div class="mb-2">
                                        <p class="profile-description">Service Charges</p>
                                        <p class="mid-head">$ 00.00</p>
                                    </div>
                                    <div class="mb-2">
                                        <p class="profile-description">Discount </p>
                                        @if (session('cart'))
                                            <p class="mid-head totalDiscount">$ {{ number_format($totaldiscount, 2) }}
                                            </p>
                                        @else
                                            <p class="mid-head">$ 00.00</p>
                                        @endif
                                    </div>
                                    <div class="mb-2">
                                        <p class="profile-description">Due Amount</p>
                                        @if (session('cart'))
                                            <p class="mid-head duePrice">$ {{ number_format($total, 2) }} </p>
                                        @else
                                            <p class="mid-head">$ 00.00</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class=" bg-w sub-head ">
                                        <p class="sub-head text-end py-3 px-4">
                                            $ 00.00
                                        </p>
                                    </div>
                                    <div class="d-flex align-content-center justify-content-between">
                                        <button type="button" class="pay-btn py-3">1</button>
                                        <button type="button" class="pay-btn py-3">2</button>
                                        <button type="button" class="pay-btn py-3">3</button>
                                        <button type="button" class="pay-btn py-3">$ 5</button>
                                    </div>
                                    <div class="d-flex align-content-center justify-content-between">
                                        <button type="button" class="pay-btn py-3">4</button>
                                        <button type="button" class="pay-btn py-3">5</button>
                                        <button type="button" class="pay-btn py-3">6</button>
                                        <button type="button" class="pay-btn py-3">$ 10</button>
                                    </div>
                                    <div class="d-flex align-content-center justify-content-between">
                                        <button type="button" class="pay-btn py-3">7</button>
                                        <button type="button" class="pay-btn py-3">8</button>
                                        <button type="button" class="pay-btn py-3">9</button>
                                        <button type="button" class="pay-btn py-3">$ 20</button>
                                    </div>
                                    <div class="d-flex align-content-center justify-content-between">
                                        <button type="button" class="pay-btn py-3">.</button>
                                        <button type="button" class="pay-btn py-3">0</button>
                                        <button type="button" class="pay-btn py-3">&#60;</button>
                                        <button type="button" class="pay-btn py-3">$ 50</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-8 offset-md-2">
                                    <div
                                        class="d-flex align-content-center justify-content-between gap-1 flex-md-wrap">
                                        <button type="buttonn" class="btn-orang px-5 py-2 rounded">Cash</button>
                                        <button type="buttonn" class="btn-orang px-5 py-2 rounded">Card</button>
                                        <button type="buttonn" class="btn-orang px-5 py-2 rounded">Online</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-8 offset-md-2">
                                    <div class="d-flex align-content-center justify-content-between">
                                        <div class="col-7">
                                            <textarea name="Comments" id="" class="w-100 text-area" placeholder="Comments"></textarea>
                                        </div>
                                        <div class="col-4 text-center">
                                            <div
                                                class="d-flex flex-column align-content-center justify-content-between gap-3">
                                                <div class="d-felx align-content-center justify-content-between gap-1">
                                                    <input type="checkbox" class="pay-input" name="paychek">
                                                    <label for="paychek"
                                                        class="profile-description text-nowrap">Split
                                                        amount</label>
                                                </div>
                                                <input class="pay-input py-2 px-3" type="search" placeholder="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer footerbg justify-content-center">
                        <button class="footer-btn px-3" style="background: var(--red)">
                            <span>
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.75 3.99854H13.0807C12.7575 3.99854 12.4718 3.79305 12.369 3.4863L12.132 2.77374C11.9273 2.16099 11.355 1.74854 10.7092 1.74854H7.28998C6.64348 1.74854 6.07125 2.16107 5.86725 2.77457L5.63026 3.48557C5.52826 3.79232 5.24174 3.99854 4.91849 3.99854H2.25C1.836 3.99854 1.5 4.33379 1.5 4.74854C1.5 5.16329 1.836 5.49854 2.25 5.49854H3.04875L3.61198 13.948C3.71623 15.5185 5.03101 16.7485 6.60526 16.7485H11.3955C12.9697 16.7485 14.2845 15.5178 14.3887 13.948L14.952 5.49854H15.75C16.164 5.49854 16.5 5.16329 16.5 4.74854C16.5 4.33379 16.164 3.99854 15.75 3.99854ZM7.29076 3.24854L10.71 3.2478L10.947 3.96027C10.9515 3.97377 10.9582 3.98504 10.9635 3.99854H7.03798C7.04248 3.98504 7.05 3.97303 7.0545 3.95953L7.29076 3.24854ZM12.8918 13.8483C12.8393 14.6336 12.1822 15.2485 11.3947 15.2485H6.60452C5.81777 15.2485 5.16 14.6336 5.1075 13.8483L4.55173 5.49854H4.91927C4.99952 5.49854 5.07823 5.48802 5.15698 5.47977C5.18923 5.48427 5.21698 5.49854 5.25073 5.49854H12.7507C12.7837 5.49854 12.8122 5.48352 12.8445 5.47977C12.9232 5.48802 13.0012 5.49854 13.0822 5.49854H13.4497L12.8918 13.8483ZM11.25 8.49854V12.2485C11.25 12.6633 10.914 12.9985 10.5 12.9985C10.086 12.9985 9.75 12.6633 9.75 12.2485V8.49854C9.75 8.08379 10.086 7.74854 10.5 7.74854C10.914 7.74854 11.25 8.08379 11.25 8.49854ZM8.25 8.49854V12.2485C8.25 12.6633 7.914 12.9985 7.5 12.9985C7.086 12.9985 6.75 12.6633 6.75 12.2485V8.49854C6.75 8.08379 7.086 7.74854 7.5 7.74854C7.914 7.74854 8.25 8.08379 8.25 8.49854Z"
                                        fill="white" />
                                </svg>
                            </span>
                            Cancel
                        </button>
                        <button class="footer-btn px-3" style="background: var(--green)">
                            <span>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.06057 11.6893L4.06066 8.68925L3 9.74991L7.06057 13.8107L15.3105 5.56067L14.2499 4.50001L7.06057 11.6893Z"
                                        fill="white" />
                                </svg>
                            </span>
                            Check out
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section> --}} -->


@endsection
@section('scripts')
    <script type="text/javascript">
        // for delete cart item

        function deletecartitem(prod_id) {
            $.ajax({
                url: '{{ route('delete.cart.item') }}',
                type: 'get',
                data: {
                    prod_id: prod_id,
                },
                dataType: 'html',
                success: function(response) {
                    console.log(response);
                    $('#cartData').html('');
                    $('#cartData').html(response);
                }
            });
        }
        // for show discount popup

        function popup(prod_id, prod_price) {
            // $(".modal-backdrop").remove();
            $('#exampleModal').modal();
            getAllDiscountsList(prod_id, prod_price);
        }

        function getAllDiscountsList(prod_id, prod_price) {
            // alert(prod_id); return false;
            $.ajax({
                url: "{{ route('get.alldiscounts') }}",
                type: 'get',
                data: {
                    'prod_id': prod_id,
                    'prod_price': prod_price,
                },
                success: function(response) {
                    if (response.status == 'success') {
                        // $("#discountslist").empty();
                        $.each(response.data, function(key, value) {
                            var name = "'" + value.name + "'";
                            $("#discountslist").append(
                                '<button type="button" class="btn btn-styleless" onclick="discount(' +
                                value.prod_price + ', ' + value.prod_id + ', ' + name + ', ' + value
                                .disc_id + ', ' + value.percentage + ')">' + value.name + ' ' +
                                value.percentage + '%</button>');
                        });
                    } else {

                    }
                },
                error: function(response) {

                }
            });
        }

        // for add to cart

        function addtocard(prod_id) {

            $.ajax({
                url: '{{ route('add.to.cart') }}',
                type: 'get',
                data: {
                    prod_id: prod_id,
                },
                dataType: 'html',
                success: function(response) {
                    $('#cartData').html('');
                    $('#cartData').html(response);

                    //  $('body').html(data.html);
                    // window.history.pushState("Details", "Title", "{{ url('subcategories') }}");
                }
            });

        }

        // for increment 

        function plus(quantity, prod_id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{ route('update.cart') }}',
                type: 'post',
                data: {
                    token: '{{ csrf_token() }}',
                    id: prod_id,
                    quantity: quantity,
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    console.log(data);
                    $('.qty-input_' + data.id).html(data.quantity);
                    $('#discount_total_' + prod_id).html('-$' + data.discount_value);
                    $('.totalDiscount').html('$' + data.totalDiscount);
                    $('.totalPrice_' + data.id).html('$' + data.price);
                    $('.duePrice').html('$' + data.due_Price_after_discount);
                    $('.subtotal').html('$' + data.grand_total);
                    $("#orderN").attr("onclick", "order('" + data.grand_total + "','" + data
                        .due_Price_after_discount + "','" + data.totalDiscount + "')");

                }
            });

        }

        // for decrement
        function minus(quantity, prod_id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{ route('update.quantity') }}',
                type: 'post',
                data: {
                    token: '{{ csrf_token() }}',
                    id: prod_id,
                    quantity: quantity
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    $('.qty-input_' + data.id).html(data.quantity);
                    $('#discount_total_' + prod_id).html('-$' + data.discount_value);
                    $('.totalDiscount').html('$' + data.totalDiscount);
                    $('.totalPrice_' + data.id).html('$' + data.price);
                    $('.duePrice').html('$' + data.due_Price_after_discount);
                    $('.subtotal').html('$' + data.grand_total);
                    $("#orderN").attr("onclick", "order('" + data.grand_total + "','" + data
                        .due_Price_after_discount + "','" + data.totalDiscount + "')");



                }
            });

        }

        // for discount

        function discount(price, prod_id, name, disc_id, percentage) {
            console.log(prod_id);
            var discount = (percentage / 100) * price;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '{{ route('discount.product') }}',
                type: 'post',
                data: {
                    token: '{{ csrf_token() }}',
                    id: prod_id,
                    name: name,
                    disc_id: disc_id,
                    discount: discount,
                    percentage: percentage
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    $('#discount_type_' + prod_id).html(data.discount_name);
                    $('#discount_total_' + prod_id).html('-$' + data.discount_value);
                    $('.totalPrice_' + prod_id).html('$' + data.price);
                    $('.totalPrice').html('$' + data.totalPrice);
                    $('.duePrice').html('$' + data.due_Price_after_discount);
                    $('.totalDiscount').html('$' + data.totalDiscount);
                    $('body').removeClass('modal-open');
                    $('body').css('padding-right', '');
                    $(".modal-backdrop").remove();
                    $('#exampleModal').hide();
                }
            });

        }

        // for notes

        function notes(prod_id) {
            var notes = $('.notes_' + prod_id).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '{{ route('add.notes') }}',
                type: 'post',
                data: {
                    token: '{{ csrf_token() }}',
                    id: prod_id,
                    notes: notes,
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    $('#note_prod_' + prod_id).html(data.notes);
                    $('body').removeClass('modal-open');
                    $('body').css('padding-right', '');
                    $(".modal-backdrop").remove();
                    $('#noteModal' + prod_id).modal('hide');
                    $('#noteModal' + prod_id).removeAttr('style');
                    $('#noteModal' + prod_id).css('display', 'none');
                }
            });
        }

        // for order

        function order(subtotal, totaldiscount, duetotal) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{ route('order') }}',
                type: 'post',
                data: {
                    token: '{{ csrf_token() }}',
                    subtotal: subtotal,
                    totaldiscount: totaldiscount,
                    duetotal: duetotal
                },
                success: function(response) {
                    window.location.reload();

                }
            });

        }

        $('.big').click(function() {
            $(this).find('input:radio').checked = true;
            $('.col-active').toggleClass('col-active');
            $(this).toggleClass('col-active');
        });
    </script>
    @endsection
