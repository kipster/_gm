<?php
    $again = '';
    if (empty($_POST['status'])) {
        $var = '';
    }
    else {
        $var = $_POST['status'];
        $email = $_POST['email'];
        $name = $_POST['nom'];
        $subject = $_POST['subject'];
        $textarea = $_POST['message'];
    }
    
    if ($var == 'sent' && (empty($email) || empty($name) || empty($textarea))) {
        $var = '';
        $again = 'try';
    }
    if ($var == 'sent') {
        $adresse1 = $_POST['adresse1'];
        $adresse2 = $_POST['adresse2'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $pays = $_POST['pays'];
        
        if ($cp != $adresse1){
            $adresse =  '<p>----------------------------------------------------<br>';
            $adresse .= '<b>' . $info . '</b><br>';
            $adresse .= '----------------------------------------------------<br>';
            $adresse .= '<b>' . $name . '</b><br>';
            $adresse .= $adresse1 . '<br>';
            if ($adresse2 != ''){$adresse .= $adresse2 . '<br>';}
            $adresse .= $cp . '&nbsp;' . $ville . '<br>';
            $adresse .= $pays . '</p>';
        }
        
        $to = 'info@gardmultimedia.fr';
        $headers = 'From: "' . $name . '" <' . $email . '>' . "\n";
        $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";
        $headers .='Content-Transfer-Encoding: 8bit'; 
        $message = '<html><head></head><body><p><b>';
        $message .= $name . '</b>' . $wrote . '</p><p>' . $textarea . '</p>';
        
        if (isset($adresse)){
            $message .= $adresse;
        }
        
        $message .='</body></html>';
        
        mail ($to,$subject,$message,$headers);
        
        echo '<div class="success">' . $ta . '</div>';            
    }
    else {
        if ($again == 'try') {
            echo '<div class="error">' . $valid . '</div><br><br>';
        }
?>

        <div class="<?php if ($navbar == 'navbar5'){echo 'prepend-1';} ?> span-13">
            <form method="post" action="<?php echo '?nav=' . $nav . '&id=' . $id; ?>">
                <input name="status" value="sent" type="hidden">
                <div class="span-3 right">
                    <?php echo $nom; ?><br><br>
                    <?php echo $mail; ?><br><br>
                    <?php echo $sujet; ?><br><br>
                    <?php echo $sendtext; ?><br><br>            
                </div>
                <div class="span-10 last">
                    <input name="nom" type="text"><span class="must"><?php echo $must; ?></span><br><br>
                    <input name="email" type="text"><span class="must"><?php echo $must; ?></span><br><br>
                    <select name="subject">
                        <option value="<?php echo $rdv; ?>"><?php echo $rdv; ?></option>
                        <option value="<?php echo $contact; ?>"><?php echo $contact; ?></option>
                        <option value="<?php echo $other; ?>"><?php echo $other; ?></option>
                    </select><span class="optional"><?php echo $optional; ?></span><br><br>
                    <textarea name="message"></textarea><span class="must"><?php echo $must; ?></span>
                </div>
                <div class="span-3 prepend-top right">
                    Adresse :<br><br>
                    <br><br>
                    Code Postal :<br><br>
                    Ville :<br><br>
                    Pays :
                </div>
                <div class="span-10 last prepend-top">
                    <input name="adresse1" type="text"><span class="optional"><?php echo $optional; ?></span><br><br>
                    <input name="adresse2" type="text"><span class="optional"><?php echo $optional; ?></span><br><br>
                    <input name="cp" type="text"><span class="optional"><?php echo $optional; ?></span><br><br>
                    <input name="ville" type="text"><span class="optional"><?php echo $optional; ?></span><br><br>
                    <input name="pays" type="text"><span class="optional"><?php echo $optional; ?></span>
                </div>
                <div class="<?php if ($navbar == 'navbar5'){echo 'prepend-1';} ?> span-12 last right prepend-top">
                    <input type="submit" value="<?php echo $sendform; ?>">
                </div>
            </form>
        </div>
        <div class="<?php if ($navbar == 'navbar5'){echo 'prepend-3';} ?> span-6 last">
            <p><b>Gard Multimédia</b><br>
            Emmanuel Masson<br>
            20 Rue des Platanes<br>
            30500 Allègre-les-Fumades</p>
            <p><b><?php echo $tel; ?></b> 04 86 57 26 90</p>
            <p><b><?php echo $mob; ?></b> 06 01 51 98 70</p>
            <p> <b><?php echo $emailcontact; ?></b> <a href="mailto:info@gardmultimedia.fr">info@gardmultimedia.fr</p>
        </div>
<?php
    ;}
?>