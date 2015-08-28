@extends('homepage')

@section('content')

    @include('navigation.contact_us')

    <div class="medium-banner">
        <h1>Contact us</h1>
    </div>

    <div class="container">

        <div class="row">

            <div class="spacer"></div>

            <p>We are always happy to help, whether with simple sales enquiries or advanced technical support. We have
                over 25 years experience in the field and are constantly trialling our products to find even better ways
                of using them, and are more than happy to advise you.</p>

            <h3 class="underline-header">General Enquiries</h3>

            <!--<p>Please use the form below.</p>-->

            <p>If you would rather speak to us via telephone, our number is +44 (0) 191 3858348. Our office staff are in
                from 9am until 3.30pm weekdays for sales or pricing enquiries and to take orders, but we do have an
                answer phone should you wish to leave a message outside these hours.</p>

            <h3 class="underline-header">Technical Support</h3>

            <p>For technical support or guidance, you can ask to speak to Paul, our applications expert, on the above
                number. It may not always be possible for him to speak to you immediately, as he has a very busy
                timetable, but you will usually recieve a callback before the end of the working day.</p>


            <h3 class="underline-header">Company Address / Head Office</h3>

            23 Callington Close, Bournmoor, Co. Durham, DH4 6BJ England.


            <!--




            <form id="fbform" style="margin-top: 10px;" method="post" action="contact">
                <label for="name">Your Name</label>
                <input id="name" type="text" name="name" size="30">

                <label for="tel">Your Telephone No</label>
                <input id="tel" type="text" name="tel" size="30">

                <label for="email">Your Email Address</label>
                <input id="email" type="text" name="email" size="30">
                <input id="copy" type="checkbox" value="1" name="copy">
                <label style="font-style: italic;" for="copy">send copy to this address</label>


                <label for="subject">Subject of your Email</label>


                <input id="subject" type="text" value="Enquiry from Agricultural Polymers International Ltd website" name="subject" style="width:96%;">


                <label style="display: block; overflow: hidden; width: 0; height: 0;" for="comments">Your comments</label>
                <textarea id="comments" style="width:96%" rows="8" name="comments"></textarea>

                <input type="submit" value="Send Message">

            </form>

            -->

        </div>
    </div>

@endsection