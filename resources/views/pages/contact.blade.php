@include('inc.header') 

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

@include('inc.footer')
