<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aromastylistlipeck
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php wp_head(); ?>

    <title></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url');?>/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url');?>/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url');?>/assets/img/favicons/favicon-16x16.png">

    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#f2f2f2">
    <meta name="theme-color" content="#f2f2f2">
</head>

<body>
    <div class="wrapper">
    <header class="header">
            <div class="header__pattern">
                <picture><source srcset="<?php bloginfo('template_url');?>/assets/img/header-pattern.webp" type="image/webp"><img src="<?php bloginfo('template_url');?>/assets/img/header-pattern.png" alt=""></picture>
            </div>
            <div class="header__container _container">
                <div class="header__body">
                    <div class="header__burger">
                        <span></span>
                        <span></span>  
                        <span></span>
                    </div>
                    <a href="#" class="header__logo">
                        <picture><source srcset="<?php the_field('logo', 'option'); ?>" type="image/webp"><img src="<?php the_field('logo', 'option'); ?>" alt=""></picture>
                    </a>
                    <nav class="header__menu">
                        <ul class="header__menu-body">
                            <li class="header__menu-item _link-underline">
                                <a href="#" class="header__menu-link scroll-to-about">О нас</a>
                            </li>
                            <li class="header__menu-item _link-underline">
                                <a href="#" class="header__menu-link  scroll-to-advantages">Услуги</a>
                            </li>
                            <li class="header__menu-item _link-underline">
                                <a href="#" class="header__menu-link  scroll-to-feedback">Отзывы</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__contacts">
                        <a href="<?php the_field('tel:number', 'option'); ?>" class="header__contacts-phone"><?php the_field('header__phone', 'option'); ?></a>
                        <a href="<?php the_field('tel:number', 'option'); ?>" class="header__contacts-item" id="header__phone">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 0C8.97195 0 0 8.97195 0 20C0 31.028 8.97195 40 20 40C31.028 40 40 31.028 40 20C40 8.97195 31.028 0 20 0ZM20 38.125C10.0059 38.125 1.875 29.9941 1.875 20C1.875 10.0059 10.0059 1.875 20 1.875C29.9941 1.875 38.125 10.0059 38.125 20C38.125 29.9941 29.9941 38.125 20 38.125ZM30.4598 23.6379C30.4598 23.6379 30.4598 23.6379 30.4598 23.6379L26.7857 21.5166C26.2231 21.1919 25.5666 21.1058 24.9373 21.2744C24.308 21.443 23.7825 21.8457 23.4577 22.4084C23.2693 22.7348 22.9392 23.1455 22.4371 23.2482C21.9791 23.3419 21.5748 23.251 21.2011 22.9705C19.8203 21.9343 18.0659 20.1799 17.0295 18.799C16.7491 18.4252 16.6582 18.0209 16.7519 17.563C16.8545 17.0608 17.2652 16.7308 17.5917 16.5423C18.7551 15.8705 19.1551 14.3777 18.4834 13.2143L16.3622 9.54008C15.7546 8.48789 14.4927 8.04656 13.362 8.49055L13.318 8.50781C11.5623 9.19711 10.2784 9.72609 9.74742 10.257C8.78297 11.2216 7.80609 13.0163 8.62961 16.0897C10.2291 22.0591 17.9409 29.7709 23.9103 31.3705C24.7209 31.5877 25.4424 31.6796 26.0834 31.6796C27.8727 31.6796 29.033 30.9628 29.7431 30.2527C30.274 29.7218 30.8028 28.4381 31.492 26.6828L31.5096 26.6381C31.9534 25.5073 31.512 24.2455 30.4598 23.6379ZM29.7641 25.9528L29.7465 25.9976C29.414 26.8445 28.7222 28.6066 28.417 28.9268C27.5221 29.8218 26.1691 30.0345 24.3954 29.5594C19.0467 28.1262 11.8736 20.953 10.4405 15.6044C9.96523 13.8309 10.178 12.4777 11.0721 11.5837C11.3933 11.2777 13.1559 10.5857 14.003 10.2532L14.047 10.2359C14.1173 10.2082 14.1888 10.1951 14.2588 10.1951C14.4525 10.1951 14.6337 10.2968 14.7381 10.4777L16.8594 14.1518C17.0141 14.4198 16.922 14.7637 16.654 14.9184C15.7215 15.4568 15.1038 16.2626 14.9147 17.1873C14.7131 18.1731 14.9258 19.1195 15.5297 19.9244C16.6773 21.4535 18.5466 23.3228 20.0755 24.4702C20.8802 25.0741 21.8267 25.2867 22.8126 25.0852C23.7373 24.896 24.5431 24.2783 25.0815 23.3458C25.1559 23.217 25.277 23.1245 25.4226 23.0855C25.568 23.0466 25.7192 23.0659 25.8482 23.1404L29.5223 25.2616C29.7686 25.404 29.868 25.6882 29.7641 25.9528Z"/>
        </svg>

                        </a>
                        <a href="<?php the_field('whatsapp_link', 'option'); ?>" class="header__contacts-item" id="header__whatsapp">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
