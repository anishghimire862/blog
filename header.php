<html>
    <head>
        <title>बिक्रम बिस्त्रित</title>
        <link rel="stylesheet" href="./style/style.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </head>        
    <body class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <?php            
            include 'connection.php';
            $conn = getConnection();
        ?>
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                            mdl-textfield--floating-label mdl-textfield--align-right">
                    <a href="#" class="nav-title"> गृहपृष्ठ </a>
                    <a href="#" class="nav-title"> लेखकको बारेमा  </a>
                </div>
            </div>
        </header>
        <div class="mdl-layout__drawer" style="overflow-x: hidden;">
            <div class="demo-card-image mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand"></div>
                <div class="mdl-card__actions">
                    <span class="demo-card-image__filename">बिक्रम घिमिरे</span>
                </div>
            </div>
            <span class="mdl-layout-title category">कबिता</span>
            <nav class="mdl-navigation adjust-nav">
                <?php
                    $sql = "SELECT title FROM poems WHERE category=2 order by id desc";
                    $result = $conn->query($sql);

                    while($row = $result->fetch_assoc()) {
                        $title = $row["title"];
                        echo "<a class='mdl-navigation__link nav-link' href='article.php?title=$title'> $title </a>";
                    }
                ?>
            </nav>
            <span class="mdl-layout-title category">कथा/लघु कथा</span>
            <nav class="mdl-navigation adjust-nav">
                <?php
                    $sql = "SELECT title FROM poems WHERE category=1 order by id desc";
                    $result = $conn->query($sql);

                    while($row = $result->fetch_assoc()) {
                        $title = $row["title"];
                        echo "<a class='mdl-navigation__link nav-link' href='article.php?title=$title'> $title </a>";
                    }
                ?>    
            </nav>
            <span class="mdl-layout-title category">अन्य</span>
            <nav class="mdl-navigation adjust-nav">
                <?php
                    $sql = "SELECT title FROM poems WHERE category=3 order by id desc";
                    $result = $conn->query($sql);

                    while($row = $result->fetch_assoc()) {
                        $title = $row["title"];
                        echo "<a class='mdl-navigation__link nav-link' href='article.php?title=$title'> $title </a>";
                    }
                ?>        
    
            </nav>
        </div>


        