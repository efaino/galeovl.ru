<?php 
/**
 * Main Header File
 *
 * @package Virtue Theme
 */

//if ( '1' == virtue_premium_get_option( 'primary_sticky' ) && ( 'logocenter' == virtue_premium_get_option( 'logo_layout' ) || 'logowidget' == virtue_premium_get_option( 'logo_layout' ) ) ) {
//	$menu_stick       = 1;
//	$menu_stick_class = 'kt-mainnavsticky';
//} else {
//	$menu_stick       = 0;
//	$menu_stick_class = '';
//}

?>
<header class="main_header">
    <div class="container">
        <div class="header-wrapper">
            <div class="header">
                <div class="header_logo">
                    <a class="img_logo" href="/" title="Galeo">
                        <div class="thelogo">
                            <img src="/wp-content/uploads/logo.svg">
                        </div>
                    </a>
                </div>
                <div class="adress">
                    <img src="/wp-content/uploads/ico-adress.svg" alt="">
                    <span>
                        690069, г. Владивосток, ул. Русская, 39 б
                    </span>
                </div>
                <div class="work-time">
                    <img src="/wp-content/uploads/ico-worktime.svg" alt="">
                    <span>
                        Ежедневно с 09:00 до 20:00
                    </span>
                </div>
                <div class="phone-number">
                    <img src="/wp-content/uploads/ico-number.svg" alt="">
                    <span>
                        +7 (423) 232-40-40
                    </span>
                </div>
                <div class="social">
                    <a class="vk" href="https://vk.com/clubgaleo">
                        <img src="/wp-content/uploads/vk.svg" alt="">
                    </a>
                    <a class="whatsapp" href="https://wa.me/79242433000">
                        <img src="/wp-content/uploads/whatsapp.svg" alt="">
                    </a>
                    <a class="telegram" href="https://t.me/club_galeo">
                        <img src="/wp-content/uploads/telegram.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="sticky-head-wrapper">
                <div class="container sticky-head">
                    <div class="header-sticky">
                    <div class="header_menu">
                        <div class="menu-bar">
                                <nav id="nav-main" class="clearfix">
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'primary_navigation',
                                    ) );
                                    ?>
                                </nav>
                        </div>
                    </div>
                    <div class="btn_feedback">
                        <a href="#zapis" class="zapisat">Записаться</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="--><?php //echo esc_attr( $logocclass ); ?><!-- clearfix kad-header-left">-->
