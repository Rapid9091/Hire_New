<?php

include_once COMPONENT . "modal_form.php";
include_once COMPONENT . "footer.php";
include_once COMPONENT . "script.php";

?>

<!-- -------------------------- -->
<!-- Script to explode the URL -->
<!-- -------------------------- -->
<script>
    setTimeout(() => {
        window.history.pushState("", "Page Title", window.location.href.split("?")[0]);
    }, 8000);
</script>

