<?php include 'core/init.php' ?>
<?php include 'template/header.php' ?>
<?php include 'template/includes/widgets/login_modal.php' ?>

	<!-- Three columns of text below the carousel -->
      <div class="row marketing" style="background:#fff">
        <div class="span2"></div>
        <div class="span8">
          <div id="MyCarousel" class="carousel" style="background:transparent">
          <div class="carousel-inner">
            <center>
            	<div style="height:400px;">
               	<?php specials() ?>
               </div>
             </center>  
          </div>
           <a  style = "margin-top:0.5px" class="carousel-control left" href="#MyCarousel" data-slide="prev">&lsaquo;</a>
           <a  style = "margin-top:0.5px" class="carousel-control right" href="#MyCarousel" data-slide="next">&rsaquo;</a>
        </div>
      </div>
       <div class="span2"></div>
      </div><!-- /.row -->

		
<?php include 'template/footer.php' ?>
