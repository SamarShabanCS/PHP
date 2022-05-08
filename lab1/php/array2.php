<html>
<head>
<title> array2</title>
</head>
<body>

<?php
            print( "<br /><strong>Creating the third array Associative Arrays</strong><br />" );
   
            // assign values to non-numerical indices 
            $third[ "ArtTic" ] = 21;
            $third[ "LunaTic" ] = 18;
            $third[ "GalAnt" ] = 23;
   
            // iterate through the array elements and print each 
            // element’s name and value
            for ( reset( $third ); $element = key( $third );next( $third ) )                             
               print( "$element is $third[$element] <br />" ); 
 ?>
</body>
</html>
