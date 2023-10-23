@extends('layouts.base')
@section('content')

<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Buy And Sell</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('app.index')}}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Buy And Sell</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section> <!-- Contact Section Start -->
    <section class="contact-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="materialContainer">
                        <div class="material-details">
                            <div class="title title1 title-effect mb-1 title-left">
                                <h2>Inquire</h2>
                                <p class="ms-0 w-100">For more Inquires</p>
                            </div>
                        </div>
                        <div class="row g-4 mt-md-1 mt-2">
                        <div class="col-md-6">
                                <label for="first" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Enter Your First Name"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="first" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first" placeholder="Enter Your First Name"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="last" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last" placeholder="Enter Your Last Name"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter Your Email Address" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email2" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="email2"
                                    placeholder="Enter Your Phone Number" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email2" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="companyname"
                                    placeholder="Enter Your Phone Number" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email2" class="form-label">Address</label>
                                <input type="text" class="form-control" id="email2"
                                    placeholder="Enter Your Phone Number" required="">
                            </div>

                            <div class="col-12">
                                <label for="comment" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" required=""></textarea>
                            </div>

                            <div class="col-auto">
                                <button class="btn btn-solid-default" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="contact-details">
                        <div>
                            <h2>Let's get in touch</h2>
                            <h5 class="font-light">We're open for any suggestion or just to have a chat</h5>
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i data-feather="map-pin"></i>
                                </div>
                                <div class="contact-title">
                                    <h4>Address :</h4>
                                    <p style="font-size:25px;">Cebu Area</p>
						            <p>Tan Kim Building, 80 Tres Borces Padres St, Cebu City, 6000 Cebu</p>
						            <p>Sitio Lupa, Mandaue City, 6014 Cebu</p>
						            <br>
						            <h4 style="font-size:25px;">Negros Area</h4>
						            <p>7J Corporate Center 3rd Floor Corner Jalandoni</p>
						            <p>Ledesma St, Iloilo City, PH</p>
                                </div>
                            </div>

                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i data-feather="phone"></i>
                                </div>
                                <div class="contact-title">
                                    <h4>Phone Number :</h4>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;032-407-6687</p>
						            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0917-117-4119</p>
                                </div>
                            </div>

                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i data-feather="mail"></i>
                                </div>
                                <div class="contact-title">
                                    <h4>Email Address :</h4>
                                    <p>Lajefatrading@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection