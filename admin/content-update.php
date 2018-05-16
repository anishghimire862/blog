<!DOCTYPE html>
<html>
    <head>
        <title>नयाँ लेख पेश गर्नुहोस्</title>
        <link rel="stylesheet" href="../style/style.css" />
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </head>
    <body>
      
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col"></div>
            <div class="mdl-cell mdl-cell--4-col">
                <form action="admin-dashboard.php" method="post">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label w-100">
                        <input class="mdl-textfield__input" type="text" name="title">
                        <label class="mdl-textfield__label" for="title">शिर्शक</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield w-100">
                        <textarea class="mdl-textfield__input" type="text" rows= "3" name="content" ></textarea>
                        <label class="mdl-textfield__label" for="content">यहाँ लेख लेख्नुहोस्</label>
                    </div>
                    <select class="w-100" style="margin-bottom: 20px;" name="category">
                        <option value="0"> उपर्युक्त बर्ग छन्नुहोश </option>
                        <option value="1"> कथा/लघु कथा </option>
                        <option value="2"> कबिता </option>
                        <option value="3"> अन्य </option>
                    </select> 
                    <button class="mdl-button mdl-js-button mdl-button--raised w-100">
                            पेश गर्नुहोश
                    </button>        
                </form>
            </div>
            
        </div>
    </body>
</html>