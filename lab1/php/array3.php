
<html>
<head>
<title> array3</title>
</head>
<body>

<?php
            print( "<br /><strong>Creating the fourth array </strong><br />" );
   
            // call function array to create array fourth using
            // string indices
            $fourth = array(  
               "January"   => "first",   "February" => "second",
               "March"     => "third",   "April"    => "fourth",
               "May"       => "fifth",   "June"     => "sixth",
               "July"      => "seventh", "August"   => "eighth",
               "September" => "ninth",   "October"  => "tenth",
               "November"  => "eleventh","December" => "twelfth"
               );
   
            // print each element’s name and value
            foreach ( $fourth as $element => $value )
               print( "$element is the $value month <br />" );
         ?>
      </body>
   </html>

