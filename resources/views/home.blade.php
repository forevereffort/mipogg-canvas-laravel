@extends('layouts.app')

@section('title', config('app.name'))

@section('content')
<div id="welcome" class="welcome">
    <div class="container">
        <div class="welcome-info">
            <h2>Welcome to MIPOGG</h2>
            <p>McGill Interactive Pediatric OncoGenetic Guidelines Identifying cancer predisposition syndromes in pediatric oncology</p>
            <p>Cancer predisposition syndromes are recognised as an important cause of pediatric cancer development. Oncologists and health professionals who manage children and adolescents with cancer have a unique opportunity to identify these patients and their families for genetic evaluation. This task is increasingly challenging for clinicians as our knowledge of cancer genetics is growing at a rapid pace. The MIPOGG team has accepted this challenge on your behalf.</p>
            <p>MIPOGG offers access to simple tumor-specific algorithms that guide the clinician through the decisional process of whether a child requires a genetics referral. MIPOGG incorporates evidence-based educational modules outlining associations between pediatric tumors and cancer predisposition syndromes.</p>
            <p>We hope you find it useful!</p>
            <p>MIPOGG Team</p>
        </div>
        <div class="welcome-background">
            <img class="welcome-image" src="/images/welcome.png" alt="">
        </div>
    </div>
</div>
<div id="download-the-app" class="download-app">
    <div class="container">
        <div class="download-app-wrapper">
            <div class="download-app-info">
                <h2>Download the app</h2>
                <p>Download our application on the App Store or on Google Play.</p>
            </div>
            <div class="download-app-images">
                <ul>
                    <li><a href="https://apps.apple.com/ca/app/mipogg/id1482275796" target="_blank"><img src="/images/app_store_logo.png" alt=""></a></li>
                    <li><a href="https://play.google.com/store/apps/details?id=com.mipogg.app&hl=en" target="_blank"><img src="/images/google_play_logo.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="our-partners" class="our-partners">
    <div class="container">
        <div class="our-partners-info">
            <h2>Our Partners</h2>
            <ul>
                <li><a href="https://fondationduchildren.com" target="_blank"><img src="/images/partners/p1.png"></a></li>
                <li><a href="https://sarahsfund.ca" target="_blank"><img src="/images/partners/p2.png"></a></li>
                <li><a href="http://www.sickkids.ca/gfcc/" target="_blank"><img src="/images/partners/p3.png"></a></li>
                <li><a href="https://www.charlesbruneau.qc.ca" target="_blank"><img src="/images/partners/p4.png"></a></li>
                <li><a href="https://www.pogo.ca" target="_blank"><img src="/images/partners/p5.png"></a></li>
                <li><a href="https://www.hopitalpourenfants.com" target="_blank"><img src="/images/partners/p6.png"></a></li>
                <li><a href="http://www.sickkids.ca" target="_blank"><img src="/images/partners/p7.png"></a></li>
                <li><a href="https://www.chusj.org" target="_blank"><img src="/images/partners/p8.png"></a></li>
                <li><a href="https://mcgill.ca" target="_blank"><img src="/images/partners/p9.png"></a></li>
            </ul>
        </div>
    </div>
</div>
<div id="contact-us" class="contact-us">
    <div class="contact-us-map">
        <div class="contact-us-container">
            <div class="contact-us-info">
                <h2>Contact Us</h2>
                {{-- <div class="contact-us-tel">
                    <a href="tel:514.000.0000">514.000.0000</a>
                </div>
                <div class="contact-us-location">
                    <p>0000 rue, Suite 100</p>
                    <p>Saint-Laurent (Qc) Canada</p>
                    <p>H0H 0Z0</p>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="contact-us-form">
        <div class="contact-us-container">
            <form action="">
                <div class="form-row">
                    <div class="form-label">
                        <label for="name">*First Name</label>
                    </div>
                    <div class="form-input">
                        <input type="text" id="first_name" name="first_name"/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="name">*Last Name</label>
                    </div>
                    <div class="form-input">
                        <input type="text" id="last_name" name="last_name"/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="email">*Email</label>
                    </div>
                    <div class="form-input">
                        <input type="text" id="email" name="email"/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">
                        <label for="message">*Message</label>
                    </div>
                    <div class="form-input">
                        <textarea id="message" name="message"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-input">
                        <button type="submit">SEND</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
