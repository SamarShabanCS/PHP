     
    <!-- data.php             -->
    <!-- Demonstration of PHP data types -->
    
    <html>
       <head>
          <title>PHP data types</title>
      </head>
   
      <body>
   
         <?php
   
            // declare a string, double and integer
            $testString = "3.5 seconds";
            $testDouble = 79.2;         
            $testInteger = 12;          
         
	      // print each variable’s value -->
          echo $testString . "is a string" . '<br>'; 
         print $testDouble ." is a double" . '<br>';
         print $testInteger. "is an integer" . '<br>'.'<br>' ;
		
            echo "Now, converting to other types:". "<br>";
           
            // call function settype to convert variable
            // testString to different data types
            print( "$testString" );           
            settype( $testString, "double" ); 
            print( " as a double is $testString <br>" );
            print( "$testString" );
            settype( $testString, "integer" );
            print( " as an integer is $testString <br />" );
            settype( $testString, "string" ); 
           
                      
            $data = "98.6 degrees"; 
			
			
            // use type casting to cast variables to a different type   
			
            print( " <br > Now using type casting instead: <br />
               As a string = " . (string) $data .           
               "<br />As a double = " . (double) $data .    
               "<br />As an integer = " . (integer) $data );
         ?>
      </body>
   </html>




