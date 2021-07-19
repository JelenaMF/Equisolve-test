<div class="card align-center" style="position: absolute; width: 1006px; background: #FFFFFF;">
    <div class=" left" style="position:static width:531px; align-self: stretch;flex-grow: 0;margin: 8px 0px;">
        <h3><?php echo htmlspecialchars($bio['COL 1'])?></h3>
        <h5 style="color: #2541D4; font-size:24px;"><?php echo htmlspecialchars($bio['COL 2'])?></h5>
        <div class="left">
        <div class="black-text left" style="font-size:14px; position:static; width:432px;">
        <p> <?php
        $s= $bio['COL 3'];
        $s= trim(preg_replace('#^<p>|</p>$#i', '', trim($s)));
            echo htmlspecialchars($s)?></p>
        </div>
    </div>
    </div>
    <div>
        <img class="right" style="position:absolute; width:370px; height:420px;"alt="<?php echo htmlspecialchars($bio['COL 3'])?>" Profile picture src="<?php echo htmlspecialchars($bio['COL 4'])?>">

        </div>
    
</div>
