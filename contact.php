<?php  include('assets/header.php'); ?>

        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" data--black__overlay="5" style="background: rgba(0, 0, 0, 0) url(assets/images-s/p14.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">CONTACT</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Address -->
        <section class="htc__contact__area bg__white ptb--100">
            <div class="container">
                <div class="row pb--100">
                    <div class="col-md-12">
                        <div class="htc__contact__inner">
                            <h2 class="title__line--5 hid italy3">Info</h2>
                            <p>Reach us using the information here or fill the contact below </p>
                        </div>
                        <div class="htc__address__container">
                            <!-- Start Single Address -->
                            <div class="ct__address">
                                <div class="ct__address__icon">
                                    <i class="zmdi zmdi-pin"></i>
                                </div>
                                <div class="ct__details">
                                    <p>Plot 355, Sir Apollo Kaggwa road <br>Gustro Building, Second Floor. Kampla, Uganda</p>
                                </div>
                            </div>
                            <!-- End Single Address -->
                            <!-- Start Single Address -->
                            <div class="ct__address">
                                <div class="ct__address__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="ct__details">
                                    <p><a href="#">(+256)  780857743</a></p>
                                    <p><a href="#">(+256)  759591018</a></p>
                                </div>
                            </div>
                            <!-- End Single Address -->
                            <!-- Start Single Address -->
                            <div class="ct__address">
                                <div class="ct__address__icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="ct__details">
                                    <p><a href="#">lilliankaddu@praedikonsults.com</a></p>
        
                                </div>
                            </div>
                            <!-- End Single Address -->
                        </div>
                    </div>
                

                <div class="row">
                    <div class="col-md-12" style="margin-top: 20px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.025247669091!2d32.5498695078125!3d0.31943830000000334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbc78ed43139b%3A0xd8670641bf15ba13!2sGustro%20Limited!5e0!3m2!1sen!2sug!4v1676664817492!5m2!1sen!2sug" width="100%" height="300" 
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
              
                <div class="row hid">
                    <div class="col-md-12">
                        <div class="htc__contact__form__wrap">
                            <h2 class="title__line--5 italy3">Send Us a Message</h2>
                            <?php  include('include/inc/messages.php');  ?>
                            <div class="contact-form-wrap">
                                <form id="" action="include/inc/contact.php" method="POST">
                                    <div class="single-contact-inner">
                                        <div class="single-contact-form">
                                            <div class="contact-box name">
                                                <span>Your Name*</span>
                                                <input type="text" name="name">
                                            </div>
                                            <div class="contact-box email">
                                                <span>Your Email*</span>
                                                <input type="email" name="email">
                                            </div>
                                           
                                            <div class="contact-box subject">
                                                <span>Subject*</span>
                                                <input type="text" name="subject">
                                            </div>
                                        </div>
                                        <div class="single-contact-form">
                                        <div class="contact-box email">
                                                <span>Your Phone</span>
                                                <input type="text" name="phone">
                                            </div>
                                            <div class="contact-box message">
                                                <span>Message*</span>
                                                <textarea name="message" type="text"></textarea>
                                            </div>
                                            <div class="contact-btn">
                                                <button type="submit" class="htc__btn btn--theme" name="contact">SEND NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Address -->
        <?php  include('assets/footer.php'); ?>



</html>