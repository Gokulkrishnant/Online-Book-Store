# Book-Store

> A PHP E-commerce web application

This is an E-commerece project for buying books online where admin can add the available books in the database and keep updating the database which will be shown to the user on the website simultaneously. The end user will have to Register to the website and search the books he needs and adds then to cart then order them.

## Configuration requirements
 1. To set this web application, make sure PHP and PHPMyAdmin is installed on your server.
 2. Next open PHPMyAdmin, import the [bookstore (1).sql](https://github.com/Gokulkrishnant/Online-Book-Store/blob/main/Book-Store/bookstore%20(1).sql) file.This will generate tables in your database on your server.
 
    ```
    
    ```
 4. Open [config_paytm.php](https://github.com/Gokulkrishnant/Online-Book-Store/blob/main/Book-Store/User-Interface/payment/lib/config_paytm.php) .You need to change the Merchant key and Merchant ID.
    ``` 
    define('PAYTM_ENVIRONMENT', 'TEST'); // PROD
    define('PAYTM_MERCHANT_KEY', 'ADD Merchant key'); //Change this constant's value with Merchant key received from Paytm.
    define('PAYTM_MERCHANT_MID', 'ADD MerchantID'); //Change this constant's value with MID (Merchant ID) received from Paytm.
    define('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING'); //Change this constant's value with Website name received from Paytm.
    ```
 
 5. Once this is done, go to the url of your website and it should be up and running.

## Functionalities 
  - Admin Panel
  - Cart Management
  - Login Management
  - Payment Gateway
  - Order Tracking
  - Bill Printing Functionality
  - Book Conversion
  - Image Conversion
  



## Technologies Used

- HTML/CSS
- JavaScript
- Bootstrap
- PHP
- Mysql
- Paytm Payment Gateway
- python Django
- Tessart javascript library

[Screenshots](https://github.com/Gokulkrishnant/Online-Book-Store/tree/main/Book-Store/Project%20Screenshots)


