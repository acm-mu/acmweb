<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/include/mysql.php";
?>

<link rel="stylesheet" type="text/css" href="/css/events.css">
<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/menu.min.css'>

<h1 class="title" page="events"> Events </h1>

<div class="ui secondary menu">

  <?php
    $year = date('m') < 6 ? date('Y') - 1 : date('Y');
    if (isset($_GET['year']))
      $year = $_GET['year'];

    $mysql->query("USE muhostin_acm");

    $years = array();

    $sql = "SELECT date FROM events";
    $res = $mysql->query($sql);
    while($row = $res->fetch_assoc()) {
      $y = date('Y', strtotime($row['date']));
      if (!in_array($y, $years)) $years[] = $y;
    }

    if(!in_array(date('Y'), $years)) $years[] = date('Y');

    foreach ($years as $y) {
      $active = $y == $year ? 'active' : '';
      echo "<a class='item $active' href='?year=$y'>$y - ".($y+1)."</a>";
    }

  ?>
</div>

<div class="event-list">
<?php  
  $startdate = "$year-08-01 00:00:00";
  $enddate = date(($year + 1).'-7-31 23:59:59');

  $sql = "SELECT * FROM events WHERE date > '$startdate' AND date < '$enddate' ORDER BY date DESC";
  $res = $mysql->query($sql);

  while($row = $res->fetch_assoc()) {
    $date = strtotime($row['date']);

    $month = strtoupper(date('M', $date));
    $day = date('d', $date);
    
    $passed = time() > $date ? 'passed' : '';

    $title = $row['title'];
    $desc = $row['desc'];

    echo "<div class='event $passed'>";
    echo "<div class='date'>";
    echo "<h1 class='month'>$month</h1>";
    echo "<h1 class='day'>$day</h1>";
    echo "</div>";
    echo "<div class='details'>";
    echo "<p class='title'>$title</p>";
    echo "<p class='desc'>$desc</p>";
    echo "</div>";
    echo "</div>";
  }

?>
    <br />
    <em>More events coming soon!</em>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/footer.php"; ?>