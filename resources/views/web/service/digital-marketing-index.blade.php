@extends('layouts.web-inner')

@section('custom_styles')
<style type="text/css">
    img.logo {
        width: 150px;
    }
</style>
@endsection
@section('content')
<!-- Start Breadcrump Area  -->
<div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--digital" data-black-overlay="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rn-page-title text-center pt--100">
                    <h2 class="title theme-gradient">DIGITAL MARKETING</h2>
                    <!-- <p>Fresh From The Press Discription</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrump Area  -->
<!-- Start Column Area  -->
<div class="rn-column-area rn-section-gap bg_color--1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-column text-justify">
                    <h3 class="text-left title-h3">Digital Marketing</h3>
                    <p>We can boost up your business growth connecting with thousands of internet users using digital marketing. There are many tactics in digital marketing such as a) Search Engine Optimization (SEO) b) Social media marketing c) Email marketing d) Blogging e) Website marketing f) Paid search / contextual advertising and so on. We have a great team of digital marketing who can do the marketing as required by our customers. </p>
                    <p>Our designers are excellent at showcasing any company on the Web. Our software engineers are very good at developing custom business applications for SMEs and large enterprises. They are highly skilled when it comes to scalability and security. We have a defined process to develop quality and reliable software. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Column Area  -->

<!-- Start Column Area  -->
<div class="rn-column-area rn-section-gap bg_color--5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="thumb">
                    <img class="w-100" src="{{asset('assets/images/service/dig_markt/HiLinkz 800-600SEO.jpg')}}" alt="Service Images" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt_sm--30 ">
                <!-- <div class="single-column"> -->
                <h4 class="tilte">Search engine optimization (SEO)</h4>
                <p class="text-justify">SEO stands for Search Engine Optimization. SEO is the process of taking steps to help a website or piece of content to be shown towards the top of the page when someone searches for something in Google. If SEO is applied properly then the website or the content reaches the target customers in an “organic” way, meaning that the company doest need payment for such advertisements. Otherwise companies may need to opt for paid advertisement. </p>
                <div class="button-group mt--30">
                    <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
<!-- End Column Area  -->
<!-- Start Column Area  -->
<div class="rn-column-area rn-section-gap bg_color--1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12 order-sm-2">
                <div class="thumb position-relative">
                    <img class="w-100" src="{{asset('assets/images/service/dig_markt/HiLinkz 800-600Social media marketing.jpg')}}" alt="Service Images" />
                    <!-- <a class="video-popup play__btn" href="https://www.youtube.com/watch?v=ZOoVOfieAF8"><span class="play-icon"></span></a> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt_sm--30">
                <!-- <div class="single-column"> -->
                <h4 class="tilte">Social media marketing</h4>
                <p class="text-justify">Social media marketing is the use of social media platforms such as Facebook, YouTube, Instagram, Twitter, LinkedIn etc. to connect audiences that can bring remarkable success to a business, creating devoted brand advocates and even driving leads and sales. This involves publishing great content on your social media profiles, listening to and engaging your followers, analyzing your results, and running social media advertisements.</p>
                <div class="button-group mt--30">
                    <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
<!-- End Column Area  -->
<!-- Start Column Area  -->
<div class="rn-column-area rn-section-gap bg_color--5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="thumb">
                    <img class="w-100" src="{{asset('assets/images/service/dig_markt/HiLinkz 800-600SEO.jpg')}}" alt="Service Images" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt_sm--30 ">
                <!-- <div class="single-column"> -->
                <h4 class="tilte">Video marketing</h4>
                <p class="text-justify">The content looks more realistic when it comes to a live view. Video marketing is one of the great ways to promote the growth of any business. Doing marketing using a video makes the concept of any critical service/product visualized easily to its customers/consumers, it also helps the customers to make decisions. Youtube is the second largest search engine after Google, if anyone uploads their promotional video on Youtube and on a website, then the visibility and opportunity to show up the video on search rises up. Also, promoting the video on social media can greatly increase the number of customer engagements. </p>
                <div class="button-group mt--30">
                    <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
<!-- End Column Area  -->

<div class="button-group mt--30 mb--30 text-center">
    <a class="btn-transparent rn-btn-dark" href="{{route('all_services')}}"><span class="text font-italic">View More Services </span><i class="fas fa-arrow-right"></i></a>
</div>

<!-- Contact Form Starts Here -->
<div class="rn-contact-area rn-section-gap bg_color--5" id="contact">
    <div class="contact-form--1">
        <div class="container">
            <div class="row row--35 align-items-start">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="section-title text-left mb--50 mb_sm--30 mb_md--30">
                        <h2 class="title">Get Started</h2>
                        <p class="description">We always want to hear from you. Connect with us via phone:
                            <a href="tel: +8801719347688"> +88 01719-347688</a> or email:
                            <a href="mailto:info@hilinkz.com">info@hilinkz.com</a>
                        </p>
                    </div>
                    <div class="form-wrapper">
                        <form action="{{route('contact_us_send_message')}}" method="POST">
                            @csrf

                            <label>
                                <input type="text" name="name" id="item01" placeholder="Your Name *" required />
                            </label>

                            <label>
                                <input type="text" name="email" id="item02" placeholder="Your email *" required>
                            </label>

                            <label>
                                <input type="text" name="subject" id="item03" placeholder="Write a Subject">
                            </label>
                            <label>
                                <input type="text" name="phone" id="item04" placeholder="Your phone no.">
                            </label>
                            <label>
                                <textarea id="item04" name="message" placeholder="Your Message"></textarea>
                            </label>

                            <button class="rn-button-style--2 btn_solid" type="submit" value="submit" name="submit" id="mc-embedded-subscribe">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="thumbnail mb_md--40 mb_sm--40">
                        <img src="{{asset('assets/images/about/LetsTalk.jpg')}}" alt="trydo" />
                    </div>
                </div>
                <!-- <div class="col-lg-6 order-1 order-lg-2">
                    <div class="footer-left">
                        <div class="inner">
                            <span>Ready To Do This</span>
                            <h2 class="text-white">Get to work</h2>
                            <a class="rn-button-style--2" href="{{route('contact_form')}}">
                                <span>Contact Us</span>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>


@endsection

@section('custom_js')

@endsection