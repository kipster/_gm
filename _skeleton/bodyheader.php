    <body>
        <div class="container showgrid">
            <div id="header" class="span-24">
                <div class="span-5 padleft15 prepend-top">
                <a href="?navbar=navbar1"><img src="_imgs/logo.png"></a>
                </div>
                <div id="navbar" class="padleft20 span-18 prepend-top right last">
                        <?php
                            $i = '1';
                            $nav = 'navbar' . $i;
                            $class = 'span-4 navbar_button';
                            while (isset(${$nav})){
                            $class2 = $class;
                                if ($navbar == $nav){$class2 .= ' navbar_selected';}
                                    echo '<a class="' . $class2 . '" href="?navbar=' . $nav . '"><span>' . ${$nav} . '</span></a>';
                                $i++;
                                $nav = 'navbar' . $i;
                            }
                            if ($lg == 'fr') {$lgo = 'en';}
                            else {$lgo = 'fr';}
                            echo '<a class="' . $class . ' navbar_img" href="?navbar=' . $navbar . '&id=' . $id . '&lg=' . $lgo . '"><img src="_languages/' . $lgo . '/flag.jpg" width="30"></a>';
                        ?>
                </div> 
            </div>