window.addEventListener('SPENDOLOGY_WIDGETS_LOADED', function () {
    /*************************************************
     * Instant Quote
     **************************************************/
    if (document.getElementById('InstantQuote')) {
        var instant_quote_options = {
            selector: "#InstantQuote",
            api_url: 'https://api.travelmoney.yourwebsite.com',
            button_url: 'https://app.travelmoney.yourwebsite.com/signup',
            button_text: 'Buy now',
            delivery_text: "* We charge £4.95 for delivery. ",
            footer_text: "We take your privacy very seriously and promise never to share this data with third " +
                "parties without your consent. Take a look at our " +
                "<a href=\"http://www.yourwebsite.com\">privacy policy</a> for more information." +
                "<br /><br />" +
                "Please note that we always round the foreign currency to the lowest available denomination. The " +
                "exchange rate shown is constantly updated with the latest market data so costs may go up and down.",
        };

        SPENDOLOGY.InstantQuote.new(instant_quote_options).render({
            selected_currency: 'USD', 	// Default selected currency
            spend: 750					// Default spend amount (GBP)
        });
    }

    /*************************************************
     * Rate Comparison
     **************************************************/
    if ( document.getElementById('RateComparison')) {
        var options = {
            selector: "#RateComparison",
            api_url: 'https://api.travelmoney.yourwebsite.com',
            button_url: 'https://app.travelmoney.yourwebsite.com/signup',
            button_text: 'Buy now',
        };

        SPENDOLOGY.RateComparison.new(options).render({
            currencies: [
                "EUR", "USD", "AED", "AUD", "CAD", "CHF", "CZK", "DKK", "HKD", "HRK", "HUF", "JPY", "MXN", "NOK", "NZD", "PLN", "SEK", "SGD", "THB", "ZAR"
            ]
        });
    }

    /*************************************************
     * Live Rates Board
     **************************************************/
    if (document.getElementById( 'LiveRateBoard')) {
        var live_rate_board_options = {
            selector: "#LiveRateBoard",
            api_url: 'https://api-prod.prod.yourwebsite.com',
            button_url: 'https://app.yourwebsite.com/signup',
            button_text: 'Buy now',
        };
        SPENDOLOGY.LiveRateBoard.new(live_rate_board_options).render();
    }
});
