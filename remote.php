<?php echo $text1; ?>
<hr>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="SAFLAKY5LRHMJ">
    <input type="hidden" name="on0" value="<?php echo $hours; ?>">
    <div class="span-7">
    <select name="os0">
        <option value="Forfait 1 heure"><?php echo $forfait1; ?></option>
        <option value="Forfait 2 heures"><?php echo $forfait2; ?></option>
        <option value="Forfait 3 heures"><?php echo $forfait3; ?></option>
    </select>
    </div>
    <div class="span-4">
    <input type="hidden" name="currency_code" value="EUR">
    <input type="image" src="https://www.paypal.com/<?php echo $addtocart; ?>/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="<?php echo $alt; ?>">
    <img alt="" border="0" src="https://www.paypal.com/<?php echo $addtocart; ?>/i/scr/pixel.gif" width="1" height="1">
    </div>
</form>
<hr>
<!-- Voir Panier -->
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">  
<input type="hidden" name="business" value="paypal@gardmultimedia.fr">  
<input type="hidden" name="cmd" value="_cart">  
<input type="hidden" name="display" value="1">  
<input type="hidden" name="shopping_url" value="?navbar=navbar2&id=14">
<input type="image" name="submit" border="0" src="https://www.paypal.com/<?php echo $addtocart; ?>/i/btn/btn_viewcart_LG.gif" alt="<?php echo $alt; ?>"><img alt="" border="0" width="1" height="1" src="https://www.paypal.com/<?php echo $addtocart; ?>/i/scr/pixel.gif" >  
</form><br>
<hr>
<?php echo $text2; ?>