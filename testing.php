<?php
    if(isset($_POST)){
        var_dump($_POST);
    }
?>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="/bower_components/webcomponentsjs/webcomponents.js"></script>
        <link rel="import" href="/bower_components/core-style/core-style.html">
        <link rel="import" href="/bower_components/ajax-form/ajax-form.html">
        <link href="/bower_components/core-header-panel/core-header-panel.html" rel="import">
        <link href="/bower_components/core-toolbar/core-toolbar.html" rel="import">
        <link href="/bower_components/core-drawer-panel/core-drawer-panel.html" rel="import">
        <link href="/bower_components/core-collapse/core-collapse.html" rel="import">
        <link href="/bower_components/core-menu/core-menu.html" rel="import">
        <link rel="import" href="/bower_components/paper-button/paper-button.html">
        <link href="/bower_components/core-icons/core-icons.html" rel="import">
        <link href="/bower_components/paper-icon-button/paper-icon-button.html" rel="import">
        <link href="/bower_components/paper-dropdown/paper-dropdown.html" rel="import">
        <link href="/bower_components/paper-item/paper-item.html" rel="import">
        <link href="/bower_components/paper-shadow/paper-shadow.html" rel="import">
        <link rel="import" href="/bower_components/paper-menu-button/paper-menu-button.html">
        <link rel="import" href="/bower_components/paper-input/paper-input.html">
        <link rel="import" href="/bower_components/paper-input/paper-autogrow-textarea.html">
        <link rel="import" href="/bower_components/form/form.html">
        <link rel="import" href="/bower_tracked/paper-dropdown-menu-header/paper-dropdown-menu-header.html">
        <link rel="import" href="/bower_components/paper-dropdown-menu/paper-dropdown-menu.html">
        <script src="/app.js"></script>
    </head>
    <body>
        <form method="POST" action="/testing.php" is="ajax-form">
            <input name="testing"></input>
            <paper-input name="name" label="Name" floatingLabel="true"></paper-input>
            <paper-input name="description" label="Description" floatingLabel="true"></paper-input>
            <paper-input name="website" label="Web Address" floatingLabel="true"></paper-input>
            <paper-button raised id="submit-form" class="button-blue" type="submit">Submit</paper-button>
        </form>
    </body>
</html>