@include('inc.header')
{{-- include --}}
@include('inc.title')

<div class="c-bg">
    <div class="contact-container">

        <form>
            <div class="half-content">
                <input id="name" placeholder="Name:">
                <input id="email" placeholder="Email:">
                <input id="phone" placeholder="Phone:">
            </div>

            <div class="half-content">
                <textarea id="message" placeholder="Message:"></textarea>

                <button>Submit</button>
            </div>
        </form>
        <div class="half-content c-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruresunt explicabo.
        </div>

        <div class="half-content c-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis nostrud exercitation ullamco laboris nisi ut aliquip.
        </div>
    </div>

</div>

<div id="map">

  </div>

<script>
function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(54.687254, -5.8871134),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHTKPx7gAUn_EiIzxHDkCMl5H8s4AXpf4&callback=myMap"></script>
@include('inc.footer')
