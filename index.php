<?php $page='home'; $subpage='home'; require ('inc/top.php'); ?>
<?php require ('inc/header.php'); ?>
<script src="js/fancyscroll/jquery.localscroll.js" type="text/javascript"></script> 
<script src="js/fancyscroll/jquery.scrollTo.js" type="text/javascript"></script> 
<script type="text/javascript">
$(document).ready(function() {
  $('.scroll-section').localScroll({offset:{top:-60},duration:500});
});
</script>

<div id="rancak-framework">
  <?php require ('page/cover.php'); ?>
  <?php require ('page/about.php'); ?>
</div>

<?php require ('inc/footer.php'); ?>