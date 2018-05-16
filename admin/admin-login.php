<!DOCTYPE html>
<html>
    <head>
        <title>एड्मिन लग इन</title>
        <link rel="stylesheet" href="../style/style.css" />
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </head>
    <body>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col"></div>
            <div class="mdl-cell mdl-cell--4-col">
                <form action="content-update.php" class="admin-login">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label w-100">
                    <input class="mdl-textfield__input" type="text" id="username">
                    <label class="mdl-textfield__label" for="username">युजरनेम</label>
                  </div>
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label w-100" style="display: block;">
                    <input class="mdl-textfield__input" type="password" id="password">
                    <label class="mdl-textfield__label" for="password">पासवर्ड</label>
                  </div>
                    <button class="mdl-button mdl-js-button mdl-button--raised w-100">
                            लग इन
                    </button>        
                </form>                   
            </div>
        </div>
    </body>
</html>