var btn = document.getElementById('btn-exchange-rates');
var amount = document.getElementById('amount');
var submitButton = document.getElementById('calculate');

btn.addEventListener('click', function (event) {
    fetch('http://localhost:8888/currencies')
        .then(response => response.json())
        .then(data => {
            // console.log(data); // Prints result from `response.json()` in getRequest

            var exchangeRatesList = document.getElementById('exchange-rates');
            if (exchangeRatesList.hasChildNodes()) {
                while (exchangeRatesList.firstChild) {
                    exchangeRatesList.removeChild(exchangeRatesList.firstChild);
                }
            }
            data.forEach(function (item, index) {
                var node = document.createElement("p");                 // Create a <p> node
                var textNode = document.createTextNode(item.code + ': ' + item.exchange_rate); // Create a text node
                node.appendChild(textNode);                              // Append the text to <div>
                exchangeRatesList.appendChild(node);
            });
        })
        .catch(error => console.error(error))
});

submitButton.addEventListener('click', function(event) {
    if (amount.value === '') {
        event.preventDefault();
        document.getElementById('empty').setAttribute("style", "display:block;");
    }
    if (isNaN(amount.value)) {
        event.preventDefault();
        document.getElementById('not-number').setAttribute("style", "display:block;");
    }
});

