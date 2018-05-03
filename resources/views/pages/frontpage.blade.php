{{--

This is the frontpage of our website.

The header.blade.php and footer.blade.php will be included in the top and bottom of this file.

--}}

    @extends('layouts.app')

{{-- we tried populating the dropdown box with a database but could not figure out how to do it --}}
  <?php  $destinations = array('London',
                                'Belfast',
                               'Salzburg',
                               'Vienna',
                               'Berlin',
                               'Munich',
                               'Krakow',
                               'Ibiza',
                               'Majorca',
                               'Menorca',
                               'Palma',
                                'Tenerife',
                                'Las Palmas',
                                'Jersey',
                                'Prague',
                                'Copenhagan',
                                'Cannes',
                                'Monaco',
                                'Nice',
                                'Paris',
                                'Budapest',
                                'Florence',
                                'Lake Garda',
                                'Naples',
                                'Piza',
                                'Rome',
                                'Venice',
                                'Geneva',
                                'New York');
  ?>

    <div class="main-bg">

        <img src="images/fp-bg.jpg">
        {{-- testing --}}
        {{--

        Creating a form to hold the drop-down select boxes for the departure/arrival
        airports, date selection and a button to submit.

        These drop-down boxes will be populated from a database.

        --}}

        <div class="hero-container">
            <form class="half-content" action="booking" method="POST">
              {{ csrf_field() }}
                <select id="departures" name="departure">
            <option value="select">Departure</option>
            @foreach($destinations as $destination)
                <option type="text">{{ $destination }}</option>
            @endforeach

            </select>

                <select id="arrivals" name="arrival">
            <option value="select">Arrival</option>
            @foreach($destinations as $destination)
                <option type="text">{{ $destination }}</option>
            @endforeach
            </select>

                <input type="date" id="dates" type="text" name="date">
            </select>

                <button href="booking" id="search">Find My Holiday</button>
            </form>

            <div class="main-bg-words half-content">
                <h1>Great Deals on<br />Winter Breaks</h1>
                <h2>With Up To</h2>
                <h1>£100 Off<br />Per Person*</h1>

            </div>

            </div>
    </div>

    <a href="deals" id="bnr">
        <div class="offer-banner">
            Click Here To Check Out Great Last Minute Offers
        </div>
    </a>

    {{--

The featured section will alllow the user to scroll through a list of latest offers.

These offers will be stored and we will use php to display the offers based on if they
are stored as an offer or not.

--}}

    <div class="featured">

        <h1>Featured Deals</h1>

        <div class="owl-carousel f-row">

            <a href="zurich"><div class="f-item-outer">
                <div class="f-thumb">
                    <img src="images/city-break.jpg">
                </div>
                <div class="f-info">
                    <div class="f-category">
                        City Break
                    </div>
                    <div class="f-town">
                        Zurich, Switzerland
                    </div>
                    <div class="f-bullets">
                        Central Location<br /> Sightseeing<br /> Breath-Taking Tours
                    </div>
                    <img src="images/tripadvisor.png" id="rating">
                </div>
                </div></a>

            <a href="albuferia"><div class="f-item-outer">
                <div class="f-thumb">
                    <img src="images/sunny-beach.jpg">
                </div>
                <div class="f-info">
                    <div class="f-category">
                        Beach Holiday
                    </div>
                    <div class="f-town">
                        Albuferia, Portugal
                    </div>
                    <div class="f-bullets">
                        Central Location<br /> Sightseeing<br /> Breath-Taking Tours
                    </div>
                    <img src="images/tripadvisor.png" id="rating">
                </div>
                </div></a>

            <a href="reykjavik"><div class="f-item-outer">
                <div class="f-thumb">
                    <img src="images/northern-lights.jpg">
                </div>
                <div class="f-info">
                    <div class="f-category">
                        City Break
                    </div>
                    <div class="f-town">
                        Reykjavik, Iceland
                    </div>
                    <div class="f-bullets">
                        Central Location<br /> Sightseeing<br /> Breath-Taking Tours
                    </div>
                    <img src="images/tripadvisor.png" id="rating">
                </div>
                </div></a>

        </div>

    </div>

    {{--

    Small section with bullet points on what our service offers.

    --}}

        <div class="four-points-outer">
            <div class="four-points-inner">

                <div class="fpi-item">
                    <div class="half-content">
                        <img src="images/baggage.png">
                    </div>
                    <div class="half-content">
                        22KG <br />Baggage
                    </div>
                </div>

                <div class="fpi-item">
                    <div class="half-content">
                        <img src="images/transport.png">
                    </div>
                    <div class="half-content">
                        Transfers <br />included
                    </div>
                </div>

                <div class="fpi-item">
                    <div class="half-content">
                        <img src="images/ccard.png">
                    </div>
                    <div class="half-content">
                        Zero Credit <br />Card Fees
                    </div>
                </div>

                <div class="fpi-item">
                    <div class="half-content">
                        <img src="images/wallet.png">
                    </div>
                    <div class="half-content">
                        £60 <br />Deposit
                    </div>

                </div>
            </div>
        </div>

        <div class="social">
            <h1>Spread The News</h1>

            <h4>Follow us on social media to keep up to date with latest offers and flight updates</h4>

            <div class="social-icons">

                <div class="si-item">
                    <a href="#"><img src="/images/facebook.png"></a>
                </div>

                <div class="si-item">
                    <a href="#"><img src="/images/twitter.png"></a>
                </div>

                <div class="si-item">
                    <a href="#"><img src="/images/linkedin.png"></a>
                </div>

            </div>
        </div>

        {{--

        Here is where the footer.blade.php file is included.

        --}}

        @include('inc.footer')
