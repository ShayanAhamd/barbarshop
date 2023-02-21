<div  class="content-right-center">
    <div class="order-item-head">
      <p>Product</p>
      <p>Qty</p>
      <p>Price</p>
      <p>Total</p>
    </div>
    @if(session('cart'))
    @php 
    $total = 0;
    $subtotal=0;
    @endphp
        @foreach(session('cart') as $id => $details)
        @php
         $total += $details['price']; 
         $subtotal += $details['subtotal']; 
         @endphp
    <div class="order-item">
      <div class="order-item-detail">
        <p>{{ Str::limit($details['name'], 8) }}
        <br>
          <span style="opacity: 1; color:black" id="discount_type_{{$id}}">{{ $details['discount_name']}}</span>
          <br>
          <span style="opacity: 1; color:black border:black" id="note_prod_{{$id}}">{{$details['notes']}}</span>
        
        
        </p>
        <p class="qty-input_{{$id}}">{{ $details['quantity'] }}</p>
        <p>${{ $details['orignalPrice'] }}</p>
        <p>
          <span style="opacity: 1; color:black" class="totalPrice_{{$id}}">
            ${{ $details['price']}}
          </span>
            
            <br>
            <span style="opacity: 1; color:black;" id="discount_total_{{$id}}">{{ $details['discount_value']!="" ? "-$".$details['discount_value']:'' }}</span>
        </p> 
      </div>
      <div class="order-item-edit">
        <span>
  
          <button
            type="button"
            class="btn-styleless"
            id="popupBtn{{$id}}"
            data-bs-toggle="modal" 
            @if (!empty($details['discount_name']))
            data-bs-target = ""
            @else
            data-bs-target = "#exampleModal_{{$id}}"
            @endif
          >
            <svg
            width="32"
            height="33"
            viewBox="0 0 32 33"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle cx="16" cy="16.2485" r="16" fill="#C87800" />
            <path
              d="M22.2702 15.8808L17.3697 10.9803C16.697 10.3075 15.8022 9.93701 14.8512 9.93701H11.501C9.94998 9.93701 8.68848 11.1985 8.68848 12.7495V16.099C8.68848 17.0507 9.05897 17.9447 9.73172 18.6175L14.6322 23.518C15.3267 24.2125 16.2387 24.5597 17.1515 24.5597C18.0635 24.5597 18.9762 24.2125 19.67 23.518L22.2695 20.9185C23.6592 19.5295 23.6592 17.2698 22.2702 15.8808ZM21.4745 20.1235L18.875 22.723C17.9232 23.6732 16.3775 23.6725 15.428 22.723L10.5275 17.8225C10.0737 17.3688 9.81348 16.741 9.81348 16.099V12.7495C9.81348 11.8188 10.5702 11.062 11.501 11.062H14.8505C15.4917 11.062 16.1202 11.3223 16.574 11.776L21.4745 16.6765C22.4247 17.6267 22.4247 19.1733 21.4745 20.1235ZM13.376 13.8745C13.376 14.2885 13.04 14.6245 12.626 14.6245C12.212 14.6245 11.876 14.2885 11.876 13.8745C11.876 13.4605 12.212 13.1245 12.626 13.1245C13.04 13.1245 13.376 13.4605 13.376 13.8745Z"
              fill="white"
            />
          </svg>
          </button>
          
         
        </span>
        <input type="hidden" name="prod_id" class="prod_id" value="{{$id}}">
        <button type="button" class="btn-styleless" onclick="plus({{$details['quantity']}},{{$id}})" id="plus" class="changeQuantity" >
          <svg
            width="18"
            height="19"
            viewBox="0 0 18 19"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M11.25 1.93604H6.75C3.9585 1.93604 1.6875 4.20704 1.6875 6.99854V11.4985C1.6875 14.29 3.9585 16.561 6.75 16.561H11.25C14.0415 16.561 16.3125 14.29 16.3125 11.4985V6.99854C16.3125 4.20704 14.0415 1.93604 11.25 1.93604ZM15.1875 11.4985C15.1875 13.6698 13.4213 15.436 11.25 15.436H6.75C4.57875 15.436 2.8125 13.6698 2.8125 11.4985V6.99854C2.8125 4.82729 4.57875 3.06104 6.75 3.06104H11.25C13.4213 3.06104 15.1875 4.82729 15.1875 6.99854V11.4985ZM12.5625 9.24854C12.5625 9.55903 12.3105 9.81104 12 9.81104H9.5625V12.2485C9.5625 12.559 9.3105 12.811 9 12.811C8.6895 12.811 8.4375 12.559 8.4375 12.2485V9.81104H6C5.6895 9.81104 5.4375 9.55903 5.4375 9.24854C5.4375 8.93804 5.6895 8.68604 6 8.68604H8.4375V6.24854C8.4375 5.93804 8.6895 5.68604 9 5.68604C9.3105 5.68604 9.5625 5.93804 9.5625 6.24854V8.68604H12C12.3105 8.68604 12.5625 8.93804 12.5625 9.24854Z"
              fill="#41416E"
            />
          </svg>
        </button>
  
        {{-- <input type="text" name="quantity" class="form-control qty-input text-center" value="{{$details['quantity']}}"> --}}
       
         <p  class="qty-input_{{$id}} text-center">{{$details['quantity']}}</p> 
        <button type="button" class="btn-styleless" onclick=" minus({{$details['quantity']}},{{$id}})" id="minus" class="changeQuantity">
          <svg
            width="18"
            height="19"
            viewBox="0 0 18 19"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M11.25 1.93604H6.75C3.9585 1.93604 1.6875 4.20704 1.6875 6.99854V11.4985C1.6875 14.29 3.9585 16.561 6.75 16.561H11.25C14.0415 16.561 16.3125 14.29 16.3125 11.4985V6.99854C16.3125 4.20704 14.0415 1.93604 11.25 1.93604ZM15.1875 11.4985C15.1875 13.6698 13.4213 15.436 11.25 15.436H6.75C4.57875 15.436 2.8125 13.6698 2.8125 11.4985V6.99854C2.8125 4.82729 4.57875 3.06104 6.75 3.06104H11.25C13.4213 3.06104 15.1875 4.82729 15.1875 6.99854V11.4985ZM12.5625 9.24854C12.5625 9.55903 12.3105 9.81104 12 9.81104H6C5.6895 9.81104 5.4375 9.55903 5.4375 9.24854C5.4375 8.93804 5.6895 8.68604 6 8.68604H12C12.3105 8.68604 12.5625 8.93804 12.5625 9.24854Z"
              fill="#41416E"
            />
          </svg>
        </button>
        <span>
          <button  type="button"
          class="btn-styleless"
          id="popupBtnNote"
          data-bs-toggle="modal"
          data-bs-target="#noteModal{{$id}}">
            <svg
            width="32"
            height="33"
            viewBox="0 0 32 33"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle cx="16" cy="16.2485" r="16" fill="#C87800" />
            <path
              d="M22.3624 10.8875C21.7497 10.274 20.9344 9.93652 20.0659 9.93652C19.1989 9.93652 18.3836 10.274 17.7694 10.8875L9.86963 18.7873C9.56363 19.0925 9.36414 19.4802 9.29289 19.907L8.70041 23.4605C8.65016 23.7613 8.7484 24.0688 8.9644 24.284C9.1429 24.4625 9.38437 24.5608 9.63337 24.5608C9.68437 24.5608 9.73692 24.5571 9.78792 24.5481L13.3421 23.9555C13.7681 23.885 14.1551 23.6855 14.4611 23.3795L22.3609 15.4798C22.9744 14.8663 23.3126 14.051 23.3126 13.1833C23.3126 12.3155 22.9767 11.501 22.3624 10.8875ZM13.6676 22.5845C13.5281 22.724 13.3527 22.814 13.1592 22.8463L9.85315 23.3968L10.4037 20.0916C10.4359 19.8973 10.5267 19.7218 10.6654 19.5831L16.7277 13.5208L19.7291 16.5223L13.6676 22.5845ZM21.5674 14.6848L20.5249 15.7272L17.5234 12.7258L18.5659 11.6833C18.9671 11.2828 19.4996 11.0615 20.0666 11.0615C20.6336 11.0615 21.1669 11.282 21.5674 11.6833C21.9679 12.0845 22.1891 12.617 22.1891 13.184C22.1891 13.751 21.9679 14.2836 21.5674 14.6848Z"
              fill="white"
            />
          </svg>
          </button>
         
        </span>
       
        <span>
          <a href="{{url('remove-from-cart/'.$id)}}">
            <button type="button" class="btn-styleless">
              <svg
              width="20"
              height="23"
              viewBox="0 0 20 23"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M17.3077 5.01686H14.0224C13.5249 5.01686 13.0846 4.69932 12.9277 4.22855L12.636 3.35258C12.4154 2.69165 11.7997 2.24854 11.1037 2.24854H6.89536C6.19936 2.24854 5.58369 2.69163 5.36307 3.35348L5.0714 4.22855C4.91448 4.70025 4.47414 5.01777 3.9766 5.01777H0.692308C0.310154 5.01777 0 5.32792 0 5.71007C0 6.09223 0.310154 6.40238 0.692308 6.40238H1.89044L2.59846 17.0178C2.71939 18.8298 4.23601 20.2485 6.05262 20.2485H11.9483C13.764 20.2485 15.2815 18.8288 15.4024 17.0178L16.1105 6.40238H17.3077C17.6898 6.40238 18 6.09223 18 5.71007C18 5.32792 17.6898 5.01686 17.3077 5.01686ZM6.67659 3.79011C6.70797 3.69596 6.79567 3.63225 6.89536 3.63225H11.1037C11.2034 3.63225 11.2911 3.69598 11.3225 3.78921L11.6141 4.66519C11.6547 4.78704 11.7055 4.90427 11.7628 5.01596H6.23539C6.29262 4.90335 6.3434 4.78706 6.38401 4.66429L6.67659 3.79011ZM14.0197 16.9246C13.9477 18.012 13.0375 18.863 11.9474 18.863H6.05172C4.96249 18.863 4.05136 18.012 3.97936 16.9246L3.27787 6.40148H3.9766C4.07537 6.40148 4.17231 6.38946 4.26923 6.37838C4.308 6.38484 4.3431 6.40148 4.38371 6.40148H13.6145C13.6551 6.40148 13.6901 6.38484 13.7289 6.37838C13.8258 6.38946 13.9218 6.40148 14.0215 6.40148H14.7203L14.0197 16.9246ZM11.5385 10.3246V14.9399C11.5385 15.3221 11.2283 15.6322 10.8462 15.6322C10.464 15.6322 10.1538 15.3221 10.1538 14.9399V10.3246C10.1538 9.9424 10.464 9.63225 10.8462 9.63225C11.2283 9.63225 11.5385 9.9424 11.5385 10.3246ZM7.84615 10.3246V14.9399C7.84615 15.3221 7.536 15.6322 7.15385 15.6322C6.77169 15.6322 6.46154 15.3221 6.46154 14.9399V10.3246C6.46154 9.9424 6.77169 9.63225 7.15385 9.63225C7.536 9.63225 7.84615 9.9424 7.84615 10.3246Z"
                fill="#F50000"
              />
            </svg>
            </button>
          </a> 
        </span>    
      </div>
    </div>
    <div
      class="modal fade"
      id="exampleModal_{{$id}}"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <input type="hidden" name="price" id="price" value="{{$details['price']}}">
      <input type="hidden" name="prod_id" id="prod_id" value="{{$id}}">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <h5 class="mid-head" id="exampleModalLabel">
              APPLY DISCOUNT
            </h5>
            <div class="box-body box-body-inner">
              
              @foreach($discounts as $key => $discount)
  
              <button type="button" class="btn-styleless" onclick="discount({{$details['price']}},{{$id}},'{{$discount->name}}',{{$discount->id}},{{$discount->percentage}} )">
               
                {{$discount->name.' ['.$discount->percentage.'%]'}}
              </button>
              
              @endforeach
              {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> --}}
            </div>
          {{-- <div class="d-flex justify-content-center align-content-center gap-2">
            <button type="submit" class="btn-orang px-5 py-3">APPLY DISCOUNT</button>
          </div> --}}
        </div>
        
      </div>
    </div>
    {{-- for notes model --}}
  
    <div
      class="modal fade"
      id="noteModal{{$id}}"
      tabindex="-1"
      aria-labelledby="noteModalLabel"
      aria-hidden="true"
    >
    <input type="hidden" name="prod_id" id="prod_id" value="{{$id}}">
      <div class="modal-dialog modal-dialog-centered">
      
        <div class="modal-content">
            <h5 class="mid-head" id="noteModalLabel">
              APPLY Note
            </h5>
            <div class="box-body box-body-inner">
            <input type="text" class="modal-input w-100 h-100 border-0 notes_{{$id}}" id="notes" value=""> 
            </div>
          <div class="d-flex justify-content-center align-content-center gap-2">
            <button type="button"  class="btn-orang px-5 py-3" onclick="notes({{$id}})">APPLY Note</button>
          </div>
          </div>
      
        </div>
      </div>
    @endforeach
    @endif
  </div>