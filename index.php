<?php
require '_skeleton/skeletonhead.php';
if (isset($m1)){
?>

    <div id="col" class="span-4 prepend-top">
        <?php
            $i = 1;
            $m = 'm' . $i;

            while (isset(${$m})){
            $link = $m . 'link';
            $class = 'col_button';
            if (${$link} == $id){$class .= ' col_button_selected';}
            echo '<a class="span-4 ' . $class . '" href="?navbar=' . $navbar . '&id=' . ${$link} . '"><span>' . ${$m} . '</span></a>';
            $i++;
            $m = 'm' . $i;
            }
        ?>
    </div>
    <div id="subbody1" class="span-20 last prepend-top justify">
        <div class="padtop15 padright15 padleft15">
            <?php
                echo '<h1>' . $title . '</h1>';
                if ($text == 'include'){
                    include $page;
                }
                else {echo $text;} ?>
        </div>
        <div class="subbody1_footer">
        </div>
    </div>

<?php
    }
else {
?>
    <div id="subbody2"  class="span-24 prepend-top justify">
        <div class="padtop15 padright15 padleft15">
            <?php
                echo '<h1>' . $title . '</h1>';
                if ($text == 'include'){
                    include $page;
                }
                else {echo $text;}
            ?>
        </div>
        <div class="subbody2_footer">
        </div>
    </div>

<?php
    }
require '_skeleton/skeletonfoot.php';
?>