 <!DOCTYPE html>
   
 <html>

    <head>  <title>PHP variable scope</title>  </head>
    
    <body> 
		<?php
			$x = 4;                                                       // here x is global variable
			function assignx () 
				{ 
					$x = 0;                                        //here x local variable. 
					print "\$x inside function is $x. <br />";    // outside of that function will be considered to be an entirely different variable 
				}
   
			assignx();
			
			print "\$x outside of function is $x. <br />";
        ?>    
		<br><br><br><br><br>
		
		<?php
          
			  $x = 10;   $y = 20;    $z = 30 ;   // global scope variables
						  
			 function   scope()
			       {                                          
								$x = 1000;   // local scope variable                                                
								$y = 2000;                                                    
								$z = 3000;   //inside function x, y,  z have local variable scope                                                
									  
								echo "<p>inside function x value = $x</p>";
								echo "<p>inside function y value = $y</p>";                                                
								echo "<p>inside function z value = $z</p>";                                       
					}
													 
			 scope(); // method calling statement                   
			 
								echo "<p>outside function x value = $x</p>";
								echo "<p>outside function y value = $y</p>";
								echo "<p>outside function z value = $z</p>";
                                                
   ?>
         <br><br><br><br><br>

 <h2>PHP  global keyword is used to access global scope variable inside local scope</h2>
                                                                       
   <?php         
   
                      $a = 10;                      
                      $b = 20;     // global scope                      
                      $c = 30;                      
                   function   scope1()
		            {                         
                            global  $a, $b, $c ;
 
         // global keyword use to access global scope variable within local scope                                                  
                            $b = $a + $b;                                                           
                            $c = $b + $c;                     
                    }                                              
          scope1();  // calling scope method
                                               
                  echo "<p>a value = $a</p>";                                              
                  echo "<p>b value = $b</p>";                                               
                  echo "<p>c value = $c</p>";                                                
   ?>	
   
   	<br><br><br><br><br>	 
	
	
		 <h2>how use the global variable as a array</h2>
                                                                       
   <?php         
   
                      $a = 10;                      
                      $b = 20;     // global scope                      
                      $c = 30;                      
                   function scope2(){
                                                                               
                            $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
                                                        
                            $GLOBALS['a'] = $GLOBALS['b'] + $GLOBALS['c'];
                         }                                        
          scope2();  // calling scope method
                                               
                  echo "<p>a value = $a</p>";                                              
                  echo "<p>b value = $b</p>";                                               
                  echo "<p>c value = $c</p>";                                                
   ?>
	
   	<br><br><br><br><br>	 
	<h2>use of static keyword inside the function, its role inside class is different</h2>
                                                                       
   <?php         
   
        function     staticScope()
		                       {                
                                static   $xx = 0;
                                $yy = 0;                            
                                echo "<p>xx value = $xx </p>";                                                 
                                echo "<p>yy value = $yy </p>";
                                $xx++; $yy++;
                                              }
                                              
/* a static variable exists only in a local function scope, but it does not lose its value when function execution completes.*/
                                                      
                                                      staticScope();
                                    
                                                      staticScope();
                                                      
                                                      staticScope();
                                    
                                                      staticScope();
                                                      
                                                      staticScope();
                                    
                                                      staticScope();
                                                      
      
                                                
   ?>

   
    </body>
       
  </html>