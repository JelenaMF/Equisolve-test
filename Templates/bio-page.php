<?php 

foreach($bios as $bio){?>
    <div class="card" style="position: absolute; width: 1006px; height:1092px; top: -572px; left:25%; background: #FFFFFF; ">
        <div class="card-content" style=" padding:30px;">
            <p class="button right" style="font-size:14px; font-weight:600;">X</p>
                <div class=" left" style="position:static width:531px; align-self: stretch;flex-grow: 0; margin: 8px 0px;">
                    <h3><?php echo htmlspecialchars($bio['COL 1'])?></h3>
                    <h5 style="color: #2541D4; font-size:24px;"><?php echo htmlspecialchars($bio['COL 2'])?></h5>
                    <div class="left">
                        <div class="black-text" style="font-size:14px; position:static; width:432px; padding-left: 10px;">
                            <p> <?php
                            #remove the p tags that were in the bio data.
                            $s= $bio['COL 3'];
                            $s= trim(preg_replace('#^<p>|</p>$#i', '', trim($s)));
                                echo htmlspecialchars($s)?> </p>
                        </div>
                    </div>
                </div>
                <div>
                    <img style="position:absolute; top:455px; width:370px; left:55%; height:420px;"alt="<?php echo htmlspecialchars($bio['COL 3'])?>" Profile picture src="<?php echo htmlspecialchars($bio['COL 4'])?>">
                </div>
                
        </div>
    </div>
        

 <?php } ?>

