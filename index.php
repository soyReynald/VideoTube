<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="assets/js/commonActions.js"></script>
    <title>VideoTube</title>
</head>
<body>
    <div class="main-container">
        <header id="mastHeadContainer" class="main-container-header">
           <button class="navShowHide btn main-container-header__btn main-container-header__btn-menu">
                <img src="assets/img/icons/menu.png" alt="">
            </button>
           <a class="logoContainer btn main-container-header__btn main-container-header__btn-logo" href="index.php">
                <img src="assets/img/icons/VideoTubeLogo.png" alt="Site Logo" title="VideoTube">
            </a>
            <div id="searchBarContainer">
                <form action="search.php" method="GET">
                    <input type="text" name="term" class="main-container__search-bar" placeholder="Search...">
                    <button class="main-container-header__btn-search">
                        <img src="assets/img/icons/search.png" alt="">
                    </button>
                </form>
            </div>
        </header>

        <nav id="sideNavContainer" style="display: none;" class="main-container-nav">
            
        </nav>

        <main id="mainSectionContainer" class="main-container-content">
            <div id="mainContentContainer" class="main-container-content__container">
                Hello everyone
            </div>
        </main>

    </div>
</body>
</html>