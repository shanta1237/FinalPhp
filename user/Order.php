<?php include "../includes/db.php"; ?>
<?php include "includes/user_header.php"; ?>

<!-- Navigation -->
<?php include "includes/user_navigation.php"; ?>

<!-- Page Content -->
<!-- <div class="container jumbotron" style="width: 45%; border-radius: 15px"> -->

<div class="container" style="width: 50%;align-items: center">

    <h2 style="margin-left: 40%;">Order History</h2>
    <div class="tab">
        <button class="tablinks" style="width: 100%" onclick="openCity(event, 'Tickets Booked')">Tickets Booked</button>
    </div>



    <?php
    $curr_user_id = $_SESSION['s_id'];
    //echo $curr_user_id;
    $query = "SELECT * FROM users where user_id = $curr_user_id";

    ?>



    <?php  ?>
</div>

<div id="Tickets Booked" class="tabcontent">
    <h3>Tickets Booked</h3>
    <br>

    <h3><b>Past Bookings:</b></h3>
    <?php

    $query = "SELECT * FROM orders INNER JOIN posts ON orders.bus_id = posts.post_id where orders.user_id = $curr_user_id";

    $select_user_orders = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_user_orders)) {
        $passenger = $row['user_name'];
        $passenger_age = $row['user_age'];
        $source = $row['source'];
        $destination = $row['destination'];
        $dob = $row['date'];
        $cost = $row['cost'];
        $orderid = $row['order_id'];
        $busid = $row['bus_id'];
        $busdate = $row['post_date'];

        //$new_query = "SELECT post_date FROM posts WHERE post_id = $busid";

        //echo $busdate;
        if (date("Y-m-d") > $busdate) {
            # code...

    ?>
            <br>
            <table class="table table-striped" style="width: 50%">
                <tbody>
                    <tr>
                        <td><b>Passenger Name:</b> </td>
                        <td><?php echo $passenger; ?></td>
                    </tr>
                    <tr>
                        <td><b>Passenger Age:</b> </td>
                        <td><?php echo $passenger_age; ?></td>
                    </tr>
                    <tr>
                        <td><b>Source: </b></td>
                        <td><?php echo ucfirst($source); ?></td>
                    </tr>
                    <tr>
                        <td><b>Destination: </b></td>
                        <td><?php echo ucfirst($destination); ?></td>
                    </tr>
                    <tr>
                        <td><b>Date Of Booking: </b></td>
                        <td><?php echo $dob; ?></td>
                    </tr>
                    <tr>
                        <td><b>Cost: </b></td>
                        <td><?php echo $cost; ?></td>
                    </tr>
                    <tr>
                        <td><b>Print Receipt<b></td>
                        <td><a href=" receipt.php?orderid=<?php echo $orderid ?>">Receipt</a></td>
                    </tr>
                    <br><br><br>
                </tbody>
            </table>

    <?php }
    } ?>

    <br><br><br>

    <h3 style="margin-bottom: -40px"><b>Upcoming Travels:</b></h3>
    <?php

    $query = "SELECT * FROM orders INNER JOIN posts ON orders.bus_id = posts.post_id where orders.user_id = $curr_user_id";

    $select_user_orders = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_user_orders)) {
        $passenger = $row['user_name'];
        $passenger_age = $row['user_age'];
        $source = $row['source'];
        $destination = $row['destination'];
        $dob = $row['date'];
        $cost = $row['cost'];
        $orderid = $row['order_id'];
        $busid = $row['bus_id'];
        $busdate = $row['post_date'];

        //$new_query = "SELECT post_date FROM posts WHERE post_id = $busid";

        //echo $busdate;
        if (date("Y-m-d") < $busdate) {
            # code...

    ?>
            <br>
            <table class="table table-striped" style="width: 50%">
                <tbody>
                    <tr>
                        <td><b>Passenger Name:</b> </td>
                        <td><?php echo $passenger; ?></td>
                    </tr>
                    <tr>
                        <td><b>Passenger Age:</b> </td>
                        <td><?php echo $passenger_age; ?></td>
                    </tr>
                    <tr>
                        <td><b>Source: </b></td>
                        <td><?php echo ucfirst($source); ?></td>
                    </tr>
                    <tr>
                        <td><b>Destination: </b></td>
                        <td><?php echo ucfirst($destination); ?></td>
                    </tr>
                    <tr>
                        <td><b>Date Of Booking: </b></td>
                        <td><?php echo $dob; ?></td>
                    </tr>
                    <tr>
                        <td><b>Travelling Date: </b></td>
                        <td><?php echo $busdate; ?></td>
                    </tr>
                    <tr>
                        <td><b>Cost: </b></td>
                        <td><?php echo $cost; ?></td>
                    </tr>
                    <tr>
                        <td><b>Print Receipt<b></td>
                        <td><a href=" receipt.php?orderid=<?php echo $orderid ?>">Receipt</a></td>
                    </tr>
                    <tr>
                        <td><b>Cancel Ticket<b></td>
                        <td>
                            <form action="cancel.php?orderid=<?php echo $orderid ?>&bus_id=<?php echo $busid ?>" method="post">
                                <button class="btn btn-primary btn-xs" name="cancel">Cancel</button>
                        </td>
                        </form>
                    </tr>
                    <br><br><br>
                </tbody>
            </table>

    <?php }
    } ?>



</div>

</div>
<hr>


<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }


    function openCity(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<?php include "includes/user_footer.php"; ?>