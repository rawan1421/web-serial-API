<html>
    <head> 
        <meta charset="utf-8">
    
        <title>Motors</title>
    </head>
    <body>
        
   
        
        <form  method="post">
        Motor1 <input type="integer" name="mo1"> <br/>
        Motor2 <input type="integer" name="mo2"> <br/>
        Motor3 <input type="integer" name="mo3"> <br/>
        Motor4 <input type="integer" name="mo4"> <br/>
        Motor5 <input type="integer" name="mo5"> <br/>
        Motor6 <input type="integer" name="mo6"> <br/>
            <input type="submit">
        </form>
        
        
     

        <?php
           
        
        $motor1 = $_POST["mo1"];
        $motor2 = $_POST["mo2"];
        $motor3 = $_POST["mo3"];
        $motor4 = $_POST["mo4"];
        $motor5 = $_POST["mo5"];
        $motor6 = $_POST["mo6"];
          
        $connection = new mysqli("localhost","root","","motors");
        $stmt = $connection->prepare("insert into motors(Motor1,Motor2,Motor3,Motor4,Motor5,Motor6) values(?,?,?,?,?,?);");
        
        $stmt->bind_param("iiiiii",$motor1,$motor2,$motor3,$motor4,$motor5,$motor6);
        $stmt->execute();
        
        
        
        
        
        
        ?>
        
    </body>
</html>