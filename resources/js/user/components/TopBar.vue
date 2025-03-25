<template>
            <section id="top">
            <div class="container">
                <div class="row">
                    <div class="top_1 clearfix">
                        <div class="col-sm-3">
                            <div class="top_1l clearfix">
                                <ul class="mgt">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-lock"></i
                                        ></a>
                                        <a href="#"
                                            ><i class="fa fa-user"></i
                                        ></a>
                                        <a href="#"
                                            ><i class="fa fa-facebook"></i
                                        ></a>
                                        <a href="#"
                                            ><i class="fa fa-twitter"></i
                                        ></a>
                                        <a href="#"
                                            ><i class="fa fa-linkedin"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="top_1r clearfix">
                                <ul
                                    class="nav navbar-nav nav_1 mgt navbar-right"
                                >
                                    <li class="bord_l">
                                        <a class="font_tag col_1" href="#"
                                            ><i class="fa fa-phone"></i> 123 456
                                            789</a
                                        >
                                    </li>

                                    <li class="dropdown bord_l">
                                        <a
                                            class="font_tag border_none"
                                            href="#"
                                            data-toggle="dropdown"
                                            role="button"
                                            aria-expanded="false"
                                            >Setting<span class="caret"></span
                                        ></a>
                                        <ul
                                            class="dropdown-menu drop_1"
                                            role="menu"
                                        >
                                            <li><a href="#">Checkout</a></li>
                                            <li><a href="#">My Account</a></li>
                                            <li>
                                                <a href="#">Shopping Cart</a>
                                            </li>
                                            <li><a href="#">Wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown bord_l">
                                        <a
                                            class="font_tag border_none"
                                            href="#"
                                            data-toggle="dropdown"
                                            role="button"
                                            aria-expanded="false"
                                            >$ USD<span class="caret"></span
                                        ></a>
                                        <ul
                                            class="dropdown-menu drop_1"
                                            role="menu"
                                        >
                                            <li><a href="#">EUR – Euro</a></li>
                                            <li>
                                                <a href="#"
                                                    >GBP – British Pound</a
                                                >
                                            </li>
                                            <li>
                                                <a href="#"
                                                    >INR – India Rupee</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown bord_l border_none">
                                        <a
                                            class="font_tag border_none"
                                            href="#"
                                            data-toggle="dropdown"
                                            role="button"
                                            aria-expanded="false"
                                            >English<span class="caret"></span
                                        ></a>
                                        <ul
                                            class="dropdown-menu drop_1"
                                            role="menu"
                                        >
                                            <li>
                                                <a href="#"
                                                    ><i class="fa fa-flag"></i>
                                                    English</a
                                                >
                                            </li>
                                            <li>
                                                <a href="#"
                                                    ><i class="fa fa-flag"></i>
                                                    Germany</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</template>

<script>
    export default {
        name : 'top-bar'
    }
</script>
