<html>
    <head>
        <title>Currency Converter</title>
        <link rel="stylesheet" href="../../style.css">
    </head>
    <body >
        <h1> <a href="../explorer.php">Back</a> </h1>
        <h1>Currency Converter</h1>

    <style>
      div.result {
        color: greenyellow;
        font-size: 24px;
      }
</style>
        <fieldset>
            <legend>Currency Converter</legend>
            <form action="conversion.php" method="get">
        Enter BTC amount: <input type="text" name="input"/>
        <br>
        Select Currency: 
         <select name="dropdown">
            <!-- <option value="btc">BTC</option> -->
            <option value="usd">Us doller</option>
            <option value="euro">Euro</option>
            <option value="taka">Taka</option>
        
        </select>
        <br>
        <input type="submit" name= "sbmt" value="Convert"/>
        </form>
        <div align="center">
    <?php
    // PHP code to convert currency and display result 
    if(isset($_GET['sbmt']))
    {
        $cc_input = $_GET['input'];
        $cc_dropdown= $_GET['dropdown'];

        if($cc_dropdown == 'usd')
        {
            $outoput = $cc_input * 24762.60;
        }
        else if($cc_dropdown == 'euro')
        {
            $outoput = $cc_input * 23084.93;
        }
        else if($cc_dropdown == 'taka')
        {
            $outoput = $cc_input * 2613479.47;
        }

        echo '<h1 style="color: greenyellow;">' . number_format($outoput, 2) . ' ' . ucfirst($cc_dropdown) . '</h1>';
    }
    ?>
</div>

        </fieldset>
        

        
    </body>
</html>
