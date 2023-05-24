<html>
    <head>
        <title>PHP Practice</title>
        <link rel="stylesheet" href="phpstyle.css"/>

    </head>

    <body>

 <h1 class = "title1">This is Shangwe's Practice Page to Learn PHP!</h1>
    <h1>ChessBoard</h1>
    <!-- <table>
        <tr>
            <td class = "black" ></td>
            <td class = "white" >HI</td>

            <td style ="width: 30px; height: 30px; background: black"></td>
    </table> -->
<div class = "chess">
    <table>
    <?php
            for($row = 1; $row<= 8; $row++) {
                echo "<tr>";
                for($col = 1; $col <=8; $col++) {
                    $total = $row + $col; //alternating black and white
                    if ($total %2 == 0) {
                        echo "<td style ='width: 30px; height: 30px; background: black'></td>";

                    } else {
                        echo '<td style = "width: 30px; height: 30px; background: white"></td>';
                    }


                }
            }
    echo "</tr>";

    ?>
        </table>

</div>
<div class = "container">
    <div class = "sorted">
        <h2>List of All Employees Sorted Alphabetically!</h2>
        <h3>(Well.... Some of Them lol)</h3>
        <h2>
            <?php
                $employeeList = ['Shangwe','Alex', 'Bracken', 'Casey','Elle', "Emily",'Tyler', 'Reno', 'Maddie', 'Eva'];
                sort($employeeList);
                foreach ($employeeList as $employee) {
                    echo "<div class = 'outputText'> $employee </div>";
                }
            ?>
        </h2>
    </div>

    <div class = "rsorted">
        <h2>List of All Employees Sorted Reverse Alphabetically!</h2>
        <h3>(Well.... Also Not All of Them lol)</h3>
        <h2>
            <?php
                // $employeeList = ['Shangwe','Alex', 'Bracken', 'Casey','Elle', "Emily",'Tyler', 'Reno', 'Maddie'];
                rsort($employeeList);
                foreach ($employeeList as $employee) {
                    echo "<div class = 'outputText'>$employee</div>";
                }
            ?>
        </h2>
    </div>

</div>

<h2 class = "cityMatcher">Takes a Phone Number and Returns the City It's From</h2>
<div class = "game">
    <form action="cityMatcher.php" method="post">
        Enter An Area Code!: <input type="text" name="areaCode" placeholder = "Area Code">
        <input type="submit">
    </form>
 </div>


 <h2 class = "firstPlayer">Figure out who should take the first turn in a board game</h2>
 <?php 
    $players = ['Shangwe', 'Savion', 'Mythri', 'Josh', 'Grace', 'Jacob', 'Tyler',];
    
    $allPlayers = "";
    foreach ($players as $player) {
        $allPlayers = $allPlayers.$player." ";
    }

    $randomPlayerIndex = array_rand($players);
    ?>
<h3>All Possible Players: <?php echo  $allPlayers; ?></h3>
<h3>The Randomly Chosen Person who should go first is: <?php echo $players[$randomPlayerIndex]; ?>!</h3>




    </body>
</html>