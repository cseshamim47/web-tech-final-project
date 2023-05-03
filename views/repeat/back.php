<tr height=100px>
            <td>
                <table width=100%>
                    <tr>
                        <th><h2>
                            <?php 
                                echo $_SESSION['#tabname'];
                                $_SESSION['#tabname'] = '';                                
                            ?>
                        </h2></th>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td width=70%></td>
                                    <td><a href=
                                    <?php
                                       
                                        echo $_SESSION['#back'];
                                    ?>
                                    >Back</a></td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

            </td>
            <td colspan="2"></td>
</tr>