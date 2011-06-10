<?php 

sleep(1); 
$uiLightboxId = date("U");

?>
<div id="uiLightbox-<?php echo $uiLightboxId; ?>" class="content" style="padding: 10px; font-size: 28px;">
  It works!
  <a href="#" class="uiButton uiButtonNormal uiButtonLarge" style="float: right;" onclick="uiLightbox.toggleLightbox('hide'); return false;">Close</a>
</div>

  <script type="text/javascript">
    // Get a reference to the uiLightbox which ajax loaded this script
    var uiLightbox = $('#uiLightbox-<?php echo $uiLightboxId; ?>').parent().parent().data('uiLightbox');   
  </script>