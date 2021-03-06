@extends('_layouts.master')

@section('meta-title', 'Hotels | Hillary &amp; Forrest')

@section('hotels-nav-active', 'active')

@section('header-class', 'header-hotels')

@section('hero')
    <div id="hero" class="hero-hotels">
        <h1 class="hero-headline-ceremony">HOTELS</h1>
        <h4 class="hero-desc">The Madison Concourse Hotel<br>
            <hr class="half-rule">
            Hampton Inn &amp; Suites
        </h4>
        <img src="/img/caret.png" class="caret">
    </div>
@endsection

@section('content')
    <section class="hotel-info">
        <div class="sec sec-1">
            <div class="container">
                <h3>Hotels</h3>
                <p>For all of our out of town guests, and those looking to have a good time, we've reseverved blocks of
                    rooms at The Madison Concourse Hotel and Hampton Inn (located 2 blocks south from the reception) to
                    meet any and all of your accomodations.</p>
            </div>
        </div>
        <div class="sec sec-2">
            <div class="flex-container">
                <div class="img-container">
                    <img src="/img/concourse_logo.jpg" class="hotel-logo-lg hotel-logo-concourse">
                </div>
                <div class="flex-content">
                    <h3>The Madison Concourse</h3>
                    <img src="/img/concourse_logo.jpg" class="hotel-logo-sm hotel-logo-concourse">
                    <p>With its location right in the heart of Madison, near the State Capitol, State Street, Overture
                        Center, and the site of our wedding reception, we have a block of rooms reserved with The
                        Madison Concourse Hotel &amp; Governor's Club. Please let the hotel know that you would like to
                        book your room under the Wilson/Olson Wedding block. Since it's a holiday weekend, room
                        availability is limited. You can call 608-257-6000 or click below on your phone.</p>
                    <a href="tel:+1-608-257-6000">
                        <button class="ghost-btn ghost-btn-black">Click here to Call &amp; Reserve</button>
                    </a>
                </div>
            </div>
        </div>
        </div>
        <div class="sec sec-3">
            <div class="flex-container">
                <div class="img-container">
                    <img src="/img/hampton_logo.jpg" class="hotel-logo-lg container">
                </div>
                <div class="flex-content">
                    <h3>Hampton Inn &amp; Suites</h3>
                    <img src="/img/hampton_logo.jpg" class="hotel-logo-sm container">
                    <p>Located in the heart of downtown Madison and adjacent to the University of Wisconsin, the
                        friendly Hampton Inn &amp; Suites Madison/Downtown is within walking distance of shops,
                        galleries, restaurants, nightspots, and - most importantly - the wedding reception.</p>
                    <a href="http://hamptoninn.hilton.com/en/hp/groups/personalized/M/MSNBJHX-WOW-20160701/index.jhtml"
                       target="_blank">
                        <button class="ghost-btn ghost-btn-white ceremony-btn">Click here for online reservations
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection