@extends('layouts.layout')
@section('content')
    <div class="wrapper">
      <div class="container">
        {{-- Include Header --}}
        @include('layouts.header')
      </div>
      <div class="divder"></div>
      <section id="content">
        <div class="container py-5">
          <div class="row mb-4">
            <div
              class="d-md-flex justify-content-start align-content-center gap-2 d-sm-block d-xs-block col-md-9"
            >
          
              <input name="search" id="search"
              type="text"
              class="input-search w-100"
              placeholder="Search users by name"
              style="font-family: Montserrat, 'Font Awesome 5 Free'"
              />
             
             
              <select class="input-select">
                <option selected>Customer Type</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div
              class="d-flex justify-content-md-end justify-content-center align-content-center mt-sm-1 mt-0 col-md-3"
            >
              <button class="btn-orang1">
                <svg
                  class="me-2"
                  width="18"
                  height="14"
                  viewBox="0 0 18 14"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M15.8425 6H9.91787V1C9.91787 0.45 9.38465 0 8.73294 0C8.08122 0 7.548 0.45 7.548 1V6H1.62335C0.971635 6 0.438416 6.45 0.438416 7C0.438416 7.55 0.971635 8 1.62335 8H7.548V13C7.548 13.55 8.08122 14 8.73294 14C9.38465 14 9.91787 13.55 9.91787 13V8H15.8425C16.4942 8 17.0275 7.55 17.0275 7C17.0275 6.45 16.4942 6 15.8425 6Z"
                    fill="black"
                  />
                  <mask
                    id="mask0_5_264"
                    style="mask-type: alpha"
                    maskUnits="userSpaceOnUse"
                    x="0"
                    y="0"
                    width="18"
                    height="14"
                  >
                    <path
                      d="M15.8425 6H9.91787V1C9.91787 0.45 9.38465 0 8.73294 0C8.08122 0 7.548 0.45 7.548 1V6H1.62335C0.971635 6 0.438416 6.45 0.438416 7C0.438416 7.55 0.971635 8 1.62335 8H7.548V13C7.548 13.55 8.08122 14 8.73294 14C9.38465 14 9.91787 13.55 9.91787 13V8H15.8425C16.4942 8 17.0275 7.55 17.0275 7C17.0275 6.45 16.4942 6 15.8425 6Z"
                      fill="white"
                    />
                  </mask>
                  <g mask="url(#mask0_5_264)">
                    <rect
                      x="-5.48633"
                      y="-5"
                      width="28.4384"
                      height="24"
                      fill="white"
                    />
                  </g>
                </svg>
                Add User
              </button>
            </div>
          </div>
          <div class="table-responsive" id="searchData"> 
            <table class="customer-table">
              <thead>
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">FORE Name</th>
                  <th scope="col">SUR Name</th>
                  <th scope="col">BUsiness name</th>
                  <th scope="col">Address</th>
                  <th scope="col">TOWN</th>
                  <th scope="col">POST CODE</th>
                  <th scope="col">TYPE</th>
                  <th scope="col">Email Address</th>
                  <th scope="col">Phone</th>
                  <th scope="col">ACTION</th>
                </tr>
              </thead>
              <tbody>
                @foreach($customers as $key => $customer)
                <tr id="customer">
                  <th id="title" scope="row">{{$customer->title}}</th>
                  <td id="fname">{{$customer->first_name}}</td>
                  <td id="lname">{{$customer->last_name}}</td>
                  <td id="bname">{{$customer->businessname}}</td>
                  <td id="address">{{$customer->address}}</td>
                  <td id="town">{{$customer->town}}</td>
                  <td id="postcode"></td>
                  <td id="type">{{$customer->type}}</td>
                  <td id="email">{{$customer->email}}</td>
                  <td id="phone">{{$customer->contact_no1}}</td>
                  <td>
                      <a href="{{url('services/' . $customer->id )}}" class="btn btn-orang">
                          Select
                      </a>
                      
                    <a href="{{url('customerDetail/'. $customer->id )}}" class="btn btn-orang  border-less-btn">Details</a>
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="table-footer text-end w-100">
              {!! $customers->links() !!}
          </div>
        </div>
      </section>
    </div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#search').on('keyup',function(){
   
  $value=$(this).val();
  // alert($value);
    $.ajax({
    type : 'get',
    url : "{{route('customers')}}",
    data:{'search':$value},
    datatype: "html",
    success:function(response){
      $('#searchData').html('');
      $('#searchData').html(response);
      // console.log();return false;
    }
    });
  });
</script>
@endsection
 
