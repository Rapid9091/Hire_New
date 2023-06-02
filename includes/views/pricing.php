<!-- ------------------------------ -->
<!-- Before usign these component please intiliaze $post_name as per the page requirment  -->
<!-- ------------------------------ -->

<!-- post_name -->
<section class="pricing">
  <div class="pricing-header">
    <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">PRICING</p>
    <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">Our Pricing</h3>
  </div>

  <div class="cards">
    <div class="card shadow">
      <ul>
        <li class="pack">Part-Time</li>
        <li id="basic" class="price">&dollar;499</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>4 Hours/Day, Mon-Fri</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i><?= isset($post_name) ? $post_name : "Dedicated Assistant"; ?> </li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>Unlimited Work</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>Entirely Managed</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>Works Anywhere</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>5 Minute Response Time</li>
        <li class="bottom-bar"> <i class="bx bxs-x-circle"></i>Workflows</li>
        <li><a class="btn" href="#banner">Get Started</a></li>
      </ul>
    </div>
    <div class="card active">
      <ul>
        <li class="pack">Full-Time</li>
        <li id="professional" class="price">&dollar;899</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>8 Hours/Day, Mon-Fri</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i><?= isset($post_name) ? $post_name : "Dedicated Assistant"; ?></li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>Unlimited Work</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>Entirely Managed</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>Works Anywhere</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>3 Minute Response Time</li>
        <li class="bottom-bar"> <i class='bx bxs-check-circle'></i>Workflows</li>
        <li><a class="btn active-btn" href="#banner">Get Started</a></li>
      </ul>
    </div>
    <div class="card shadow">
      <ul>
        <li class="pack">Full-Time 2X</li>
        <li id="master" class="price">&dollar;1699</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>8 Hours/Day, Mon-Fri</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>2 <?= isset($post_name) ? $post_name : "Dedicated Assistant"; ?></li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>Unlimited Work</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>Entirely Managed</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>Works Anywhere</li>
        <li class="bottom-bar"> <i class="bx bxs-check-circle"></i>3 Minute Response Time</li>
        <li class="bottom-bar"> <i class='bx bxs-check-circle'></i>Workflows</li>
        <li><a class="btn" href="#banner">Get Started</a></li>
      </ul>
    </div>
  </div>

  </div>
</section>