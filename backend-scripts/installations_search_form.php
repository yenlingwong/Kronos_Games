<?php
    include ('config2.php');
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Kronos Games</title>

    <style type="text/css">
      .ui-autocomplete-row
      {
        padding:8px;
        background-color: #f4f4f4;
        border-bottom:1px solid #ccc;
        font-weight:bold;
      }
      .ui-autocomplete-row:hover
      {
        background-color: #ddd;
      }
    </style>

</head>
 
<body>
    <div class="logo">
        <img src="logo.png" height="90" width="90" alt="Kronos Games Logo">
    </div>
    <!--Logo-->

    <div class="login">
        <button type="button">Create Account</button>
        <button type="button">Sign In</button>
    </div>

    <div class="title">
        <h1>Kronos Games</h1>
    </div>
    <!--Title-->
    <div class="navbar">
        <ul>
            <li><a href="./index.html">Home</a></li>
            <div class="dropdown">
                <button class="dropbtn">
                    <li><a href="#">Catalog</a></li>
                </button>
                <div class="dropdown-content">
                    <li><a href="#">Shooting</a></li>
                    <li><a href="#">Racing&emsp;</a></li>
                    <li><a href="#">Fantasy&emsp;</a></li>
                </div>
            </div>
            <li><a href="#">News</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="imprint.html">Disclaimer</a></li>
            <li><a href="search.html">Search Form</a></li>
        </ul>
    </div>
        <form action="installations_search_form.php" method="POST">
            <h1 style="color:coral">Enter graphics card: </h1>
            <input type="text" required="required" name="installations_search" placeholder="Search" id="isearch">
            <button type="submit" required="required" name="submit-search">Search</button>
        </form>
        
        <div class="installations-result-container">

        <script>
            $(document).ready(function(){
                $('#isearch').autocomplete({
                source: "installations_fetch_data.php",
                minLength: 1,
                select: function(event, ui)
                {
                    $('#isearch').val(ui.item.value);
                }
                }).data('ui-autocomplete')._renderItem = function(ul, item){
                return $("<li class='ui-autocomplete-row'></li>")
                    .data("item.autocomplete", item)
                    .append(item.label)
                    .appendTo(ul);
                };
            });
        </script>


<?php
    if(isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['installations_search']);
        $sql_search_query = "SELECT * FROM installation WHERE graphics LIKE '%$search%'";

        $result = mysqli_query($conn, $sql_search_query);
        $search_query_result = mysqli_num_rows($result);    

        echo "There are ".$search_query_result." result(s)!";

        if ($search_query_result > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='installations_result.php?graphics=".$row['graphics']."'><div class='installations-box'>
                <h3>".$row['graphics']."</h3>
            </a></div>";
            }
        } else {
            echo 'There are no results matching your search';
        }
    }
?>
        </div>

        </div>
    </body>
</html>
