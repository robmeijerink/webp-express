<div id="gmagickbinary" style="display:none;">
    <div class="gmagickbinary converter-options">

      <h3>Gmagick binary options</h3>
      <p>This conversion method works by executing gmagick binary (the 'gm convert' command).</p>

      <div>
          <label for="gmagickbinary_use_nice">
              Use nice
              <?php echo helpIcon(
                  'Enabling this option saves system resources at the cost of slightly slower conversion.'
              ); ?>
          </label>
          <input type="checkbox" id="gmagickbinary_use_nice">
          <br>
      </div>
      <br>

      <?php
      /*
      Removed (#243)
      if (!$canDetectQuality) {
          printAutoQualityOptionForConverter('gmagickbinary');
      }*/
      ?>
      <!--
      <button onclick="updateConverterOptions()" class="button button-primary" type="button">Update</button>
  -->
      <!-- <a href="javascript: tb_remove();">close</a> -->
      <?php webp_express_printUpdateButtons() ?>
    </div>
</div>
