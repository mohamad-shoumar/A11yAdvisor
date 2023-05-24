@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="header">
    <h1 class="qoute">"The power of the Web is in its universality. Access by everyone regardless of disability is an essential aspect."</h1>
    <span class="author">Tim Berners-Lee, inventor of the World Wide Web</span>
</section>
    <section class="section">
        <h1 class="title">Importance of Accessibility</h1>
        <div class="sectionContainer">
            <div class="img1Container">
                <img class="image1" src="{{ asset('images/animated.jpg') }}" alt="Animated image displaying people with different disabilities">
            </div>
            <div class="discriptionContainer">
                <ul class="landing-list1">
                    <li>With an aging population, accessibility is becoming an essential aspect of modern business practices</li>
                    <li>Open doors to a larger audience, and drive business growth.</li>
                    <li>Accessibility is not just a good practice, it's often required by law.</li>
                    <li>Implementing accessibility features improves SEO, leading to higher traffic.</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section">
        <h1 class="title">How AAARDVARK works</h1>
        <div class="sectionContainer2">
            <div class="discriptionContainer">

                 <h3>Using AAARDVARK is as easy as 1,2,3:</h3>
                 <ol class="landing-list">
                    <li>Input the URL of the website that you want to test</li>
                    <li>Rate the website on each accessibility test</li>
                    <li>Submit the form and save your review</li>
                 </ol>
            </div>
            <div class="img2Container">
                <img class="image2" src="{{ asset('images/comp.png') }}" alt="image of PC screen with Accessibility in the middle of it">
            </div>
        </div>
    </section>
    <section class="section">
        <h1 class="title">Features of AAARDVARK</h1>
        
        <div class="main_box">
            <div class="box_inmain" >
                <h2>Responsive</h2>
              <h3 class="para_inbox">AAARDVARK ensures a and optimized user experience across different devices and screen sizes.</h3>
            </div>
            <div class="box_inmain" >
                <h2>Accessible</h2>
              <h3 class="para_inbox">AAARDVARK embraces accessibility standards to ensure everyone can access and use the app with ease.</h3>
            </div>
            
            <div class="box_inmain" >
                <h2>High Qaulity</h2>
              <h3 class="para_inbox">AAARDVARK is developed adhering to the best web practices and following WCAG </h3>
            </div>
          </div>
          
    </section>


@endsection
