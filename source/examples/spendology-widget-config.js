window.addEventListener('SPENDOLOGY_WIDGETS_LOADED', function () {
    var apiUrl = 'https://api.travelmoney.yourwebsite.com';
    var appSignUpUrl = 'https://app.travelmoney.yourwebsite.com/signup';

    /*************************************************
     * Instant Quote
     **************************************************/
    if (document.getElementById('InstantQuote')) {
        var instantQuoteOptions = {
            selector: "#InstantQuote",
            api_url: apiUrl,
            button_url: appSignUpUrl,
            button_text: 'Buy now',
            delivery_text: "* We charge £4.95 for delivery. ",
            footer_text: "We take your privacy very seriously and promise never to share this data with third " +
                "parties without your consent. Take a look at our " +
                "<a href=\"http://www.yourwebsite.com\">privacy policy</a> for more information." +
                "<br /><br />" +
                "Please note that we always round the foreign currency to the lowest available denomination. The " +
                "exchange rate shown is constantly updated with the latest market data so costs may go up and down.",
        };

        SPENDOLOGY.InstantQuote.new(instantQuoteOptions).render({
            selected_currency: 'USD', 	// Default selected currency
            spend: 750					// Default spend amount (GBP)
        });
    }

    /*************************************************
     * Rate Comparison
     **************************************************/
    if ( document.getElementById('RateComparison')) {
        var rateComparisonOptions = {
            selector: "#RateComparison",
            api_url: apiUrl,
            button_url: appSignUpUrl,
            button_text: 'Buy now',
        };

        SPENDOLOGY.RateComparison.new(rateComparisonOptions).render({
            currencies: [
                "EUR", "USD", "AED", "AUD", "CAD", "CHF", "CZK", "DKK", "HKD", "HRK", "HUF", "JPY", "MXN", "NOK", "NZD", "PLN", "SEK", "SGD", "THB", "ZAR"
            ]
        });
    }

    /*************************************************
     * Live Rates Board
     **************************************************/
    if (document.getElementById( 'LiveRateBoard')) {
        var liveRateBoardOptions = {
            selector: "#LiveRateBoard",
            api_url: apiUrl,
            button_url: appSignUpUrl,
            button_text: 'Buy now',
        };
        SPENDOLOGY.LiveRateBoard.new(liveRateBoardOptions).render();
    }
});
