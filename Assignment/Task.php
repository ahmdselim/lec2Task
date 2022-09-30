<?php
$colors = ["red", "green", "blue", "black", "white"];
$numbers = [10, 20, 30, 40, 50];
$users = [
    ["mohamed ali", 20],
    ["rana ahmed", 19],
    ["maged khalid", 25],
];
$employees = [
    ["mohamed ali", "mohamed@eraasoft.com", "01200659086", 2500],
    ["reham mohamed", "reham@eraasoft.com", "01200659086", 3000],
    ["maged hesham", "maged@eraasoft.com", "01200659086", 4000],
    ["ali mahmoud", "ali@eraasoft.com", "01200659086", 2000],
    ["nader elsayed", "nader@eraasoft.com", "01200659086", 1000],
];

// #5 Element Of Task ( make a new array with these items plus by 5 )
$i = 1;
$reduce = [$numbers[0] + 5, $numbers[$i++] + 5, $numbers[$i++] + 5, $numbers[$i++] + 5, $numbers[$i++] + 5];


// #6 Element Of Task ( make a new array with these items divided by 3 )
$i = 1;
$divided = [$numbers[0] / 3, $numbers[$i++] / 3, $numbers[$i++] / 3, $numbers[$i++] + 3, $numbers[$i++] / 3];

// #7 Element Of Task ( add these items 60,70,80 to the numbers array )
array_push($numbers, 60, 70, 80); // #1 solution add elements at the last of array
array_unshift($numbers, 60, 70, 80); // #2 solution add elements at the first of array

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
</head>

<body>
    <!-- #1 Element Of Task ( display the colors array in h2 )  -->
    <h2>
        <?php
        $i = 0;

        echo $colors[$i] . "<br />";
        echo $colors[$i++] . "<br />";
        echo $colors[$i++] . "<br />";
        echo $colors[$i++] . "<br />";
        echo $colors[$i++] . "<br />";
        echo $colors[$i++];
        ?>
    </h2>
    <!-- #2 Element Of Task ( display colors array in ul > li )  -->
    <ul>
        <?php $i = 0; ?>
        <li> <?php echo $colors[$i]; ?> </li>
        <li> <?php echo $colors[$i++]; ?> </li>
        <li> <?php echo $colors[$i++]; ?> </li>
        <li> <?php echo $colors[$i++]; ?> </li>
        <li> <?php echo $colors[$i++]; ?> </li>
    </ul>
    <!-- #3 Element Of Task ( add three colors to colors array and display in h3 )   -->
    <?php
    array_push($colors, "gray", "yellow", "greenyellow");
    echo "<h3>" . $colors[count($colors) - 3] . "</h3>";
    echo "<h3>" . $colors[count($colors) - 2] . "</h3>";
    echo "<h3>" . $colors[count($colors) - 1] . "</h3>";
    ?>
    <!-- #4 Element Of Task ( display numbers array in h3 )  -->
    <?php echo "<h3>" . $numbers[0] . "</h3>" ?>
    <?php echo "<h3>" . $numbers[1] . "</h3>" ?>
    <?php echo "<h3>" . $numbers[2] . "</h3>" ?>
    <?php echo "<h3>" . $numbers[3] . "</h3>" ?>
    <?php echo "<h3>" . $numbers[4] . "</h3>" ?>

    <!-- #8 display users array in card -->
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Users
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <?php echo "<p>" . $users[0][0] . "</p>";
                echo "<span>" . $users[0][1] . "</span>";
                ?>
            </li>
            <li class="list-group-item">
                <?php echo "<p>" . $users[1][0] . "</p>";
                echo "<span>" . $users[1][1] . "</span>";
                ?>
            </li>
            <li class="list-group-item">
                <?php echo "<p>" . $users[2][0] . "</p>";
                echo "<span>" . $users[2][1] . "</span>";
                ?>
            </li>
        </ul>
    </div>

    <!-- #9 Element Of Task ( display employees array items in table )  -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">mobile</th>
                <th scope="col">salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $employees[0][0] ?></th>
                <th scope="row"><?php echo $employees[0][1] ?></th>
                <th scope="row"><?php echo $employees[0][2] ?></th>
                <th scope="row"><?php echo $employees[0][3] ?></th>
            </tr>
            <tr>
                <th scope="row"><?php echo $employees[1][0] ?></th>
                <th scope="row"><?php echo $employees[1][1] ?></th>
                <th scope="row"><?php echo $employees[1][2] ?></th>
                <th scope="row"><?php echo $employees[1][3] ?></th>
            </tr>
            <tr>
                <th scope="row"><?php echo $employees[2][0] ?></th>
                <th scope="row"><?php echo $employees[2][1] ?></th>
                <th scope="row"><?php echo $employees[2][2] ?></th>
                <th scope="row"><?php echo $employees[2][3] ?></th>
            </tr>
            <tr>
                <th scope="row"><?php echo $employees[3][0] ?></th>
                <th scope="row"><?php echo $employees[3][1] ?></th>
                <th scope="row"><?php echo $employees[3][2] ?></th>
                <th scope="row"><?php echo $employees[3][3] ?></th>
            </tr>
            <tr>
                <th scope="row"><?php echo $employees[4][0] ?></th>
                <th scope="row"><?php echo $employees[4][1] ?></th>
                <th scope="row"><?php echo $employees[4][2] ?></th>
                <th scope="row"><?php echo $employees[4][3] ?></th>
            </tr>

        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>