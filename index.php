<?php
// Include I18N support
require_once "locale.php";
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="stylesheets/default.css" type="text/css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="javascripts/html2canvas.js" type="text/javascript"></script>
        <script src="javascripts/blob.js" type="text/javascript"></script>
        <script src="javascripts/canvas-toBlob.js" type="text/javascript"></script>
        <script src="javascripts/filesaver.js" type="text/javascript"></script>
        <script src="javascripts/script.js" type="text/javascript"></script>
        <title><?php echo _('Title'); ?></title>
    </head>
    <body>
        <div id="lang">
            <a href="index.php?lang=ja_JP.utf8" alt="JP"><div class="flagicons" id="jpflag"></div></a>
            <a href="index.php?lang=en_US.utf8" alt="EN"><div class="flagicons" id="enflag"></div></a>
            <a href="index.php?lang=fr_FR.utf8" alt="FR"><div class="flagicons" id="frflag"></div></a>
        </div>
        <div id="chooser">
            <h2><?php echo _('Settings'); ?></h2>
            <form method="post" action="index.php">
                <fieldset>
                    <legend><?php echo _('Data'); ?></legend>
                    <label for="shudo"><?php echo _('Alcohol degree'); ?></label>
                    <input type="text" id="shudo" value="0" size="5">
                    <label for="sando"><?php echo _('Acidity'); ?></label>
                    <input type="text" id="sando" value="1.5" size="5">
                </fieldset>
                <fieldset>
                    <legend><?php echo _('Colors'); ?></legend>
                    <input type="checkbox" id="areabg" value="areabg">
                    <label for="areabg"><?php echo _('Colors area display'); ?></label>
                </fieldset>
                <fieldset>
                    <legend><?php echo _('Download'); ?></legend>
                    <input type="button" id="dlpng" download="nihonshu_chart.png" value="PNG">
                </fieldset>
            </form>   
        </div>
        <div id="grid_container">
            <div id="gridup">
                <h2><?php echo _('Alcohol degree x Acidity Graph'); ?></h2>
            </div>
            <div id="gridleft">
                <div id="gridleft_title">
                    <h2><?php echo _('Acidity'); ?></h2>
                </div>
                <div style="position: relative;height: 150px;">
                    <span style="position: absolute;top: 0;right: 0;width: 100px; text-align: right;">(2.5<?php echo _('Or more'); ?>)<br/>2.5</span>
                </div>
                <div style="position: relative;height: 200px;">
                    <span style="position: absolute;top: 50%;right: 0;width: 100px; text-align: right;">1.5</span>
                </div>
                <div style="position: relative;height: 150px;">
                    <span style="position: absolute;bottom: 0;right: 0;width: 100px; text-align: right;">0.5<br/>(0.5<?php echo _('Or less'); ?>)</span>
                </div>
            </div>
            <div id="grid">
                <div id="mark"></div>
                <div class="saketype" id="amai"><?php echo _('Sweet'); ?></div>
                <div class="saketype" id="karai"><?php echo _('Rich'); ?></div>
                <div class="saketype" id="awa"><?php echo _('Soft'); ?></div>
                <div class="saketype" id="koi"><?php echo _('Dry'); ?></div>
            </div>
            <div id="gridbottom">
                <div style="float: left;width: 10%;text-align: left;">20</div>
                <div style="float: right;width: 10%;text-align: right;">-20</div>
                <div style="margin: auto;text-align: center;">0</div>
                <div style="float:left;width:15%;text-align: left;">(20<?php echo _('Or more'); ?>)</div>
                <div style="float:right;width:15%;text-align: right;">(-20<?php echo _('Or less'); ?>)</div>
                <div id="gridbottom_title">
                    <h2><?php echo _('Alcohol degree'); ?></h2>
                </div>
            </div>
        </div>
        <div id="color_container" style="display: none;">
            <h2><?php echo _('Tastes'); ?></h2>
            <div id="karai_color" class="color_legend"><?php echo _('Rich and Dry'); ?></div>
            <div id="koi_color" class="color_legend"><?php echo _('Rich and Sweet'); ?></div>
            <div id="amai_color" class="color_legend"><?php echo _('Soft and Sweet'); ?></div>
            <div id="awa_color" class="color_legend"><?php echo _('Soft and Dry'); ?></div>     
        </div>
    </body>
</html>