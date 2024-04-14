<?php
     // Plusieurs destinataires
     $to  = 'alexis.delport@ltpdampierre.fr'; // notez la virgule

     // Sujet
     $subject = 'Bonjour';


     $message = $_POST['genre'];


     // Pour envoyer un mail HTML, l'enko-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'To: christ1 <alexis.delport@ltpdampierre.fr>';
     $headers[] = 'From: christ <c.zmatsanga@gmail.com>';
   

     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));
?>