 <!-- -------------------------- -->
 <!-- Google Tag Manager For GTM  -->
 <!-- -------------------------- -->

 <!-- --------------------------------- head links start------------------------- -->

<!-- -------------------------- -->
<!-- Google Fonts -->
<!-- -------------------------- -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

<!-- -------------------------- ------------------>


<!-- aos -->
<!-- aos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- ---------------------------------------------->
<!-- box icon css  -->
<!-- ---------------------------------------------->

<!-- ---------------------------------------------->


<!-- ---------------------------------------------->

<!-- ------------------------------ -->
<!-- owl courosel -->
<!-- ------------------------------ -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" defer />


<!-- fancybox for lightbox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- country code css -->
<!-- <link rel="stylesheet" href="<?=get_assets();?>/build/css/intlTelInput.css"> -->

 <!-- --------------------------------- head links end------------------------- -->

 <!-- jquery
<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



  <!-- Google tag (gtag.js) -->
 <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-R4X9N432VM"></script>-->
<!-- <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-R4X9N432VM');
</script> -->
 <!-- --------------------------- -->

 <!-- -------------------------- -->
 <!-- Header JS of the page  -->
 <!-- -------------------------- -->
 <script src="<?= get_js('header.js') ?>"></script>
 <!-- ---------------- -->
 <!-- -------------------------- -->

 <!-- ---------------- -->

 <!-- ---- modal form ----->
 <script src="<?= get_js('modal-form.js');?>"></script>

 <!-- lordicon
 <script async src="https://cdn.lordicon.com/fudrjiwc.js"></script> -->

<!-- -------------------------- -->
<!-- Icons Links -->
<!-- -------------------------- -->
<script async type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script async nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<!-- aos -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    AOS.init();
</script>

<!-- owl curosel -->
<script async src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- fancybox --> 
<script async src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


 <!-- country code -->
 <link async rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
<script> 
var input = document.querySelector("#input_mobile");
  window.intlTelInput(input, {
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
  });
</script>

<script>
  function loadBoxicons() {
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css';
    document.head.appendChild(link);
  }
  window.addEventListener('load', loadBoxicons);

const imgTags = document.getElementsByTagName("img");

// Loop through each img tag and add the loading attribute
for (let i = 0; i < imgTags.length; i++) {
  imgTags[i].setAttribute("loading", "lazy");
}
</script>

 <!-- Main JS of the page  -->
 <!-- -------------------------- -->
 
 

