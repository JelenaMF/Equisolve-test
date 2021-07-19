<div class="row align-center container" >
<h2 class="left-align" style="font-size: 36px; ">Executive Leadership</h2>
<?php foreach($bios as $bio){ ?>
    <div  class="col s12"style="position:static; display:flex; flex-direction:column;  width:370px; height:616px;">
        <div>
            <div class="card">
                <div class="card-image">
                    <img alt=" <?php echo htmlspecialchars($bio['COL 1'])?> profile image"src="<?php echo htmlspecialchars($bio['COL 4'])?>"> 
                </div>
                <div class="card-content">
                    <h3 class="card-title"><?php echo htmlspecialchars($bio['COL 1'])?></h3>
                    <h6 class=" indigo-text darken-4" style="font-size:14px; line-height:22.4px;"><?php echo htmlspecialchars($bio['COL 2'])?> </h6>
                        <a class='black-text' href="#">View Bio <img src="images/vector.png"> </a>
                    
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

</div>
     