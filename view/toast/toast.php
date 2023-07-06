<?php

if (isset($_COOKIE["notificacion"])) {
  [$var1,$var2] = explode("-",$_COOKIE["notificacion"])
  ?>
  <div role="alert" aria-live="assertive" aria-atomic="true" class="toast show position-fixed end-0 bottom-0 m-3"
    data-bs-autohide="false">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">ERROR</strong>
      <small> Hace:  <span id="time-value">0</span> <span id="time-text">sec</span></small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body"> <?=$_COOKIE["notificacion"]?>
      </div>
  </div>

<?php
}

?>
<script>
  var segundos = 0;
  const timeValue = document.querySelector("#time-value")
  const timeText = document.querySelector("#time-text")

  setInterval(function(){
    if (segundos < 60) {
      
      timeValue.innerHTML = segundos;
      timeText.innerHTML = "sec"
    }
    else if (segundos < 3600) {
      timeValue.innerHTML = parseInt(segundos / 60)
      timeText.innerHTML = "min"
    }
    else {
      timeValue.innerHTML = parseInt(segundos / 3600)
      timeText.innerHTML = "hrs"
    }

    segundos++;
  },1000)
</script>