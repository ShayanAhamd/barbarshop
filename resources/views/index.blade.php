@extends('layouts.layout')
<style>
  .active {
background: var(--orang-2);
border: 1px solid var(--orang-2);
color: var(--white) !important;
}
</style>
@section('content')
    <div class="wrapper">
        <div class="container">
            <header class="header pt-4 pb-3">
                <button type="button" class="btn-orang" id="popupBtn" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    disabled>
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.598 7.96301L20.031 6.53003C20.324 6.23703 20.324 5.76199 20.031 5.46899C19.738 5.17599 19.263 5.17599 18.97 5.46899L17.492 6.94702C16.291 6.03002 14.837 5.43096 13.25 5.28796V3.75H14.5C14.914 3.75 15.25 3.414 15.25 3C15.25 2.586 14.914 2.25 14.5 2.25H10.5C10.086 2.25 9.75 2.586 9.75 3C9.75 3.414 10.086 3.75 10.5 3.75H11.75V5.28796C7.552 5.66896 4.25 9.204 4.25 13.5C4.25 18.049 7.951 21.75 12.5 21.75C17.049 21.75 20.75 18.049 20.75 13.5C20.75 11.368 19.93 9.42801 18.598 7.96301ZM12.5 20.25C8.778 20.25 5.75 17.222 5.75 13.5C5.75 9.778 8.778 6.75 12.5 6.75C16.222 6.75 19.25 9.778 19.25 13.5C19.25 17.222 16.222 20.25 12.5 20.25ZM15.085 15.531C15.344 15.855 15.292 16.326 14.968 16.585C14.829 16.696 14.664 16.75 14.5 16.75C14.28 16.75 14.062 16.654 13.914 16.469L11.914 13.969C11.808 13.836 11.749 13.671 11.749 13.5V10C11.749 9.586 12.085 9.25 12.499 9.25C12.913 9.25 13.249 9.586 13.249 10V13.2371L15.085 15.531Z"
                            fill="white" />
                    </svg>
                    CLOCK IN/ OUT
                </button>
                <h1 class="main-head">BEAUTY SALOON POS</h1>
                <button class="btn-orang2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2.25C6.624 2.25 2.25 6.624 2.25 12C2.25 17.376 6.624 21.75 12 21.75C17.376 21.75 21.75 17.376 21.75 12C21.75 6.624 17.376 2.25 12 2.25ZM12 20.25C7.451 20.25 3.75 16.549 3.75 12C3.75 7.451 7.451 3.75 12 3.75C16.549 3.75 20.25 7.451 20.25 12C20.25 16.549 16.549 20.25 12 20.25ZM15.691 9.32605C15.954 10.823 15.318 12.1651 13.901 13.1071C12.96 13.7321 12.755 14.107 12.711 14.24C12.605 14.553 12.313 14.75 12 14.75C11.92 14.75 11.84 14.7371 11.76 14.7111C11.368 14.5791 11.157 14.153 11.289 13.76C11.502 13.128 12.068 12.524 13.071 11.858C14 11.241 14.373 10.4971 14.213 9.58606C14.055 8.68506 13.315 7.94499 12.413 7.78699C11.734 7.66699 11.072 7.841 10.553 8.276C10.042 8.705 9.74899 9.334 9.74899 10C9.74899 10.414 9.41299 10.75 8.99899 10.75C8.58499 10.75 8.24899 10.414 8.24899 10C8.24899 8.889 8.73699 7.84195 9.58899 7.12695C10.44 6.41295 11.562 6.11396 12.673 6.30896C14.185 6.57396 15.426 7.81505 15.691 9.32605ZM13 17C13 17.552 12.552 18 12 18C11.448 18 11 17.552 11 17C11 16.448 11.448 16 12 16C12.552 16 13 16.448 13 17Z"
                            fill="white" />
                    </svg>
                    SUPPORT AND HELP
                </button>
            </header>
        </div>
        <div class="divder"></div>
        <section id="content">
            <div class="container">
                <div class="middle py-5">
                    <h4 class="sub-head my-4">Select USER NAME</h4>
                    <div class="select-user-name w-75">
                        @foreach ($clients as $key => $client)
                            <div class="select-user-col">
                                <p data-name="{{ $client->business_name }}" class="col-head">{{ $client->business_name }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- modal B0x -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="modal-content">
                        <h5 class="mid-head" id="exampleModalLabel">
                            Enter your Passcode
                        </h5>
                        {{-- @if (session()->get('error'))
              <div class="text-danger">{{session()->get('error') }}</div>
              @endif --}}
                        <div class="box-body">
                            <input type="hidden" id="username" name="username">
                            <input type="text" maxlength="1" id="codeBox1" name="pass1" class="modal-input"
                                onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)" style="font-size:2em">
                            <input type="text" maxlength="1" id="codeBox2" name="pass2" class="modal-input"
                                onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)" style="font-size:2em">
                            <input type="text" maxlength="1" id="codeBox3" name="pass3" class="modal-input"
                                onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)" style="font-size:2em">
                            <input type="text" maxlength="1" id="codeBox4" name="pass4" class="modal-input"
                                onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)" style="font-size:2em">
                        </div>
                        <div class="d-flex justify-content-center align-content-center gap-2">
                            <button type="submit" id="submit" class="btn-styleless px-5 py-3"></button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
   

@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        function onFocusEvent(index) {
            for (item = 1; item < index; item++) {
                const currentElement = getCodeBoxElement(item);
                if (!currentElement.value) {
                    currentElement.focus();
                    break;
                }
            }
        }

        function getCodeBoxElement(index) {
            return document.getElementById('codeBox' + index);
        }

        function onKeyUpEvent(index, event) {
            const eventCode = event.which || event.keyCode;
            if (getCodeBoxElement(index).value.length === 1) {
                if (index !== 4) {
                    getCodeBoxElement(index + 1).focus();
                } else {
                    getCodeBoxElement(index).blur();
                    // Submit code

                    console.log('submit code ');
                    $("#submit").click();
                }
            }
            if (eventCode === 8 && index !== 1) {
                getCodeBoxElement(index - 1).focus();
            }
        }
        $(document).ready(function() {
            $('.select-user-col').on('click', function() {
                $('.select-user-col').removeClass('active');
                $(this).addClass('active');
                var username = $(this).find('p').data('name');
                // alert(username);
                $('#popupBtn').removeAttr("disabled");
                $('#username').val(username);
                $('#exampleModal').modal('toggle');


            });

            @if (session()->get('error'))

                alert('{{ session()->get('error') }}')
            @endif

        });

    </script>
  
