<?php
include "header.php";
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act) {
        case 'book-now':
            include "book_now.php";
            break;
        case 'service':
            include "service.php";
            break;
        case 'nail-spa':
            include "home.php";
            break;
        case 'about-us':
            include "about_us.php";
            break;
        case 'shop':
            include "shop.php";
            break;
        case 'nail-art':
            include "library.php";
            break;
        case 'gift-card':
            include "gift_cart.php";
            break;
        case 'policies':
            include "policies.php";
            break;
        case 'our-diference':
            include "our_diference.php";
            break;
        case 'location':
            include "location.php";
            break;
        case 'contact-us':
            include "contact_us.php";
            break;
        case 'faq':
            include "FAQ.php";
            break;
        
        default:
        include "home.php";
        break;    
    }
} else {
    include "home.php";
}

include "footer.php"
?>