<?php 

    include '../repeat/activity.php';
    require_once('../repeat/load.php');
    $_SESSION['#menuPath'] = '';

?>
<html>
<head>
    <title>Offer</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        include '../repeat/headerUser.php';
    ?>
        <tr height=400px>
            <td width=20%>
                <table width=100%>
                    <tr>
                        <th><h2>Offer</h2></th>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                include '../repeat/userMenuLink.php';
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2">
                <fieldset>
                    <legend>Offer</legend>
                    
<table align="center" width=50%
                            <tr>
                                <td>
                                    <img src="../../includes/anniversary.png" alt="logo"> <br>


                                    <b>Anniversary offer</b>
                                    <p>date: 25 march</p>
                                    <!-- <button id="btn1" onclick="viewmore()" value=""> -->
                                    <input id="btn1" onclick="viewmore1()" type="button" name="submit"
                                        value="view more">
                                    <div id=view1>
                                        <p></p>
                                    </div>


                                </td>
                                <td>
                                    <img src="../../includes/anniversary.png" alt="logo"> <br>

                                    <b>Anniversary offer</b>
                                    <p>date: 25 march</p>
                                    <input id="btn2" onclick="viewmore2()" type="button" name="submit"
                                        value="view more">
                                    <p id="view2"></p>

                                </td>
                                <td>
                                    <img src="../../includes/anniversary.png" alt="logo"> <br>
                                    <b>Anniversary offer</b>
                                    <p>date: 25 march</p>
                                    <input id="btn3" onclick="viewmore3()" type="button" name="submit"
                                        value="view more">
                                    <p id="view3"></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../../includes/anniversary.png" alt="logo"> <br>
                                    <b>Anniversary offer</b>
                                    <p>date: 25 march</p>
                                    <input id="btn4" onclick="viewmore4()" type="button" name="submit"
                                        value="view more">
                                    <p id="view4"></p>
                                </td>
                                <td>
                                    <img src="../../includes/anniversary.png" alt="logo"> <br>
                                    <b>Anniversary offer</b>
                                    <p>date: 25 march</p>
                                    <input id="btn5" onclick="viewmore5()" type="button" name="submit"
                                        value="view more">
                                    <p id="view5"></p>
                                </td>
                                <td>
                                    <img src="../../includes/anniversary.png" alt="logo"> <br>
                                    <b>Anniversary offer</b>
                                    <p>date: 25 march</p>
                                    <input id="btn6" onclick="viewmore6()" type="button" name="submit"
                                        value="view more">
                                    <p id="view6"></p>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="3" align="center">

                                    <input id="btn7" onclick="viewmore7()" type="button" name="submit"
                                        value="view more for contact us">
                                    <p id="view7"></p>

                                </td>
                            </tr>

                            </tbody>
                        </table>
                </fieldset>

            </td>
        </tr>
        
        <?php 
            include '../repeat/footer.php';
        ?>
    </table>
    <script>
    function viewmore1() {
        document.getElementById("view1").innerHTML = "1)only available  \ 2)per person only one  \ 3)may change anytime";
        document.getElementById("btn1").style.display = "none";

    }
    function viewmore2() {
        document.getElementById("view2").innerHTML = "1)only available  \ 2)per person only one  \ 3)may change anytime";
        document.getElementById("btn2").style.display = "none";
    }
    function viewmore3() {
        document.getElementById("view3").innerHTML = "1)only available  \ 2)per person only one  \ 3)may change anytime";
        document.getElementById("btn3").style.display = "none";
    }
    function viewmore4() {
        document.getElementById("view4").innerHTML = "1)only available  \ 2)per person only one  \ 3)may change anytime";
        document.getElementById("btn4").style.display = "none";
    }
    function viewmore5() {
        document.getElementById("view5").innerHTML = "1)only available  \ 2)per person only one  \ 3)may change anytime";
        document.getElementById("btn5").style.display = "none";
    }
    function viewmore6() {
        document.getElementById("view6").innerHTML = "1)only available  \ 2)per person only one  \ 3)may change anytime";
        document.getElementById("btn6").style.display = "none";
    }
    function viewmore7() {
        document.getElementById("view7").innerHTML = "call: 01515270586";
        document.getElementById("btn7").style.display = "none";
    }



</script>
</body>
</html>

