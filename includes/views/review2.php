<!-- Reviews Section start here -->
<?php $google_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262" id="google"><path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg>';

$full_google = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 596 194.5" id="google"><path fill="#3780ff" d="M73.4 0h5.3c18.4.4 36.5 7.8 49.5 20.9-4.8 4.9-9.7 9.6-14.4 14.5-7.3-6.6-16.1-11.7-25.7-13.5-14.2-3-29.5-.3-41.4 7.8C33.7 38.2 24.9 52.6 23 68c-2.1 15.2 2.2 31.2 12.1 43 9.5 11.5 24 18.7 39 19.2 14 .8 28.6-3.5 38.8-13.3 8-6.9 11.7-17.4 12.9-27.6-16.6 0-33.2.1-49.8 0V68.7h69.9c3.6 22.1-1.6 47-18.4 62.8-11.2 11.2-26.7 17.8-42.5 19.1-15.3 1.5-31.1-1.4-44.7-8.8C24 133.1 11 118.4 4.6 101.1c-6-15.9-6.1-33.9-.5-49.9C9.2 36.6 19 23.7 31.6 14.7 43.7 5.8 58.4.9 73.4 0z"></path><path fill="#38b137" d="M474.4 5.2h21.4V148c-7.1 0-14.3.1-21.4-.1.1-47.5 0-95.1 0-142.7z"></path><path fill="#fa3913" d="M193.5 54.7c13.2-2.5 27.5.3 38.4 8.2 9.9 7 16.8 18 18.9 30 2.7 13.9-.7 29.1-9.7 40.1-9.7 12.3-25.6 18.9-41.1 17.9-14.2-.8-28-7.9-36.4-19.5-9.5-12.8-11.8-30.4-6.6-45.4 5.2-16.1 19.9-28.4 36.5-31.3m3 19c-5.4 1.4-10.4 4.5-14 8.9-9.7 11.6-9.1 30.5 1.6 41.3 6.1 6.2 15.3 9.1 23.8 7.4 7.9-1.4 14.8-6.7 18.6-13.7 6.6-11.9 4.7-28.3-5.4-37.6-6.5-6-16-8.5-24.6-6.3z"></path><path fill="#fcbd06" d="M299.5 54.7c15.1-2.9 31.6 1.3 42.9 11.9 18.4 16.5 20.4 47.4 4.7 66.4-9.5 12-24.9 18.6-40.1 17.9-14.5-.4-28.8-7.6-37.4-19.5-9.7-13.1-11.8-31.1-6.3-46.4 5.5-15.6 19.9-27.5 36.2-30.3m3 19c-5.4 1.4-10.4 4.5-14 8.8-9.6 11.4-9.2 30 1.1 40.9 6.1 6.5 15.6 9.7 24.4 7.9 7.8-1.5 14.8-6.7 18.6-13.7 6.5-12 4.6-28.4-5.6-37.7-6.5-6-16-8.4-24.5-6.2z"></path><path fill="#3780ff" d="M389.4 60.5c11.5-7.2 26.8-9.2 39.2-3 3.9 1.7 7.1 4.6 10.2 7.5.1-2.7 0-5.5.1-8.3 6.7.1 13.4 0 20.2.1V145c-.1 13.3-3.5 27.4-13.1 37.1-10.5 10.7-26.6 14-41.1 11.8-15.5-2.3-29-13.6-35-27.9 6-2.9 12.3-5.2 18.5-7.9 3.5 8.2 10.6 15.2 19.5 16.8 8.9 1.6 19.2-.6 25-8 6.2-7.6 6.2-18 5.9-27.3-4.6 4.5-9.9 8.5-16.3 10-13.9 3.9-29.2-.9-39.9-10.3-10.8-9.4-17.2-23.9-16.6-38.3.3-16.3 9.5-32 23.4-40.5m20.7 12.8c-6.1 1-11.8 4.4-15.7 9.1-9.4 11.2-9.4 29.1.1 40.1 5.4 6.5 14.1 10.1 22.5 9.2 7.9-.8 15.2-5.8 19.1-12.7 6.6-11.7 5.5-27.6-3.4-37.8-5.5-6.3-14.3-9.4-22.6-7.9z"></path><path fill="#fa3913" d="M521.5 65.6c12-11.2 30.5-15 45.9-9.1C582 62 591.3 75.9 596 90.2c-21.7 9-43.3 17.9-65 26.9 3 5.7 7.6 10.9 13.8 13 8.7 3.1 19.1 2 26.4-3.8 2.9-2.2 5.2-5.1 7.4-7.9 5.5 3.7 11 7.3 16.5 11-7.8 11.7-20.9 19.9-35 21.2-15.6 1.9-32.2-4.1-42.3-16.3-16.6-19.2-15-51.4 3.7-68.7m10.7 18.5c-3.4 4.9-4.8 10.9-4.7 16.8 14.5-6 29-12 43.5-18.1-2.4-5.6-8.2-9-14.1-9.9-9.5-1.7-19.4 3.4-24.7 11.2z"></path></svg>';

