<!DOCTYPE html>

<?php
    include 'header.php';
?>
<?php
    $sql = "select max(id) as id from poems";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $lastid = $row["id"];
    $sql = "select * from poems where id=$lastid";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $content = $row["content"];
    $title = $row["title"];
?> 
<main class="mdl-layout__content">
    <div class="page-content" id="page-content">
        <h4>हालसालै थपिएको</h4>
        <div class="demo-card-wide mdl-card mdl-shadow--2dp">   
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">
                    <?php 
                        echo $title; 
                    ?>
                </h2>
            </div>
            <div class="mdl-card__supporting-text" id="article-text"  width: 100%;>
                <?php
                    echo $content;
                ?>
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect author-name"  style="float: right;">
                    बिक्रम बिस्त्रित
                </a>
            </div>
            <div class="mdl-card__menu">
                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                    <i class="material-icons">share</i>
                </button>
            </div>  
        </div>
    </div> 
</main>

<?php
    $conn->close(); 
?>


