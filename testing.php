<?php
    if(isset($_POST)){
        var_dump($_POST);
    }
?>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="/bower_components/webcomponentsjs/webcomponents.js"></script>
        <link rel="import" href="/bower_components/ajax-form/ajax-form.html">
        <link rel="import" href="/bower_components/paper-button/paper-button.html">
        <link rel="import" href="/bower_components/paper-shadow/paper-shadow.html">
        <link rel="import" href="/bower_components/paper-input/paper-input.html">
    </head>
    <body>
        <form method="POST" action="testing.php" is="ajax-form">
            <input name="testing"></input>
            <paper-input name="name" label="Name" floatingLabel="true"></paper-input>
            <paper-input name="description" label="Description" floatingLabel="true"></paper-input>
            <paper-input name="website" label="Web Address" floatingLabel="true"></paper-input>
            <paper-button raised id="submit-form" class="button-blue" type="submit">Submit</paper-button>
        </form>
        <script src="/app.js"></script>
    </body>
</html>