<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php"; ?>

<!-- DEVELOPMENT PURPOSES: 
Link with timestamp in url to prevent browser from caching. -->
<link rel="stylesheet" type="text/css" href="/archive/sidebar.css?<?php echo date('l jS \of F Y h:i:s A');?>">

<div class="sidebar">
    <span class='select-year'>
        <select class="select-css" onchange="location = this.value;">
            <?php
                $archive_path = $_SERVER['DOCUMENT_ROOT'] . '/archive';
                foreach(scandir($archive_path, 1) as $year) {
                    if (preg_match('/(\d){4}/', $year, $matches)) {
                        foreach(scandir("$archive_path/$year/") as $q) {
                            if (preg_match('/q\d/', $q, $matches)) {
                                echo "<option value='/archive/$year/$q'";
                                if (strpos($_SERVER['REQUEST_URI'], $year)) 
                                    echo " selected";
                                echo ">$year</option>";
                                break;
                            }
                        }
                    }
                }
            ?>
        </select>
        <div class='dropdown'>▾</div>
    </span>
    <ul>
        <?php
            foreach(scandir(".") as $f) {
                if (preg_match('/q(\d).php/', $f, $m)) {
                    $file = fopen($f, "r");
                    while(!feof($file)) {
                        $line = fgets($file);
                        if(preg_match('/<h1 id="page" page="(\w+)">([a-zA-Z\ \-\.\!\(\)\']+)<\/h1>/', $line, $matches)) {
                            echo '<a href="' . $f . '"> <li id="' . $matches[1] . '">' . $m[1] . ' - ' . $matches[2] . '</li> </a>';
                            break;
                        }
                    }
                    fclose($file);
                }
            }
        ?>
    </ul>
</div>

<div class="content-div">
    <button class="swatch" id="description">Description</button>
    <button class="swatch" id="python-skeleton">Python Skeleton</button>
    <button class="swatch" id="python-solution">Python Solution</button>
    <button class="swatch" id="java-skeleton">Java Skeleton</button>
    <button class="swatch" id="java-solution">Java Solution</button>

    <div id="content"></div>
</div>

<script src="/archive/sidebar.js"></script>