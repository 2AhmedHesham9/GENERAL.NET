
<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="imgs/17.png">
    <title>Currency conversion</title>
</head>
<body>
    <nav>
        <img src="./imgs/money_1790213 (1).png">
        <h1 class="logo">currency exchange</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#prices">Prices</a></li>
            <li><a href="#exchange">Exchange</a></li>
        </ul>
    </nav>
    <div class="section1">
        <div data-aos="fade-down-right" data-aos-duration="1200" class="home">
        <h2>PLATFORM FOR</h2>
        <h1>CURRENCY EXCHANGE</h1>
        <h3>Here is your guide to knowing international <br>currency rates and currency conversion</h3>
        </div>
        <div data-aos="fade-up-left" data-aos-duration="1200" class="img1">
            <img src="./imgs/cash-flow_7257727.png">
        </div>
    </div>
    <div id="prices">
        <h2  class="table-header">Prices</h2>
    </div>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>    
                <th>CURRENCY</th>
                <th>PRICE</th>
             
            </tr>
            </thead>
            <tbody>
            <tr>
                
                <td>Egypt</td>
                <?php
                
                    $sql="SELECT cur_price FROM currency WHERE cur_name='Egyption Pound' ";
                    $result=mysqli_query($conn,$sql)  ;
                    if($result->num_rows > 0)
                    {
                        $row=$result->fetch_assoc();
                          ?>  
               
                <td id="egy"><?php echo $row['cur_price'];?></td>         
          </div>
        </div>
                    
                        
                        <?php 

                        }
                  ?>
       
               
             
            </tr>
            <tr>
                <td>kuit</td>
                <?php
                
                $sql="SELECT cur_price FROM currency WHERE cur_name='Dinar' ";
                $result=mysqli_query($conn,$sql)  ;
                if($result->num_rows > 0)
                {
                    $row=$result->fetch_assoc();
                      ?>  
           
            <td id="dinar"><?php echo $row['cur_price'];?></td>         
      </div>
    </div>
                
                    
                    <?php 

                    }
              ?>
                
                
            </tr>
            <tr>
                <td>Sudia Aribia</td>
                <?php
                
                $sql="SELECT cur_price FROM currency WHERE cur_name='Riyal' ";
                $result=mysqli_query($conn,$sql)  ;
                if($result->num_rows > 0)
                {
                    $row=$result->fetch_assoc();
                      ?>  
           
            <td id="riyal"><?php echo $row['cur_price'];?></td>        
      </div>
    </div>
                
                    
                    <?php 

                    }
              ?>
                
            </tr>
            <tr>
                <td>Euro</td>
                <?php
                
                $sql="SELECT cur_price FROM currency WHERE cur_name='Euro' ";
                $result=mysqli_query($conn,$sql)  ;
                if($result->num_rows > 0)
                {
                    $row=$result->fetch_assoc();
                      ?>  
           
            <td id="euro"><?php echo $row['cur_price'];?></td>        
      </div>
    </div>
                
                    
                    <?php 

                    }
              ?>
              
            </tr>
            <tr>
                <td>Dollar</td>
                <?php
                
                $sql="SELECT cur_price FROM currency WHERE cur_name='Dollar' ";
                $result=mysqli_query($conn,$sql)  ;
                if($result->num_rows > 0)
                {
                    $row=$result->fetch_assoc();
                      ?>  
           
            <td id="dollar" ><?php echo $row['cur_price'];?></td>        
      </div>
    </div>
                
                    
                    <?php 

                    }
              ?>
               
            </tr>

            <tr>
                <td>Dirham</td>
                <?php
                
                $sql="SELECT cur_price FROM currency WHERE cur_name='Dirham' ";
                $result=mysqli_query($conn,$sql)  ;
                if($result->num_rows > 0)
                {
                    $row=$result->fetch_assoc();
                      ?>  
           
            <td id="dirham" ><?php echo $row['cur_price'];?></td>     
      </div>
    </div>
                
                    
                    <?php 

                    }
              ?>
                
            </tr>
            <tbody>
        </table>
    </div>
   
    <div id="exchange" class="wrapper" style="margin: auto;margin-left: 250px;">
        <hr>
        <div class="converter-wrapper">
            
            <img class="img4" src="./imgs/17.png" alt="">
           
            <h2> currency converter</h2>
            <!-- <div class="converter-inpputs"> -->
                <!-- <div class="from-amount"> -->
                    <label for="">Amount</label>
                    <br>
                    <input type="number" placeholder="0.00" class="money" id="amount" name="mon">
                    <br>
                    <br>
                <!-- </div> -->
                <span style="margin: 5px; display: inline;">
                    <strong  style="background-color:rgb(255, 255, 255);width: 10%;
                    height: 35px;
                    font-family: 'Pacifico', cursive;
                    border-radius: 8px ;
                    margin-left: 10px; margin-right: -12px; " >From</strong>

                    <select class="sel" name="country1" id="sel1" style="margin-left: 10px;">
                        <option value="">select currency...</option>
                        <option value="egypt">Egyption Pound</option>
                        <option value="portoghal">Prtoghal Euro</option>
                        <option value="america">America dollar</option>
                        <option value="kuit">Kuwiti dinar </option>
                        <option value="saudia">Saudi Riyal </option>
                        <option value="emirat">Emirat dirham</option>


                    </select>
               
                   

                        <strong  style="background-color:rgb(255, 255, 255);
                        height: 35px;
                        font-family: 'Pacifico', cursive;
                        border-radius: 8px ;
                        margin-left: 10px; margin-right: -30px;" >To</strong>
                       <select class="sel" name="" id="sel2" style="margin-left: 30px; ">
                           <option value="">select currency...</option>
                           <option value="america">America dollar</option>
                           <option value="kuit">Kuwiti dinar </option>
                           <option value="saudia">Saudi Riyal </option>
                           <option value="portoghal">Prtoghal Euro</option>
                           <option value="emirat">Emirat dirham</option>
                           <option value="egypt">Egyption Pound</option>
                          
                       </select>
                    

                   
              
                </span>
   
    
    <!-- <div class="result-wrapper">
        <p>
            <span id="from-result"> USD 1</span>
            =
            <span id="to-result"> EUR 1</span>
        </p>
    </div> -->
   
    <button onclick="sub()" type="submit" class="btn">Convert</button>
    <button type="submit" onclick=" reset()"  class="btn">Reset</button>

    

    <div id="finalAmount" class="text-center">

        <!-- Display the converted amount -->
        <h2 id="conv" style="display: none;margin-top: 280px;margin-left: -30px;">Converted Amount :
            <span class="finalValue" style="color:green;">
            </span>
        </h2>
    
    
    </div>
    

    
</div>

    
 <hr>
 <hr>
 <hr>
 <hr>
 <hr>
</div>

    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>