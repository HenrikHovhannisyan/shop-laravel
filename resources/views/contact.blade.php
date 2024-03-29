@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')
    <div class="container">
        <section class="contact_us">
            <div>
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                <p class="text-center w-responsive mx-auto mb-5">
                    Do you have any questions? Please to contact us directly. <br>
                    Our team will come back to you within a matter of hours to help you.
                </p>
                <div class="row">
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="name" class="">Your name</label>
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="email" class="">Your email</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <label for="message">Your message</label>
                                        <textarea type="text" id="message" name="message" rows="2"
                                                  class="form-control md-textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-center text-md-left mt-3">
                            <a class="btn btn-dark">Send</a>
                        </div>
                        <div class="status"></div>
                    </div>
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>{{$contact->address}}</p>
                            </li>
                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>{{$contact->phone}}</p>
                            </li>
                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>{{$contact->email}}</p>
                            </li>
                            <li>
                                <a href="{{$contact->instagram}}" class="m-2 text-muted" target="_blank">
                                    <i class="fa-brands fa-instagram mt-4 fa-2x"></i>
                                </a>
                                <a href="{{$contact->facebook}}" class="m-2 text-muted" target="_blank">
                                    <i class="fa-brands fa-facebook mt-4 fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('layouts.footer')
@endsection

@section('script')
@endsection
