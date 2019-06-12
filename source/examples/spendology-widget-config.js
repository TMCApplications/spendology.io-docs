window.addEventListener('SPENDOLOGY_WIDGETS_LOADED', function () {
    var apiUrl = 'https://tmc.mockable.io';
    var appSignUpUrl = 'https://google.co.uk';

    /*************************************************
     * Instant Quote
     **************************************************/
    var instantQuoteId = 'InstantQuote';
    if (document.getElementById(instantQuoteId)) {
        var instantQuoteOptions = {
            selector: "#" + instantQuoteId,
            api_url: apiUrl,
            button_url: appSignUpUrl,
            button_text: 'Buy now',
            delivery_text: "* We charge £4.95 for delivery. ",
            footer_text: "This will appear underneath the widget. You can put <b>html code</b> in here." +
                " Usually this text has a link to your <a href\"#privacy_policy\">privacy policy</a> and other " +
                "disclaimers. For example:<br /><br />" +
                "Please note that we always round the foreign currency to the lowest available denomination. The " +
                "exchange rate shown is constantly updated with the latest market data so costs may go up and down."
            ,
        };

        SPENDOLOGY.InstantQuote.new(instantQuoteOptions).render({
            selected_currency: 'USD', 	// Default selected currency
            spend: 750					// Default spend amount (GBP)
        });
    }

    /*************************************************
     * Rate Comparison
     **************************************************/
    var rateComparisonId = 'RateComparison';
    if ( document.getElementById(rateComparisonId)) {
        var rateComparisonOptions = {
            selector: "#" + rateComparisonId,
            api_url: apiUrl,
            button_url: appSignUpUrl,
            button_text: 'Buy now',
            poll_frequency:  60000,
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
    var liveRateBoardId = 'LiveRateBoard';
    if (document.getElementById(liveRateBoardId)) {
        var liveRateBoardOptions = {
            selector: "#" + liveRateBoardId,
            api_url: apiUrl,
            button_url: appSignUpUrl,
            button_text: 'Buy now',
            refresh_interval: 60000,
        };
        SPENDOLOGY.LiveRateBoard.new(liveRateBoardOptions).render();
    }
});
