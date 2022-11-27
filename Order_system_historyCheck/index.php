<!DOCTYPE html>
<html>


<head>
    <link rel=stylesheet type="text/css" href="./menu.css">
    <link rel=stylesheet type="text/css" href="./salesdata.css">



</head>

<body>


    <?php
        include_once './header.php';
    ?>
    <div class="menu_content" id="dental_content" >
        <h2 >Dental Team</h2>
        <span>User: <span>allan tien</span></br>
            <span>Customer Name:
                <div class="popup" onclick="myFunction()">Please click here...

                    <select class="popuptext" id="myPopup" placeholder="Please click here:">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                    </select>

                </div>

                <span>London is the capital city of England.</p>
    </div>



    <div >
        <?php
            include './include/sales_data.php';
        ?>
    </div>





</body>
<script src="./t1.js" ></script>

</html>