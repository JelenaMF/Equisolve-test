<?php 

foreach($bios as $bio){?>

    <div id="bio-card">
        <div id="bio-info" class="card-content">
            <p id="close" class="button right" style="font-size:24px; font-weight:900; padding-right: 15px;">X</p>
            <div class=" left" style="position:static width:531px; align-self: stretch;flex-grow: 0; margin: 8px 0px;">
                    <h3 id="bio-name"><?php echo htmlspecialchars($bio['COL 1'])?></h3>
                    <h5 id="bio-title" ><?php echo htmlspecialchars($bio['COL 2'])?></h5>
                    <div class="left">
                        <div class="black-text" style="font-size:14px; position:static; width:432px; height:720px; padding-left: 10px;">
                            <p id="bio"> <?php
                            #remove the p tags that were in the bio data.
                            $s= $bio['COL 3'];
                            $s= trim(preg_replace('#^<p>|</p>$#i', '', trim($s)));
                                echo htmlspecialchars($s)?> </p>
                        </div>
                    </div>
                </div>
                <div>
                    <img id="bio-img" style="position:absolute;" alt="<?php echo htmlspecialchars($bio['COL 3'])?>" Profile picture src="<?php echo htmlspecialchars($bio['COL 4'])?>">
                </div>
                
        </div>
    </div>
        

 <?php } ?>

