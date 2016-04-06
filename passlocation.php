<?php

                        /*
                         * $sql= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = 'WH Location A1'";
                         *
                         *
                         */
                        //checking the variable
                        if(isset($a)){
                            $sql= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = '{$loc}'"; //get Js
                            $result = mysqli_query($db, $sql);
                            if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){

                                while($row = $result -> fetch_array()){
                                    echo "

                                <tr>
                        <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row['productid']}\" class = \"tablefield\"></td>
                        <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row['productserialnumber']}\" class = \"tablefield\"></td>
                        <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row['productname']}\" class = \"tablefield\"></td>
                        <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row['productdescription']}\" class = \"tablefield\"></td>
                        <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row['initialstockprice']}\" class = \"tablefield\"></td>
                        <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row['wholesaleprice']}\" class = \"tablefield\"></td>
                        <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row['retailprice']}\" class = \"tablefield\"></td>
                    </tr>

                                ";
                                }
                            }else{
                                echo '<option> No Result Found </option>';
                            }
                        }else if(isset($b)){
                            $sql= "SELECT productid, productserialnumber, productname, productdescription, initialstockprice, wholesaleprice, retailprice
                                FROM addproduct
                                WHERE locationid = '{$b}'"; //get Js
                            $result = mysqli_query($db, $sql);
                            if(mysqli_num_rows($result) == 1 || mysqli_num_rows($result) >1){

                                while($row = $result -> fetch_array()){
                                    echo "

                                <tr>
                                <td><input type=\"text\" id = \"productid\" name= \"productid\"  value = \"{$row['productid']}\" class = \"tablefield\"></td>
                                <td><input type=\"text\" id = \"productsn\" name= \"productsn\"  value = \"{$row['productserialnumber']}\" class = \"tablefield\"></td>
                                <td><input type=\"text\" id = \"productname\" name= \"productname\"  value = \"{$row['productname']}\" class = \"tablefield\"></td>
                                <td><input type=\"text\" id = \"productdesc\" name= \"productdesc\"  value = \"{$row['productdescription']}\" class = \"tablefield\"></td>
                                <td><input type=\"text\" id = \"isp\" name= \"isp\"  value = \"{$row['initialstockprice']}\" class = \"tablefield\"></td>
                                <td><input type=\"text\" id = \"wp\" name= \"wp\"  value = \"{$row['wholesaleprice']}\" class = \"tablefield\"></td>
                                <td><input type=\"text\" id = \"rp\" name= \"rp\"  value = \"{$row['retailprice']}\" class = \"tablefield\"></td>
                                </tr>

                                ";
                                }
                            }else{
                                echo '<option> No Result Found </option>';
                            }
                        }

                        ?>


?>