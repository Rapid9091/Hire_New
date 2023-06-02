<!------------ modal start ------------------>

<div class="model pop-backgroud" id="pop-up-login">

    <!-- model content -->
    <div class="model-content profile-details-section" id="form">

        <div class="flex">
            <span class="close" id="cross"><i class='bx bx-x'></i></span>
            <div class="form-box">
                <p class="form-heading">Contact us to build the <br><strong>right product</strong> with the
                    <strong>right Expert</strong>
                </p>
                <form class="modal_contact_form" method="post" action="">
                    <div class="input-control">
                        <input type="text" id="modal_input_name" placeholder="Name">
                        <small class="modal_input_error" id="modal_input_name_error"></small>
                    </div>
                    <div class="input-control" style="position:relative;">
                       <input type="tel" placeholder="Mobile" name="input_mobile" id="modal_input_mobile" class="country_input" minlength="10" maxlength="15">
                        <small class="modal_input_error" id="modal_input_mobile_error"></small>
                    </div>
                    <div class="input-control">
                        <input type="email" id="modal_input_email" placeholder="Email">
                        <small class="modal_input_error" id="modal_input_email_error"></small>
                    </div>
                    <div class="input-control send-input">
                        <textarea name="" id="modal_input_query" placeholder="Message"></textarea>
                        <small class="modal_input_error" id="modal_input_query_error"></small>
                    </div>
                    <div class="input-control checkbox-input">
                        <input  required type="checkbox" class="checkbox" id="checkbox"><label for="checkbox" class="checkbox-label">I want to protect my data by signing an NDA</label>
                    </div>
                    <div class="input-control">
                        <button type="submit" class="send-btn" id="modal_form_button">Send Request</button>
                    </div>

                </form>
            </div>
            <div class="model-dtl-box">
                <div class="model-dtl-heading model-dtl-item">
                    <p>Reach out COWORKER to recieve a free consultant and entrust your IT initiative to a
                        company of software experts</p>
                </div>
                <div class="model-dtl-item">
                    <ul>
                        <li><span>Contact Us</span></li>
                        <li><i class='bx bx-mobile-alt'></i><a href="tel:+1 (848) 200-0555">+1 (848) 200-0555</a></li>
                        <li><i class='bx bx-envelope'></i>
                            <a href="mailto:info@hirecoworker.com">info@hirecoworker.com</a>
                        </li>
                        <li><i class='bx bx-map-pin'></i>906 S Silverton Texas USA-79257</li>

                    </ul>
                </div>
                <div class="modal-other-dtl-box">
                    <p>Follow Us at:</p>
                    <div class="social-icons flex-center">
                        <address class="">
                            <a href="https://www.facebook.com/profile.php?id=100088041885059&amp;mibextid=ZbWKwL" target="_blank"> <img src="<?= get_img() ?>facebook-icon.png" alt="HireCoworker " loading="lazy">
                            </a>
                            <a href="https://www.linkedin.com/company/hire-co-worker/" target="_blank"> <img src="<?= get_img() ?>linkedin-icon.png" alt="HireCoworker "> </a>
                            <a href="https://www.instagram.com/hirecoworker/" target="_blank"> <img src="<?= get_img() ?>instagram-icon.png" alt="HireCoworker instagram"> </a>
                            <a href="https://twitter.com/hirecoworker" target="_blank"> <img src="<?= get_img() ?>twitter-icon.png" alt="HireCoworker twitter"> </a>
                        </address>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
<!---------------- modal end --------------------->