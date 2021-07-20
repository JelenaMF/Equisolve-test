<div class="row align-center container" >
<h2 class="left-align" style="font-size: 36px; ">Executive Leadership</h2>

<?php #iterate data and interpolate it to the dom
foreach($bios as $bio){ ?>
    <div  class="col s12"style="position:static; display:flex; flex-direction:column;  width:370px; height:616px;">
        <div>
            <div class="card">
                <div class="card-image">
                    <img style="position: static; width:370px height:420px"  alt=" <?php echo htmlspecialchars($bio['COL 1'])?> profile image"src="<?php echo htmlspecialchars($bio['COL 4'])?>"> 
                </div>
                <div class="card-content">
                    <h3 class="card-title"><?php echo htmlspecialchars($bio['COL 1'])?></h3>
                    <h6 style="color:#2541D4; font-size:14px; line-height:22.4px;"><?php echo htmlspecialchars($bio['COL 2'])?> </h6>
                        <p class="button" onClick="<?php displayBioPage() ?>;" id="bio-link" class='black-text'>View Bio <img src="images/vector.png"></p>
                   
                </div>
            </div>
        </div>
    </div>
    <?php } #end of?>

</div>
<?php 
    function displayBioPage() {
        echo include('templates/bio-page.php');
    }
 ?>

    
    