<!--				<div id="logo" class="logocase">-->
<!--					<a class="brand logofont" href="/" title="Galeo">-->
<!--						<div id="thelogo">-->
<!--							<img src="https://galeovl.ru/wp-content/uploads/logo.png" alt="" class="kad-standard-logo">-->
<!--						</div>-->
<!--					</a>-->
<!--				</div>-->
<!--			</div><!-- close kad-header-left -->
<!--			--><?php //if ( 'logowidget' === virtue_premium_get_option( 'logo_layout' ) ) { ?>
<!--				<div class="col-md-8 kad-header-widget">-->
<!--					--><?php
//					if ( is_active_sidebar( 'headerwidget' ) ) {
//						dynamic_sidebar( 'headerwidget' );
//					}
//					?>
<!--				</div><!--close kad-header-widget-->
<!--			</div><!--Close Row -->
<!--			<div class="row">-->
<!--			--><?php //} ?>
<!--			<div class="--><?php //echo esc_attr( $menulclass ); ?><!-- kad-header-right">-->
<!--			--><?php
//			do_action( 'kt_before_right_header_content' );
//			if ( has_nav_menu( 'primary_navigation' ) ) {
//				do_action( 'virtue_above_primarymenu' );
//				?>
<!--				<nav id="nav-main" class="clearfix">-->
<!--					--><?php
//					wp_nav_menu( array(
//						'theme_location' => 'primary_navigation',
//						'menu_class'     => 'sf-menu',
//					) );
//					?>
<!--				</nav>-->
<!--				--><?php
//			}
//			do_action( 'kt_after_right_header_content' );
//			?>
<!--				<a href="#zapis" class="zapisat">Записаться</a>-->
<!--			</div><!--Close kad-header-right -->
<!--		</div><!--Close Row -->
<!--		--><?php
//		if ( has_nav_menu( 'mobile_navigation' ) ) {
//			if ( '1' == virtue_premium_get_option( 'mobile_header' ) && '1' == virtue_premium_get_option( 'mobile_header_tablet_show' ) ) {
//				echo 'mobileheader';
//			} else {
//				?>
<!--				<div id="mobile-nav-trigger" class="nav-trigger mobile-nav-trigger-id">-->
<!--					<button class="nav-trigger-case collapsed mobileclass" title="--><?php //echo esc_html__( 'Menu', 'virtue' ); ?><!--" aria-label="--><?php //echo esc_html__( 'Menu', 'virtue' ); ?><!--" data-toggle="collapse" rel="nofollow" data-target=".mobile_menu_collapse">-->
<!--						<span class="kad-navbtn clearfix">-->
<!--							<i class="icon-menu"></i>-->
<!--						</span>-->
<!--						<span class="kad-menu-name">-->
<!--							--><?php //echo esc_html( virtue_premium_get_option( 'mobile_menu_text', __( 'Menu', 'virtue' ) ) ); ?>
<!--						</span>-->
<!--					</button>-->
<!--				</div>-->
<!--				<div id="kad-mobile-nav" class="kad-mobile-nav id-kad-mobile-nav">-->
<!--					<div class="kad-nav-inner mobileclass">-->
<!--						<div id="mobile_menu_collapse" class="kad-nav-collapse collapse mobile_menu_collapse">-->
<!--							--><?php
//							do_action( 'kt_mobile_menu_before' );
//							if ( '1' == virtue_premium_get_option( 'menu_search' ) ) {
//								if ( class_exists( 'woocommerce' ) && '1' == virtue_premium_get_option( 'menu_search_woo' ) ) {
//									get_product_search_form();
//								} else {
//									get_search_form();
//								}
//							}
//							if ( '1' == virtue_premium_get_option( 'mobile_submenu_collapse' ) ) {
//								wp_nav_menu(
//									array(
//										'theme_location' => 'mobile_navigation',
//										'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
//										'menu_class'     => 'kad-mnav',
//										'walker'         => new Virtue_Mobile_Nav_Walker(),
//									)
//								);
//							} else {
//								wp_nav_menu(
//									array(
//										'theme_location' => 'mobile_navigation',
//										'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
//										'menu_class'     => 'kad-mnav',
//									)
//								);
//							}
//							do_action( 'kt_mobile_menu_after' );
//							?>
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--				--><?php
//			}
//		}
//		?>
<!--	</div><!--Close Container -->
<!--	--><?php
//	do_action( 'kt_before_secondary_navigation' );
//	if ( has_nav_menu( 'secondary_navigation' ) ) {
//		?>
<!--		<div id="cat_nav" class="navclass">-->
<!--			<div class="container">-->
<!--				<nav id="nav-second" class="clearfix">-->
<!--					--><?php
//					wp_nav_menu(
//						array(
//							'theme_location' => 'secondary_navigation',
//							'menu_class'     => 'sf-menu',
//						)
//					);
//					?>
<!--				</nav>-->
<!--			</div><!--close container-->
<!--		</div><!--close navclass-->
<!--		--><?php
//	}
//	$banner_img = virtue_premium_get_option( 'virtue_banner_upload' );
//	if ( isset( $banner_img['url'] ) && ! empty( $banner_img['url'] ) ) {
//		?>
<!--		<div class="container virtue_sitewide_banner">-->
<!--			<div class="virtue_banner">-->
<!--				--><?php
//				$banner_link = virtue_premium_get_option( 'virtue_banner_link' );
//				if ( ! empty( $banner_link ) ) {
//					?>
<!--					<a href="--><?php //echo esc_url( virtue_premium_get_option( 'virtue_banner_link' ) ); ?><!--">-->
<!--					--><?php
//				}
//					$alt_text = get_post_meta( $banner_img['id'], '_wp_attachment_image_alt', true );
//						?>
<!--					<img src="--><?php //echo esc_url( $banner_img['url'] ); ?><!--" width="--><?php //echo esc_attr( $banner_img['width'] ); ?><!--" height="--><?php //echo esc_attr( $banner_img['height'] ); ?><!--" alt="--><?php //echo esc_attr( $alt_text ); ?><!--" />-->
<!--				--><?php
//				if ( ! empty( $banner_link ) ) {
//					?>
<!--					</a>-->
<!--					--><?php
//				}
//				?>
<!--			</div><!--close virtue_banner-->
<!--		</div><!--close container-->
<!--		--><?php
//	}
//	// Deprecated.
//	do_action( 'kt_after_header_content' );
//
//	do_action( 'virtue_after_header_content' );
//	?>
</header>
