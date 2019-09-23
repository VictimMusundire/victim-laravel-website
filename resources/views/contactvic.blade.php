@extends('layout/master')
@section('content')

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h2 class="mb-0">Contact Victim</h2>
                    <p>" Honor, Code, Respect, Love, Loyalty "</p>
                </div>
            </div>
        </div>
    </div>


    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="index.html">Home</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="text-black">Contact Victim</span>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <form  action="POST" data-netlify="true">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="fname">First Name</label>
                    <input type="text" name="name" id="name" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" name="surname" id="surname" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="eaddress">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="tel">Tel. Number</label>
                    <input type="number" name="fone" id="fone"  class="form-control form-control-lg">
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <div data-netlify-recaptcha="true"></div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Send Message" class="btn btn-outline-info btn-lg px-5">
                </div>
            </div>
            </form>
        </div>
    </div>



    @endsection
