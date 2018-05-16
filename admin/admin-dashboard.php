<!DOCTYPE html>
<html>
    <head>
        <title>एड्मिन ड्यासबोर्ड</title>
        <link rel="stylesheet" href="../style/style.css" />
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </head>
    <body>
       <?php
            include '../connection.php';
            $conn = getConnection();

            
            // empty will return true  if the variable is empty string, false, null and unset variable.
            // this prevents submitting empty data to the database 
            
            if(!empty($_POST["title"])===TRUE && !empty($_POST["content"])===TRUE && !empty($_POST["category"])===TRUE ) {
                $title = $_POST["title"];
                $content = $_POST["content"];
                $category = $_POST["category"];
                
                $sql = "insert into poems(title,content,category) values('$title','$content','$category')";
                
                if($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "error" .$conn->error;
                }
            } else {
                echo "Sorry could not proceed! Fill all the required forms.";
            }
            $sql = "select * from poems order by id desc";
            $result = $conn->query($sql);
        ?>
<!--
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col">
                     
            </div>
-->
            <div class="mdl-cell mdl-cell--8-col">
                
                        <?php
                            while($row=$result->fetch_assoc()) {
                                echo $row['title'] ."<br/>";
                            }
                        ?>        
        
            </div>        
         
    </body>
    <?php
        $conn->close();
    ?>
</html>