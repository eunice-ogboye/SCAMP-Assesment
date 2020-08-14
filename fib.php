<html>
<head>
    <title>PHP Assessmennt Solution</title>
    <style>
       body { background-color:grey; 
       border-right:25px;
       padding:10px;
       margin:30px;
       }
       h3 {color:blue; 
        font-family:verdana;
        }
    </style>
</head>
<body>
    <h3>This is a Fibonacci sequence series</h3>
    <?php     
    // Recursive function for fibonacci series. 
    function Fibonacci($number){ 
        
        // if and else if to generate first two numbers 
        if ($number == 0) 
            return 0;     
        else if ($number == 1) 
            return 1;     
        
        // Recursive Call to get the upcoming numbers 
        else
            return (Fibonacci($number-1) +  
                    Fibonacci($number-2)); 
    } 
    
    // Driver Code 
    $number = 20; 
    for ($counter = 0; $counter < $number; $counter++){   
        echo Fibonacci($counter),', '; 
    } 
    ?> 
</body>
</html>