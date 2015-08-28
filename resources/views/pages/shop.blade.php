@extends('homepage')

@section('content')

    <div class="medium-banner">
        <h1>Online Shop</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="spacer"></div>
            <p>Prices are calculated based on one unit plus VAT and shipping within mainland UK*.</p>


            <p>(Some of the pictures are of the 'other' product, e.g. a Broadleaf P4 item may have a Rootdip image.
                However,
                packaging is identical (apart from the labels), and the images should give you an idea of size.)</p>

        </div>
        <div class="row">

            <div class="col-md-4 wBorder">
                <h3 class="underline-header">A size for any project...</h3>
                <img src="images/size range f.jpg" class="agrimg-center"/>

                <p>With sizes ranging from 250g to 25kg, there will always be a size suitable for your needs. Plus our
                    resealable bucket sizes mean that you can keep it safe for years, without worrying about
                    spoilage.</p>

                <p>If you need advice on what is best for your project, please don't hesitate to contact us.</p>

            </div>

            <div class="col-md-4 wBorder">
                <h3 class="underline-header">Broadleaf P4- 250g tub</h3>
                <img src="images/250g f.jpg" class="agrimg-center"/>

                <p>This resealable tub will treat 1/4 ton of soil/compost, and is perfect for hobby gardeners, as it is
                    specifically designed for horticulture.</p>

                <div class="price">&pound8.40</div>

                <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
                    <input type="hidden" value="_cart" name="cmd">
                    <input type="hidden" value="sales@agripol.co.uk" name="business">
                    <input type="hidden" value="1" name="add">
                    <input type="hidden" value="Broadleaf P4- 250g tub" name="item_name">
                    <input type="hidden" value="" name="item_number">
                    <input type="hidden" value="GBP" name="currency_code">
                    <input type="hidden" value="8.4" name="amount">
                    <input type="hidden" value="http://www.agripol.co.uk/shop.asp?sc=1" name="shopping_url">
                    <input type="image" border="0" name="submit" src="images/add_to_cart.gif">
                </form>

            </div>


            <div class="col-md-4 wBorder">
                <h3 class="underline-header">Broadleaf P4- 2kg bucket</h3>
                <img src="images/2kg comp 25kg f.jpg" class="agrimg-center"/>

                <p>This bucket will treat 2 tonnes of compost/soil, but as it is resealable, it is perfect for small
                    projects taking place over a few years. </p>

                <div class="price">&pound41.40</div>

                <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
                    <input type="hidden" value="_cart" name="cmd">
                    <input type="hidden" value="sales@agripol.co.uk" name="business">
                    <input type="hidden" value="1" name="add">
                    <input type="hidden" value="Broadleaf P4- 2kg bucket" name="item_name">
                    <input type="hidden" value="" name="item_number">
                    <input type="hidden" value="GBP" name="currency_code">
                    <input type="hidden" value="41.40" name="amount">
                    <input type="hidden" value="http://www.agripol.co.uk/shop.asp?sc=1" name="shopping_url">
                    <input type="image" border="0" name="submit" src="images/add_to_cart.gif">
                </form>

            </div>


        </div>

        <div class="row">


            <div class="col-md-4 wBorder">
                <h3 class="underline-header">Broadleaf Rootdip- 2kg bucket</h3>
                <img src="images/2kg comp 25kg f.jpg" class="agrimg-center"/>

                <p>This resealable bucket will treat approx. 2600 45-60cm transplants.</p>

                <div class="price">&pound41.40</div>

                <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
                    <input type="hidden" value="_cart" name="cmd">
                    <input type="hidden" value="sales@agripol.co.uk" name="business">
                    <input type="hidden" value="1" name="add">
                    <input type="hidden" value="Broadleaf Rootdip- 2kg bucket" name="item_name">
                    <input type="hidden" value="" name="item_number">
                    <input type="hidden" value="GBP" name="currency_code">
                    <input type="hidden" value="41.40" name="amount">
                    <input type="hidden" value="http://www.agripol.co.uk/shop.asp?sc=1" name="shopping_url">
                    <input type="image" border="0" name="submit"
                           src="http://www.spanglefish.com/images/add_to_cart.gif">
                </form>

            </div>
            <div class="col-md-4 wBorder">
                <h3 class="underline-header">Broadleaf P4- 10kg bucket</h3>
                <img src="images/2kg comp 10kg f.jpg" class="agrimg-center"/>

                <p><em>(seen here in relation to the 2kg size)</em></p>

                <p>This bucket will treat 10 tonnes of soil/compost, and is resealable, so you can use it over several
                    years.</p>

                <div class="price">&pound141.00</div>

                <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
                    <input type="hidden" value="_cart" name="cmd">
                    <input type="hidden" value="sales@agripol.co.uk" name="business">
                    <input type="hidden" value="1" name="add">
                    <input type="hidden" value="Broadleaf P4- 10kg bucket" name="item_name">
                    <input type="hidden" value="" name="item_number">
                    <input type="hidden" value="GBP" name="currency_code">
                    <input type="hidden" value="141" name="amount">
                    <input type="hidden" value="http://www.agripol.co.uk/shop.asp?sc=1" name="shopping_url">
                    <input type="image" border="0" name="submit" src="images/add_to_cart.gif">
                </form>

            </div>
            <div class="col-md-4 wBorder">
                <h3 class="underline-header">Broadleaf Rootdip- 10kg bucket</h3>
                <img src="images/2kg comp 10kg f.jpg" class="agrimg-center"/>

                <p><em>(seen here in relation to the 2kg size)</em></p>

                <p>This resealable bucket will treat approx. 13,000 45-60cm transplants.</p>

                <div class="price">&pound141.00</div>

                <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
                    <input type="hidden" value="_cart" name="cmd">
                    <input type="hidden" value="sales@agripol.co.uk" name="business">
                    <input type="hidden" value="1" name="add">
                    <input type="hidden" value="Broadleaf Rootdip- 10kg bucket" name="item_name">
                    <input type="hidden" value="" name="item_number">
                    <input type="hidden" value="GBP" name="currency_code">
                    <input type="hidden" value="141" name="amount">
                    <input type="hidden" value="http://www.agripol.co.uk/shop.asp?sc=1" name="shopping_url">
                    <input type="image" border="0" name="submit" src="images/add_to_cart.gif">
                </form>

            </div>

        </div>

        <div class="row">


            <div class="col-md-6 wBorder">
                <h3 class="underline-header">Broadleaf P4- 25kg sack</h3>
                <img src="images/25kg f.jpg" class="agrimg-center"/>

                <p>This size treats about 25 tonnes of soil/compost. This sack is not resealable, but if you store any
                    excess in a waterproof container it should be fine.</p>

                <div class="price">&pound200.40</div>

                <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
                    <input type="hidden" value="_cart" name="cmd">
                    <input type="hidden" value="sales@agripol.co.uk" name="business">
                    <input type="hidden" value="1" name="add">
                    <input type="hidden" value="Broadleaf P4- 25kg sack" name="item_name">
                    <input type="hidden" value="" name="item_number">
                    <input type="hidden" value="GBP" name="currency_code">
                    <input type="hidden" value="200.40" name="amount">
                    <input type="hidden" value="http://www.agripol.co.uk/shop.asp?sc=1" name="shopping_url">
                    <input type="image" border="0" name="submit" src="images/add_to_cart.gif">
                </form>

            </div>

            <div class="col-md-6 wBorder">
                <h3 class="underline-header">Broadleaf Rootdip- 25kg sack</h3>
                <img src="images/25kg f.jpg" class="agrimg-center"/>

                <p>This 25kg sack will treat approx. 32,500 45-60cm transplants. Not resealable- but if excess is stored
                    in a waterproof container it should keep.</p>

                <div class="price">&pound200.40</div>

                <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
                    <input type="hidden" value="_cart" name="cmd">
                    <input type="hidden" value="sales@agripol.co.uk" name="business">
                    <input type="hidden" value="1" name="add">
                    <input type="hidden" value="Broadleaf Rootdip- 25kg sack" name="item_name">
                    <input type="hidden" value="" name="item_number">
                    <input type="hidden" value="GBP" name="currency_code">
                    <input type="hidden" value="200.40" name="amount">
                    <input type="hidden" value="http://www.agripol.co.uk/shop.asp?sc=1" name="shopping_url">
                    <input type="image" border="0" name="submit" src="images/add_to_cart.gif">
                </form>

            </div>

        </div>

    </div>

@endsection