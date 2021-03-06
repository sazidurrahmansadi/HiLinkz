@extends('layouts.web-inner')
@section('title', 'Data Intelligence')

@section('custom_styles')
    <style type="text/css">

    </style>
@endsection
@php
$address = hilinkz_contact();
$location_bd = $address['address_bd'];
$location_aus = $address['address_aus'];
$email_bd1 = $address['email_bd1'];
$email_bd2 = $address['email_bd2'];
$email_aus = $address['email_aus'];
$phone_bd1 = $address['phone_bd1'];
$phone_bd2 = $address['phone_bd2'];
$phone_aus = $address['phone_aus'];
$map_bd = $address['map_bd'];
$map_aus = $address['map_aus'];
@endphp
@section('content')
    <!-- Start Breadcrump Area  -->
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--data" data-black-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient">DATA INTELLIGENCE</h2>
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
                        <h3 class="text-left title-h3">Data Intelligence</h3>
                        <p>All smart businesses today require data analytics and business intelligence (BI), which we call
                            data intelligence, for its survival and future growth. According to <a
                                href="https://go.forrester.com/" target="_blank" class="text-info">Forrester,
                            </a>“Business
                            Intelligence is a set of methodologies, processes, platforms, applications, architectures, and
                            technologies that transform <b>raw data</b> into meaningful and useful information used to
                            enable more effective strategic, tactical, and operational insights and decision-making”. For
                            example, through access to BI applications, a bank’s branch manager can determine who are the
                            most profitable customers and which customers they should work on. Deriving such intelligence
                            requires a number of steps to be followed as described below. </p>
                        <p>Our designers are excellent at showcasing any company on the Web. Our software engineers are very
                            good at developing custom business applications for SMEs and large enterprises. They are highly
                            skilled when it comes to scalability and security. We have a defined process to develop quality
                            and reliable software. </p>
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
                <div class="col-lg-6">
                    <div class="thumb">
                        <img class="w-100" src="{{ asset('assets/images/service/data/HiLinkz 800-600ETL.jpg') }}"
                            alt="Service Images" />
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--30 ">
                    <div class="about-inner inner">
                        <!-- <div class="single-column"> -->
                        <h4 class="tilte">ETL</h4>
                        <p class="text-justify">ETL stands for <i>Extract-Transform-Load</i>. The first step to get data
                            intelligence is to extract data from one or more online/offline sources and then transform into
                            common data formats. The transformation phase includes cleansing, reformatting, deduplication
                            and blending of data that can be Loaded into the target database, data store or a data warehouse
                            for further data analysis.</p>
                        <div class="button-group mt--30">
                            <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get
                                Started <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->
    <!-- Start Column Area  -->
    <div class="rn-column-area rn-section-gap bg_color--1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="thumb position-relative">
                        <img class="w-100" src="{{ asset('assets/images/service/data/HiLinkz 800-600EDA.jpg') }}"
                            alt="Service Images" />
                        <!-- <a class="video-popup play__btn" href="https://www.youtube.com/watch?v=ZOoVOfieAF8"><span class="play-icon"></span></a> -->
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--30">
                    <div class="about-inner inner">

                        <!-- <div class="single-column"> -->
                        <h4 class="tilte">EDA</h4>
                        <p class="text-justify"><b>E</b>xploratory <b>D</b>ata <b>A</b>nalysis is the critical step to
                            perform initial investigation to retrieve the underlying meaning of the data. This is done for
                            discovering patterns, spotting anomalies, testing hypotheses and checking assumptions by pattern
                            analysis, statistical testings and visual representations through charts or graphs etc. After
                            thoughtful study and analysis features are extracted and engineered from the dataset by our
                            expert team members.</p>
                        <div class="button-group mt--30">
                            <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get
                                Started <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <!-- </div> -->
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
                <div class="col-lg-6">
                    <div class="thumb">
                        <img class="w-100"
                            src="{{ asset('assets/images/service/data/HiLinkz 800-600ModelTrainingandValidation.jpg') }}"
                            alt="Service Images" />
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--30 ">
                    <div class="about-inner inner">
                        <!-- <div class="single-column"> -->
                        <h4 class="tilte">Model Training and Validation</h4>
                        <p class="text-justify">This phase requires the right machine learning model technique selection
                            and
                            application, model training, model hyperparameter setting and adjustment, model validation,
                            ensemble model development and testing, algorithm selection, and model optimization. Next, the
                            trained models are tested and evaluated as to what extent the models can get
                            predictions/outcomes related to the business interest. The prediction accuracy mostly depends on
                            the right model selection and training; and our engineers are excellent at it.</p>
                        <div class="button-group mt--30">
                            <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get
                                Started <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->
    <!-- Start Column Area  -->
    <div class="rn-column-area rn-section-gap bg_color--1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="thumb position-relative">
                        <img class="w-100"
                            src="{{ asset('assets/images/service/data/HiLinkz 800-600DataVisualization.jpg') }}"
                            alt="Service Images" />
                        <!-- <a class="video-popup play__btn" href="https://www.youtube.com/watch?v=ZOoVOfieAF8"><span class="play-icon"></span></a> -->
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--30">
                    <div class="about-inner inner">
                        <!-- <div class="single-column"> -->
                        <h4 class="tilte">Deployment and Data Visualization</h4>
                        <p class="text-justify">Finally the model is deployed to see how it works in the real world. This
                            is
                            the
                            time to turn the predictions and insights from the fine tuned model into actions. The deployment
                            can
                            be in a cloud environment, in an on-premises or closed environment or within a closed,
                            controlled
                            group. Our engineers can deploy the system depending on the requirement. After that we
                            continuously
                            monitor for different aspects of the model to improve overall performance.</p>
                        <div class="button-group mt--30">
                            <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get
                                Started <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->
    <div class="button-group mt--30 mb--30 text-center">
        <a class="btn-transparent rn-btn-dark" href="{{ route('all_services') }}"><span class="text font-italic">View More
                Services </span><i class="fas fa-arrow-right"></i></a>
    </div>
    <!-- Start Page Wrapper  -->

    <!-- Contact Form Starts Here -->
    <div class="rn-contact-area rn-section-gap bg_color--5" id="contact">
        <div class="contact-form--1">
            <div class="container">
                <div class="row row--35 align-items-start">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="section-title text-left mb--50 mb_sm--30 mb_md--30">
                            <h2 class="title">Get Started</h2>
                            <p class="description">We always want to hear from you. Connect with us via phone:
                                <a href="tel:{{ $phone_bd1 }}"> {{ $phone_bd1 }}</a> or email:
                                <a href="mailto:{{ $email_bd1 }}">{{ $email_bd1 }}</a>
                            </p>
                        </div>
                        <div class="form-wrapper">
                            <form action="{{ route('contact_us_send_message') }}" method="POST">
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

                                <button class="rn-button-style--2 btn_solid" type="submit" value="submit" name="submit"
                                    id="mc-embedded-subscribe">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="thumbnail mb_md--40 mb_sm--40">
                            <img src="{{ asset('assets/images/about/LetsTalk.jpg') }}" alt="trydo" />
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 order-1 order-lg-2">
                                    <div class="footer-left">
                                        <div class="inner">
                                            <span>Ready To Do This</span>
                                            <h2 class="text-white">Get to work</h2>
                                            <a class="rn-button-style--2" href="{{ route('contact_form') }}">
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
