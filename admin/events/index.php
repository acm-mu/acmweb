<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/header.php"; ?>
<h1>Events</h1>
<div>
  <div class="ui secondary menu" style="float: left">

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

 
</div>

<br /><br /><br />

<table class="ui table">
<thead>
  <tr> <th>Event Date</th> <th>Event Title</th> <th>Publish Date</th> <th>Date Created</th> <th></th></tr>
</thead>
<?php
  $startdate = "$year-08-01 00:00:00";
  $enddate = date(($year + 1).'-7-31 23:59:59');

  $sql = "SELECT * FROM events WHERE date > '$startdate' AND date < '$enddate' ORDER BY date DESC";
  $res = $mysql->query($sql);

  while($row = $res->fetch_assoc()) {
    $date = date('M d, Y', strtotime($row['date']));
    $title = $row['title'];
    $created = date('M d, Y', strtotime($row['creation_date']));
    $publish = date('M d, Y', strtotime($row['publish_date']));
    $desc = $row['desc'];

    echo "<tr> <td>$date</td> <td>$title</td> <td>$created</td> <td>$publish</td>";
    echo "<td>";
    echo "<button class='ui inverted secondary icon button'><i class='pencil icon'></i></button>";
    echo "<button class='ui inverted red icon button'><i class='trash icon'></i></button>";
    echo "</td></tr>";
  }

  echo '<tr> <td colspan=5 style="text-align: center"> <a href="">Create New Event</a></td> </tr>';
?>
  </table>
