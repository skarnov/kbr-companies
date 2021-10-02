<section id="teaser" class="fluid clearfix" >
    <div class="container">
        <div id="teaser-content" class="sixteen columns">
            <h1 id="page-title">
                <span>Contact Us</span>
            </h1>
        </div>
    </div>	
</section>
<div class="clear"></div>
<div id="content-wrap" class="fluid clearfix" data-content="content">
    <div class="container">
        <div id="content" class="eleven columns">
            <section class="single page type-page status-publish hentry">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('message');
                    if (isset($msg)) {
                        echo "<p style='margin-left:2%;'>$msg</p>";
                        $this->session->unset_userdata('message');
                    }
                    ?>
                </h3>
                <article class="entry-content">
                    <p>If you have any queries or feedback, please complete the form below. We look forward to hearing from you.</p>
                    <script type="text/javascript">
                        var RecaptchaOptions = {
                            theme: 'clean',
                            lang: 'en'
                        };
                    </script>
                    <form action="<?php echo base_url(); ?>home/contact" id="contactForm" method="post" class="validateform">
                        <p>
                            <label for="Name">Name:</label>
                            <input type="text" name="name" id="Name" class="reginput input_full">
                        </p>
                        <p>
                            <label for="PhoneNumber">Phone Number:</label>
                            <input type="text" name="phone" id="PhoneNumber" class="reginput input_full">
                        </p>
                        <p>
                            <label for="Email">Email:</label>
                            <input type="text" name="email" id="Email" class="reginput input_full">
                        </p>
                        <p>
                            <label for="Subject">Subject:</label>
                            <input type="text" name="subject" id="Subject" class="reginput input_full">
                        </p>
                        <label for="Message">Message:</label>
                        <textarea class="input_full" name="message" id="Message" ></textarea>
                        <div class="valmsg"></div>
                        <script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LeTH84SAAAAAMfqJ5VRN5RU-NU70diwUBBcXjQR"></script>
                        <noscript>
                        <iframe src="https://www.google.com/recaptcha/api/noscript?k=6LeTH84SAAAAAMfqJ5VRN5RU-NU70diwUBBcXjQR " height="300" width="500" frameborder="0"></iframe><br/>
                        <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
                        <input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
                        </noscript>
                        <p><input type="submit" value="Submit" ></p>
                        <input type="hidden" name="submitted" id="submitted" value="true" />
                    </form>
                </article>
            </section>
        </div>
        <aside id="sidebar" class="five columns" role="complementary">
            <ul>
                <?php foreach ($all_contact_page_address as $v_address) { ?>
                    <li id="lw_contact-3" class="widget-1 widget-first widget-odd widget-container lambda_widget_contact">
                        <h3 class="widget-title"><span><?php echo $v_address->name; ?></span></h3>
                        <ul>
                            <li class="clearfix">
                                <div class="left">
                                    <span class="lambda-address"></span>
                                </div>
                                <div class="description"><?php echo $v_address->name; ?></div>
                            </li>
                            <li class="clearfix">
                                <div class="left">
                                    <span class="lambda-phone"></span>
                                </div>
                                <div class="description"><?php echo $v_address->phone; ?></div>
                            </li>
                            <li class="clearfix">
                                <div class="left">
                                    <span class="lambda-fax"></span>
                                </div>
                                <div class="description"><?php echo $v_address->fax; ?></div>
                            </li>
                            <li class="clearfix">
                                <div class="left">
                                    <span class="lambda-email"></span>
                                </div>
                                <div class="description"><?php echo $v_address->email; ?></div>
                            </li>
                            <li class="clearfix">
                                <div class="left">
                                    <span class="lambda-internet"></span>
                                </div>
                                <div class="description"><?php echo $v_address->website; ?></div>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </aside>
    </div>
    <div class="clear"></div>
</div>