@extends('homepage')

@section('content')

    @include('navigation.contact_us')

    <div class="medium-banner">
        <h1>Contact us</h1>
    </div>

    <div class="container">

        <div class="row">

            <div class="spacer"></div>

            <p>Please ring our main office on +44 (0) 191 385 8348 for general enquiries relating to the UK and Europe,
                or fill in the enquiry form on the main 'Contact Us' page.</p>

            <p>Alternatively, please email the relevant department below:</p>

            <table>
                <tr>
                    <td><strong>Sales and pricing enquiries</strong>:</td>
                    <td><a href="mailto:sales@agripol.co.uk">sales@agripol.co.uk</a></td>
                </tr>
                <tr>
                    <td><strong>Shipping or delivery enquiries</strong>:</td>
                    <td><a href="mailto:logistics@agripol.co.uk">logistics@agripol.co.uk</a></td>
                </tr>
                <tr>
                    <td><strong>General enquiries</strong>:</td>
                    <td><a href="mailto:info@agripol.co.uk">info@agripol.co.uk</a></td>
                </tr>
            </table>

            <h3 class="underline-header">Technical Support</h3>

            <p>For technical support or guidance, you can ask to speak to Paul, our applications expert, on the above
                number. He has a very busy schedule, but you will usually receive a callback by the end of the working
                day. If you have a particularly complex or tricky issue, you can book a video-call appointment via the
                main office.</p>

            <h3 class="underline-header">Company Address / Head Office</h3>

            <p>23 Callington Close, Bournmoor, Co. Durham, DH4 6BJ England.</p>

        </div>
    </div>

@endsection