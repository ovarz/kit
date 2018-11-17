<section id="partner" class="partner container">
  <div class="container-title content_center">
	<span>
	  <h2>Some Of Our Partners</h2>
	  <div class="line content_center"><span></span></div>
	</span>
  </div>
  <div class="partner-list">
    <ul>
      <?php for ($i=1; $i <= 20 ; $i++) { ?>
      <li class="content_center">
        <span class="flex_ori">
          <img data-original="img/partner/<?php echo rand(1,20); ?>.png" />
        </span>
      </li>
      <?php } ?>
    </ul>
  </div>
</section>