# currency-trader-web

Currency Trader Web Application

### Prerequisites


```
php >= 7.2
mysql
web browser, Google Chrome prefered
```

### Installing


```
1. open terminal on MAC or Linux, or cmd on Windows
2. run composer install (install composer if it is not installed!)
3. navigate to public folder
4. run php -S localhost:8080
5. open web browser and navigate to localhost:8080

```
### Notes

```
CLick on Update Exchange Rates link updates currencies table with fresh data from https://currencylayer.com/
Get Exchange Rates button shows exchange rates from currencies table. AJAX is used here to call a web service public/scripts.js
Validation for Amount field is also handled on client side with JS script public/scripts.js
Click on Calculate button navigates to confirm page where all needed info is shown.
Click on Purchase button stores actual order in orders table, and the order info is shown on store page
```

### Router

```
Router class is inspired by https://github.com/afgprogrammer/PHP-MVC-REST-API

```

