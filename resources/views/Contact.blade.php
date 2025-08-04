@extends('layout')

@section('title', 'Electronic Mart')
@section('content')

    <div class="container">
        <div class="row my-5">
            <div class="col-lg-5">
                <h2 style="font-weight: 900;">Connect Us</h2>
                <div class="d-flex">
                    <span class="fa fa-globe mt-2" style="font-size: 25px;color: rgb(255, 153, 0);"></span>
                    <div class="para ms-2">
                        <h4 style="font-weight: 700;">Company Adress</h4>
                        <p style="color: rgb(168, 168, 150);">1001,5th Avenue</p>
                    </div>
                </div>
                <div class="d-flex mt-2">
                    <span class="fa fa-phone mt-2" style="font-size: 25px;color: rgb(255, 153, 0);"></span>
                    <div class="para ms-2">
                        <h4 style="font-weight: 700;">Call Us</h4>
                        <p style="color: rgb(168, 168, 150);">0301-3946090</p>
                    </div>
                </div>
                <div class="d-flex mt-2">
                    <span class="fa fa-envelope-open mt-2" style="font-size: 25px;color: rgb(255, 153, 0);"></span>
                    <div class="para ms-2">
                        <h4 style="font-weight: 700;">Email Us</h4>
                        <p style="color: rgb(168, 168, 150);">info@gmail.com</p>
                    </div>
                </div>
                <div class="d-flex mt-2">
                    <span class="fa fa-headphones mt-2" style="font-size: 25px;color: rgb(255, 153, 0);"></span>
                    <div class="para ms-2">
                        <h4 style="font-weight: 700;">For Support</h4>
                        <p style="color: rgb(168, 168, 150);">info@support.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="col-md-7 contact-right mt-md-0 mt-4">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                        <div class="input-grids">
                            <input type="text" class="input-group-text px-5 mt-3" placeholder="Your Name*"
                                class="contact-input" required="" />
                            <input type="email" class="input-group-text mt-3 px-5" placeholder="Your Email*"
                                class="contact-input" required="" />
                            <input type="text" class="input-group-text mt-3 px-5" placeholder="Subject*"
                                class="contact-input" required="" />
                            <input type="text" class="input-group-text mt-3 px-5" placeholder="Website URL*"
                                class="contact-input" required="" />
                        </div>
                        <div class="form-input">
                            <textarea placeholder="Type your message here*" class="input-group-text mt-4  px-5"
                                required=""></textarea>
                        </div>
                        <!-- From Uiverse.io by satyamchaudharydev -->
                        <button class="button mt-3">
                            Send Message
                            <svg class="icon" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                </div>
            </div>
        </div>
    </div>

@endsection