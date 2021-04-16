<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/header.php";  ?>

<link rel="stylesheet" type="text/css" href="/archive/sidebar.css?css_version=2.1">
<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

<div class="sidebar">
    <select onchange="location = this.value;">
        <option <?php if (strpos($_SERVER['REQUEST_URI'], 'prep')) echo "selected" ?> value='/archive/prep/q0.php'>
            Java Prep</option>
        <option <?php if (strpos($_SERVER['REQUEST_URI'], '2021')) echo "selected" ?> value='/archive/2021/q0.php'>
            2021</option>
        <option <?php if (strpos($_SERVER['REQUEST_URI'], '2019')) echo "selected" ?> value='/archive/2019/q0.php'>
            2019</option>
        <option <?php if (strpos($_SERVER['REQUEST_URI'], '2018')) echo "selected" ?> value='/archive/2018/q0.php'>
            2018</option>
        <option <?php if (strpos($_SERVER['REQUEST_URI'], '2017')) echo "selected" ?> value='/archive/2017/q1.php'>
            2017</option>
        <option <?php if (strpos($_SERVER['REQUEST_URI'], '2016')) echo "selected" ?> value='/archive/2016/q1.php'>
            2016</option>
        <option <?php if (strpos($_SERVER['REQUEST_URI'], '2013')) echo "selected" ?> value='/archive/2013/q1.php'>
            2013</option>
    </select>
    <ul>
        <?php
        foreach (scandir(".") as $filename) {
            if (preg_match('/q(\d).php/', $filename, $m)) {
                $file = fopen($filename, "r");
                $f = str_replace('.php', '', $filename);
                while (!feof($file)) {
                    $line = fgets($file);
                    if (preg_match('/<h1 id="page" page="([a-zA-Z0-9]+)">([0-9a-zA-Z\ \-\.\!\(\)\']+)<\/h1>/', $line, $matches)) {
                        echo '<a href="' . $filename . '" class="nav_item" id="' . $f . '"> <li id="' . $matches[1] . '">' . $m[1] . ' - ' . $matches[2] . '</li> </a>';
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
    <a href='#' id="abacus-link">>_ Try on Abacus</a>

    <div id="content"></div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/include/footer.php"; ?>

<script src="/archive/sidebar.js" defer></script>