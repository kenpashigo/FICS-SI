<div id="baixar">
  <div id="go">
    <span>
    <?php
    if(empty($download)){
      echo '<a href="'.$arquivo.'" target="_blank">Donwload</a>';
    }else{
      echo '<a href="http://'.$download.'" target="_blank">Donwload</a>';
    }
    ?>
    </span>
  </div>

  <div id="download">
    <?php if(empty($download)){
      echo '<a href="'.$arquivo.'" target="_blank"><img src="./imgsource/download.PNG" alt="Download" /></a>';
    } else {
      echo '<a href="http://'.$download.'" target="_blank"><img src="./imgsource/download.PNG" alt="Download" /></a>';
    }
      ?>
  </div>
</div>
      