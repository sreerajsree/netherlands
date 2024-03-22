@extends('layouts.app')
@section('seo')
<title>Privacy policy - House for Positive Change</title>
<meta name="description" content="House for Positive Change - Live life. Time flies.">
@endsection
@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/services/host-a-retreat.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Privacy policy</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
    <section class="classes spad pb-0">
        <div class="container terms">
            <p><b>Introduction</b></p>
            <p>
                House for Positive Change processes personal data and other data in accordance with applicable legislation.
                The considerations in this regard are laid down in this privacy statement (hereinafter referred to as:
                “Privacy Statement”).
            </p>
            <p><b>Applicability</b></p>
            <p>
                This Privacy Statement applies to the processing of data obtained from visits to and use of the House for
                Positive Change website and the personal information provided by contact requests and newsletter subscribers
                (hereinafter: Personal Data).
            </p>
            <p><b>College Bescherming Persoonsgegevens</b></p>
            <p>
                House for Positive Change processes the Personal Data in accordance with the laws and regulations in the
                field of Personal Data Protection, such as Wet Bescherming Persoonsgegevens en de Telecommunicatiewetgeving.
            </p>
            <p><b>Processing Personal Data</b></p>
            <p>
                House for Positive Change treats Personal Data confidentially and carefully. House for Positive Change
                collects Personal Data when making contact via the website, subscribing to House for Positive Change and
                when visiting House for Positive Change events and activities. This data is processed for administrative
                purposes. The data are also used to keep those involved informed about House for Positive Change services
                and activities. If you no longer wish to receive this information, you can unsubscribe at any time by using
                the unsubscribe link in the e-mail message or inform House for Positive Change in writing, by e-mail or
                letter to send to <a href="mailto:info@houseforpositivechange.com">info@houseforpositivechange.com</a> or
                House for Positive Change, name and address details.
                House for Positive Change does not provide Personal Data to third parties.
            </p>
            <p><b>Cookies</b></p>
            <p>
                The website <a href="www.houseforpositivechange.com">www.houseforpositivechange.com</a> places cookies.
                Cookies are small text files that are placed on a
                PC, tablet, or mobile phone by an internet page. These cookies are used to make the House for Positive
                Change website function better and to monitor web visits, so that House for Positive Change can check how
                many people have visited the website in a certain period. The cookies are necessary to realize the most
                optimal user experience for its visitors. House for Positive Change only uses this data in aggregated form
                and cannot trace it back to a device or individual.
            </p>
            <p><b>Security</b></p>
            <p>
                House for Positive Change has taken careful and appropriate measures to secure the systems. This is to
                prevent unauthorized access to the personal information or that the personal information is lost.
            </p>
            <p><b>Links</b></p>
            <p>
                The House for Positive Change website contains several links to other organizations’ websites. House for
                Positive Change cannot be held responsible for the use of your data by those organizations. It is
                recommended to read the Privacy Statement of the relevant website.
            </p>
            <p><b>Questions</b></p>
            <p>
                Would you like to ask a question about this privacy policy or just want more information about something
                you’ve read? Then fill in our contact form or email directly to <a href="mailto:info@houseforpositivechange.com">info@houseforpositivechange.com</a>
            </p>
            <p><i>House for Positive Change</i></p>
            <p>Elianne van Waalwijk van Doorn (owner) <br>
                Dobbeweg 11R, 2254 AG Voorschoten <br>
                CoC 72438703 <br>
                <a href="mailto:info@houseforpositivechange.com">info@houseforpositivechange.com</a> <br>
                <a href="telto:+31 6 51 92 85 72">+31 6 51 92 85 72</a>
            </p>
        </div>
    </section>
    @include('includes.blog')
    @include('includes.appointment')
@endsection
