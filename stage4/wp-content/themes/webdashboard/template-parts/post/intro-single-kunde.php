
       <?php

        /* Get Custom Fields and save as Variables*/
        $firmaName = get_field( "firma" );
        $firmaAdresse = get_field( "adresse" );
        $firmaPLZ = get_field( "plz" );
        $firmaOrt = get_field( "ort" );
        $ansprechperson = get_field( "ansprechperson" );
        $email_ansprechperson = get_field( "e-mail_ansprechperson" );

        /* Creating Content Blocks*/
        $firmaAdressefull = $firmaAdresse .'<br>'. $firmaPLZ .'<br>'. $firmaOrt; /* Combine Adresses into a variable*/
        $ansprechpersonen = $ansprechperson . '</br><a class="nostyle" href="mailto:$email_ansprechperson">'. $email_ansprechperson . '</a>';


       get_template_part( 'template-parts/post/table', 'table', array('tr'   => array(array('th' =>  'Firmaname', 'td' => $firmaName),array('th' =>  'Adresse', 'td' => $firmaAdressefull )),'title' => 'Übersicht' )); /* Intro Box */
       
       ?>