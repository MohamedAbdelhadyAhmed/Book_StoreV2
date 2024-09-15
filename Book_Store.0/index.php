<?php
session_start();

require_once 'src/functions.php';

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'about':
            require_once 'views/about.php';
            break;
        case 'account_details':
            require_once 'views/account_details.php';
            break;
        case 'account':
            require_once 'views/account.php';
            break;
        case 'branches':
            require_once 'views/branches.php';
            break;
        case 'checkout':
            require_once 'views/checkout.php';
            break;
        case 'contact':
            require_once 'views/contact.php';
            break;
        case 'favourites':
            require_once 'views/favourites.php';
            break;
        case 'home':
            require_once 'views/home.php';
            break;
        case 'orders':
            require_once 'views/orders.php';
            break;
        case 'order-details':
            require_once 'views/order-details.php';
            break;
        case 'order_recieved':
            require_once 'views/order_recieved.php';
            break;
        case 'privacy-policy':
            require_once 'views/privacy-policy.php';
            break;
        case 'profile':
            require_once 'views/profile.php';
            break;
        case 'refund-policy':
            require_once 'views/refund-policy.php';
            break;
        case 'shop':
            require_once 'views/shop.php';
            break;
        case 'track-order':
            require_once 'views/track-order.php';
            break;
        case 'single-product':
            require_once 'views/single-product.php';
            break;
        default:
            require_once 'views/404.php';
            break;
    }
} else {
    require_once 'views/home.php';
}
