<?php 
require_once '../../admin/DAOAdmin.php';
$dao= new DAOAdmin();
$portfolio=$dao->selectPortfolio();?>

<div class="gallery-image">
<?php foreach($portfolio as $p){?>
        <div class="img-box">

        <?php echo "<img src='../adminPortfolio/". $p['image']. "''> ";?>
          <div class="transparent-box">
            <div class="caption">
              <?php echo $p['caption'];?></p>
              <p class="opacity-low"><?php echo $p['caption_opacity'];?></p>

            </div>

          </div> 
          
        </div>
        <?php }?>
