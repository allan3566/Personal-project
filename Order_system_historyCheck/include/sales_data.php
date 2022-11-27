<!-- 外一曾選單  內部典籍後持續呈現-->
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript">
            document.getElementById('Customer_name').value = "<?php echo $_POST['Customer_name'];?>";
        </script>
    </head>
    <body>

<?php
    include_once 'dbh.php';
?>

        <div class="<?=(isset($_POST['submit']))?'':'hidden'; ?>" id='inquery_content'>    <!--?=>>?echo  ()?():() print 1 if( a>1 ) print 2-->

            <h2>Salesdata query</h2>

            <?php $submitted = isset($_POST['submit']);

                include_once 'dbh.php';
                $query ="SELECT Customer_name FROM order_list";
                $result = $conn->query($query);
                if($result->num_rows> 0){
                $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                }
            ?>





                <form method="POST" action="" onsubmit="Displayform()">
                    <select name="Customer_name">
                    <option>Select Customer_name</option>
                    <?php
                    foreach ($options as $option) {
                    ?>
                        <option value="<?=$option['Customer_name']?>"><?php echo $option['Customer_name']; ?> </option>
                        <?php
                        }
                    ?>
                    </select>
                    <button type='submit' name='submit' value='submit' id='Displayform'>Inquery</button>
                </form>



            <?php
            if(isset($_POST['submit'])){
                $Customer_name = $_POST['Customer_name'];

                $query = 'SELECT * FROM order_list WHERE Customer_name=?;';
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $query);
                mysqli_stmt_bind_param($stmt,'s',$Customer_name);
                mysqli_stmt_execute($stmt);

                $result = mysqli_stmt_get_result($stmt);

            ?>
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>OrderID</th>
                            <th>Customer_name</th>
                            <th>Product_name</th>
                            <th>Amount</th>
                            <th>Quantity</th>
                            <th>totalAmount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                        <td>{$row['OrderID']}</td>
                                        <td>{$row['Customer_name']}</td>
                                        <td>{$row['Product_name']}</td>
                                        <td>{$row['Amount']}</td>
                                        <td>{$row['Quantity']}</td>
                                        <td>{$row['totalAmount']}</td>
                                    </tr>";
                            }
                        ?>
                    </tbody>
                </table>


                <?php

            }
            ?>
        </div>
    </body>
</html>

