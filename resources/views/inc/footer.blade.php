
{{-- Creating the footer.blade.php to allow us to include it to every page with a simple function. --}}

<div class="g-translate">

  <h2>Translate Our Site</h2>

<div id="google_translate_element"></div>

</div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="footer-info">
    <div class="copyright">
        Copyright &copy; {{ date('Y') }}
    </div>

    <div class="atol"><img src="/images/atol.png"></div>

    <div class="quick-links">
        <h3>Quick Links</h3>
        <div class="ql-inner">
            <a href="route-map">Route Map</a>
            <a href="FAQ">FAQs</a>
            <a href="ATOL">ATOL Information</a>
        </div>
        <div class="ql-inner">
            <a href="privacy-policy">Privacy Policy</a>
            <a href="terms-conditions">Terms and Conditions</a>
            <a href="cookies">Cookies</a>
        </div>
        <div class="ql-inner">
            <a href="baggage">Baggage</a>
            <a href="transfers">Transfers</a>
            <a href="contact">Contact Us</a>
        </div>

    </div>

</div>
</body>



</html>
