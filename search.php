<?php
include("config.php");
if(isset($_GET['youareinterestedin'])){
    $term = $_GET['youareinterestedin'];
} else {
    exit ('You must enter a word show what your are interested in');
}
// same function as below one line code
// if(isset($_GET['type'])){
//     $type = $_GET['type'];
// } else {
//     $type = "sites";
// }

$type = isset($_GET['type']) ? $_GET['type']:"sites";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Lin's Noodle Search</title>
</head>
<body>
    <div class='wrapper'>
        <div class='header'>
            <div class='headerContent'>
                <div class='logoContainer'>
                    <a href="index.php">
                        <img src="assets/images/noddleLogo.png" alt="">
                    </a>
                </div>

                <div class='searchContainer'>
                    <form action="search.php" method='GET'>
                        <div class='searchBarContainer'>
                            <input class='searchBox' type="text" name='youareinterestedin'>
                            <button class='searchButton'>
                                <img src="assets/images/icons/search.png" alt="">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class='tabsContainer'>
                <ul class='tabList'>
                    <li class="<?php echo $type == 'sites' ? 'active':'' ?>">
                        <a href='<?php echo "search.php?youareinterestedin=$term&type=sites"; ?>'>
                            Sites
                        </a>
                    </li>
                    <li class="<?php echo $type == 'images' ? 'active':'' ?>">
                        <a href='<?php echo "search.php?youareinterestedin=$term&type=images"; ?>'>
                            Images
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</body>
</html>