?>;
<section class="reviews_section">
    <div class="flex review_row">
        <div class="google">
            <div class="google_logo">
            <?=$full_google?>
            </div>
            <div class="rating">
                <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                        class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
            </div>
            <div class="text-center">
                <p><b>Excellent</b></p>
                <p>based on <b>2115 reviews</b></p>
            </div>
        </div>
        <div class="reviews">
            <div class=" owl-carousel owl-theme" id="google_reviews">
                <div class="review-item item">
                    <div class="flex" style="justify-content: space-between;">
                        <div class="user_info flex">
                            <div class="user_img">
                                <img src="<?=get_img()?>reviews/amelia.jpg" alt="user" loading="lazy">
                            </div>
                            <div class="user_name">
                                <p>Amelia</p>
                                <span>20 feb 2022</span>
                            </div>
                        </div>
                        <div class="g-logo">
                        <?=$google_icon?>
                        </div>
                    </div>
                    <div class="review_stars">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <div class="review_content">
                        <div class="reiview_content_box">
                            <p>I recently worked with Hire Coworker, and their service was outstanding. The team was
                                professional, efficient, and always willing to do extra work to ensure my needs were
                                met. Highly recommend them and their Virtual Assistant.</p>
                        </div>
                    </div>
                </div>
                <div class="review-item item">
                    <div class="flex" style="justify-content: space-between;">
                        <div class="user_info flex">
                            <div class="user_img">
                                <img src="<?=get_img()?>reviews/benjamin.jpg" alt="user" loading="lazy">
                            </div>
                            <div class="user_name">
                                <p>Benjamin</p>
                                <span>5 Dec 2021</span>
                            </div>
                        </div>
                        <div class="g-logo">
                        <?=$google_icon?>
                        </div>
                    </div>
                    <div class="review_stars">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i><i class='bx bxs-star-half'></i></p>
                    </div>
                    <div class="review_content">
                        <div class="reiview_content_box">
                            <p>Hire Coworker helped me find the best developer for my project. Their virtual assistant
                                was professional and efficient. Actually, I was very satisfied with the outcome. They
                                have top-quality developers.</p>
                        </div>
                    </div>
                </div>
                <div class="review-item item">
                    <div class="flex" style="justify-content: space-between;">
                        <div class="user_info flex">
                            <div class="user_img">
                                <img src="<?=get_img()?>reviews/james.jpg" alt="user" loading="lazy">
                            </div>
                            <div class="user_name">
                                <p>James</p>
                                <span>1 Jan 2022</span>
                            </div>
                        </div>
                        <div class="g-logo">
                        <?=$google_icon?>
                        </div>
                    </div>
                    <div class="review_stars">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i><i class='bx bxs-star-half'></i></p>
                    </div>
                    <div class="review_content">
                        <div class="reiview_content_box">
                            <p>I recently worked with Hire Coworker to find a financial expert for my business, and I am
                                extremely satisfied with my virtual assistant. The team was professional, knowledgeable,
                                and helped me find the best fit for my company. Excellent service and the best virtual
                                assistant provider...</p>
                        </div>
                    </div>
                </div>
                <div class="review-item item">
                    <div class="flex" style="justify-content: space-between;">
                        <div class="user_info flex">
                            <div class="user_img">
                                <img src="<?=get_img()?>reviews/emma.jpg" alt="user" loading="lazy">
                            </div>
                            <div class="user_name">
                                <p>Emma</p>
                                <span>15 March 2022</span>
                            </div>
                        </div>
                        <div class="g-logo">
                        <?=$google_icon?>
                        </div>
                    </div>
                    <div class="review_stars">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i></p>
                    </div>
                    <div class="review_content">
                        <div class="reiview_content_box">
                            <p>Hire an e-commerce store developer and Tony Capo both use these guys for virtual
                                assistant and I can honestly say we are pleased with the results. No complaints; highly
                                recommended; and confidently recommended. Friendly Behavior and great customer service.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="review-item item">
                    <div class="flex" style="justify-content: space-between;">
                        <div class="user_info flex">
                            <div class="user_img">
                                <img src="<?=get_img()?>reviews/henry.jpg" alt="user" loading="lazy">
                            </div>
                            <div class="user_name">
                                <p>Henry</p>
                                <span>2 June 2022</span>
                            </div>
                        </div>
                        <div class="g-logo">
                        <?=$google_icon?>
                        </div>
                    </div>
                    <div class="review_stars">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <div class="review_content">
                        <div class="reiview_content_box">
                            <p>I found Neil at Hire Coworker to be extremely knowledgeable, professional, and thorough
                                in his follow-up. No matter what time is on watch..
                                Their virtual assistant service is extremely valuable. Neil is so intelligent, reliable,
                                and on time.
                                I have renewed my contracts more than once to use Hire Coworker's services in the
                                future.</p>
                        </div>
                    </div>
                </div>

                <div class="review-item item">
                    <div class="flex" style="justify-content: space-between;">
                        <div class="user_info flex">
                            <div class="user_img">
                                <img src="<?=get_img()?>reviews/lucas.jpg" alt="user" loading="lazy">
                            </div>
                            <div class="user_name">
                                <p>Lucas</p>
                                <span>28 Oct 2022</span>
                            </div>
                        </div>
                        <div class="g-logo">
                        <?=$google_icon?>
                        </div>
                    </div>
                    <div class="review_stars">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i><i class='bx bxs-star-half'></i></p>
                    </div>
                    <div class="review_content">
                        <div class="reiview_content_box">
                            <p>Hire Coworker has been great at helping me design and launch my websites and graphic
                                design projects. Hire Coworker's virtual assistant has saved me money, energy and lots
                                of time. My business is running smoothly and he is now my friend. Everyone needs a
                                virtual assistant from Hire Coworker.</p>
                        </div>
                    </div>
                </div>
                <div class="review-item item">
                    <div class="flex" style="justify-content: space-between;">
                        <div class="user_info flex">
                            <div class="user_img">
                                <img src="<?=get_img()?>reviews/noah.jpg" alt="user" loading="lazy">
                            </div>
                            <div class="user_name">
                                <p>Noah</p>
                                <span>15 feb 2023</span>
                            </div>
                        </div>
                        <div class="g-logo">
                        <?=$google_icon?>
                        </div>
                    </div>
                    <div class="review_stars">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i></p>
                    </div>
                    <div class="review_content">
                        <div class="reiview_content_box">
                            <p> have been using Hire Coworker for 1 year now, and I love it. when I've ever called in
                                for their virtual assistant. It has been taken care of immediately. Their virtual
                                assistant always takes care of the problem.</p>
                        </div>
                    </div>
                </div>

                <div class="review-item item">
                    <div class="flex" style="justify-content: space-between;">
                        <div class="user_info flex">
                            <div class="user_img">
                                <img src="<?=get_img()?>reviews/olivia.jpg" alt="user" loading="lazy">
                            </div>
                            <div class="user_name">
                                <p>Olivia</p>
                                <span>2 feb 2023</span>
                            </div>
                        </div>
                        <div class="g-logo">
                        <?=$google_icon?>
                        </div>
                    </div>
                    <div class="review_stars">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i><i class='bx bxs-star-half'></i></p>
                    </div>
                    <div class="review_content">
                        <div class="reiview_content_box">
                            <p>Hire Coworker team is amazing and they offer fantastic service at a very good price. My
                                virtual assistant name is Saif, completes tasks to a high standard and always has great
                                ideas and suggestions for online marketing and social media. I highly recommend Hire
                                Coworker to any business owner who wants to start delegating tasks to help move their
                                business forward.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<!-- Reviews Section end here -->