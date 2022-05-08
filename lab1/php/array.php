<html>
<head>
<title> array</title>
</head>
<body>

<?php
          // create array first Numeric Arrays
            print( "<strong>Creating the first array Numeric Arrays</strong>
               <br />" );
            $first[ 0 ] = "zero";
            $first[ 1 ] = "one";
            $first[ 2 ] = "two";
            $first[] = "three";  
    
            // print each element’s index and value
            for ( $i = 0; $i < count( $first ); $i++ ) 
               print( "Element $i is $first[$i] <br />" );

      
            print( "<br /><strong>Creating the second array (Numeric Arrays) </strong><br />" );
   
            // call function array to create array second 
            $second = array( "zero", "one", "two", "three" );
            for ( $i = 0; $i < count( $second ); $i++ ) 
               print( "Element $i is $second[$i] <br />" );
 ?>
</body>
</html>