<g>
	<path id="WhatsApp" d="M90,43.841c0,24.213-19.779,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522
		c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.223,0,90,19.628,90,43.841z M45.818,6.982
		c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537
		c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938
		c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537
		c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333
		c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882
		c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977
		c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.344
		c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223
		C58.2,65.771,58.2,64.336,60.186,64.156c1.984-0.179,6.406-2.599,7.312-5.107C68.398,56.537,68.398,54.386,68.129,53.938z"/>
</g>
</svg>
                        </a>
                        <a href="<?php the_field('instagram_link', 'option'); ?>" class="header__contacts-item" id="header__instagram">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g  >
        <path d="M20.0001 0C8.95442 0 0.00012207 8.9543 0.00012207 20C0.00012207 31.0457 8.95442 40 20.0001 40C31.0458 40 40.0001 31.0457 40.0001 20C40.0001 8.9543 31.0458 0 20.0001 0ZM20.0001 38.1818C9.95856 38.1818 1.81833 30.0416 1.81833 20C1.81833 9.95844 9.95856 1.8182 20.0001 1.8182C30.0417 1.8182 38.1819 9.95844 38.1819 20C38.1819 30.0416 30.0417 38.1818 20.0001 38.1818Z" />
        <path  class="center-path" d="M25.4547 10.9091H14.5456C12.5373 10.9091 10.9093 12.5371 10.9093 14.5454V25.4544C10.9093 27.4627 12.5373 29.0908 14.5456 29.0908H25.4547C27.463 29.0908 29.091 27.4627 29.091 25.4544V14.5455C29.0911 12.5371 27.4631 10.9091 25.4547 10.9091ZM23.6365 13.6363H26.3638V16.3636H23.6365V13.6363ZM20.0002 16.3637C22.0084 16.3637 23.6365 17.9917 23.6365 20C23.6365 22.0083 22.0084 23.6363 20.0002 23.6363C17.9919 23.6363 16.3638 22.0083 16.3638 20C16.3638 17.9917 17.9919 16.3637 20.0002 16.3637ZM27.2729 25.4545C27.2729 26.4587 26.4588 27.2727 25.4547 27.2727H14.5456C13.5415 27.2727 12.7274 26.4587 12.7274 25.4545V19.0909H14.6365C14.0906 22.0534 16.0495 24.8977 19.0121 25.4437C21.9747 25.9897 24.8189 24.0306 25.3649 21.068C25.4299 20.7159 25.4599 20.3581 25.4547 20C25.4502 19.6949 25.4198 19.3909 25.3638 19.0909H27.2728V25.4545H27.2729Z"/>
        </g>
        <defs>
        <linearGradient id="paint0_linear_4_2278" x1="20.0001" y1="0" x2="20.0001" y2="40" gradientUnits="userSpaceOnUse">
        <stop stop-color="#CDAC83"/>
        <stop offset="1" stop-color="#B6946B"/>
        </linearGradient>
        <linearGradient id="paint1_linear_4_2278" x1="20.0002" y1="10.9091" x2="20.0002" y2="29.0908" gradientUnits="userSpaceOnUse">
        <stop stop-color="#CDAC83"/>
        <stop offset="1" stop-color="#B6946B"/>
        </linearGradient>
        <clipPath id="clip0_4_2278">
        <rect width="40" height="40" fill="white" transform="translate(0.00012207)"/>
        </clipPath>
        </defs>
        </svg>

                        </a>
                    </div>
                </div>
            </div>
        </header>