<h3>Does this look right to you?</h3>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/include/connection.php";
$schoolid = $_GET['schoolid'];




echo "<table>";
echo "<tbody>";

$res = $mysql->query("SELECT * FROM school WHERE schoolid = '$schoolid'");

if ($res->num_rows > 0) {
    // output data of each row
    while($row = $res->fetch_assoc()) {

        echo "<tr><td colspan=2>School Information</td></tr>";
        echo "<tr><td>School Name</td> <td>".$row['sname']."</td> </tr>";
        echo "<tr><td>School Address Line 1</td> <td>".$row['saddl1']."</td> </tr>";
        echo "<tr><td>School Address Line 2</td> <td>".$row['saddl2']."</td> </tr>";
        echo "<tr><td>School City</td> <td>".$row['scity']." </td> </tr>";
        echo "<tr><td>School State</td> <td>".$row['sstate']."</td> </tr>";
        echo "<tr><td>School Zip</td> <td>".$row['szip']."</td> </tr>";
        echo "<tr><td>Registration Date</td> <td>".$row['rdate']."</td> </tr>";
    }

    $res = $mysql->query("SELECT * FROM coach WHERE schoolid = '$schoolid'");
    
    while($row = $res->fetch_assoc()) {

        echo "<tr><td colspan=2>Coach Information</td></tr>";
        echo "<tr><td>Coach Name</td> <td>".$row['cname']."</td> </tr>";
        echo "<tr><td>Coach Email</td> <td>".$row['email']."</td> </tr>";
        echo "<tr><td>Coach Phone</td> <td>".$row['phone']."</td> </tr>";
        echo "<tr><td># of Small</td> <td>".$row['small']." </td> </tr>";
        echo "<tr><td># of Medium</td> <td>".$row['medium']."</td> </tr>";
        echo "<tr><td># of Large</td> <td>".$row['large']."</td> </tr>";
        echo "<tr><td># of XLarge</td> <td>".$row['xlarge']."</td> </tr>";
        echo "<tr><td># of XXLarge</td> <td>".$row['xxlarge']."</td> </tr>";
    }

    $res = $mysql->query("SELECT * FROM details WHERE schoolid = '$schoolid'");
    
    while($row = $res->fetch_assoc()) {

        echo "<tr><td colspan=2>Other Information</td></tr>";
        echo "<tr><td>Eagle (True or False)</td> <td>".$row["eagle"]."</td></tr>";
        echo "<tr><td>Eagle Devices</td> <td>".$row['eagle_devices']."</td> </tr>";
        echo "<tr><td>Eagle Platform</td> <td>".$row['eagle_platform']."</td> </tr>";
        echo "<tr><td>Gold (True or False)</td> <td>".$row["gold"]."</td></tr>";
        echo "<tr><td>Gold Devices</td> <td>".$row['gold_devices']."</td> </tr>";
        echo "<tr><td>Blue (True or False)</td> <td>".$row["blue"]."</td></tr>";
        echo "<tr><td>Java Eclipse</td> <td>".$row['java_eclipse']." </td> </tr>";
        echo "<tr><td>Java Netbeans</td> <td>".$row['java_netbeans']."</td> </tr>";
        echo "<tr><td>Java BlueJ</td> <td>".$row['java_bluej']."</td> </tr>";
        echo "<tr><td>Java JGrasp</td> <td>".$row['java_jgrasp']."</td> </tr>";
        echo "<tr><td>Java Notepad</td> <td>".$row['java_notepad']."</td> </tr>";
        echo "<tr><td>Java Other</td> <td>".$row['java_other']."</td> </tr>";
        echo "<tr><td>Python Idle</td> <td>".$row['python_idle']."</td> </tr>";
        echo "<tr><td>Python PyCharm</td> <td>".$row['python_pycharm']."</td> </tr>";
        echo "<tr><td>Python Notepad</td> <td>".$row['python_notepad']."</td> </tr>";
        echo "<tr><td>Python Other</td> <td>".$row['python_other']."</td> </tr>";
        echo "<tr><td>Accommodations</td> <td>".$row['accommodations']."</td> </tr>";
        echo "<tr><td>Concerns</td> <td>".$row['concerns']."</td> </tr>";
    }

    $res = $mysql->query("SELECT * FROM team WHERE schoolid = '$schoolid'");
    
    while($row = $res->fetch_assoc()) {

        echo "<tr><td colspan=2>Team Information</td></tr>";
        echo "<tr><td>Team Name</td> <td>".$row["tname"]."</td></tr>";
        echo "<tr><td>Division</td> <td>".$row['division']."</td> </tr>";
        echo "<tr><td># of Small</td> <td>".$row['small']."</td> </tr>";
        echo "<tr><td># of Medium</td> <td>".$row["medium"]."</td></tr>";
        echo "<tr><td># of Large</td> <td>".$row['large']."</td> </tr>";
        echo "<tr><td># of XLarge</td> <td>".$row["xlarge"]."</td></tr>";
        echo "<tr><td># of XXLarge</td> <td>".$row['xxlarge']." </td> </tr>";
    }
    
} else {
    echo "<tr><td colspan=2>No Results</td></tr>";
}

echo "</tbody>";
echo "</table>";

?>

<style>
td {
    border: 1px solid #ccc;
}

td[colspan="2"] {
    text-align: center;
    font-size: 24px;
    font-weight: bold;
}
</style>