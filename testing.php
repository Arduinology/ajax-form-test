<?php
    if(isset($_POST)){
        var_dump($_POST);
    }
?>

<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <title>ajax-form demo</title>

    <script src="/bower_components/webcomponentsjs/webcomponents.js"></script>
    <link rel="import" href="/bower_components/ajax-form/ajax-form.html">
    <link rel="import" href="/bower_components/paper-button/paper-button.html">
    <link rel="import" href="/bower_components/paper-shadow/paper-shadow.html">
    <link rel="import" href="/bower_components/paper-input/paper-input.html">

</head>

<body unresolved>

    <h1><code>ajax-form</code> in action:</h1>

        <p>See the code for this demo in the <a href="https://github.com/garstasio/ajax-form/tree/gh-pages/components/ajax-form/demo.html">demo.html file</a> 
        of the <a href="https://github.com/garstasio/ajax-form">ajax-form GitHub repository</a>.</p>

        <h1 id="pleaseWait" class="hidden">Sending your data...</h1>
        
        <div id="content">
            <form is="ajax-form" action="testing.php" method="post">
                
                <input name="testing"></input>
                <paper-input name="name" label="Name" floatingLabel="true"></paper-input>
                <paper-input name="description" label="Description" floatingLabel="true"></paper-input>
                <paper-input name="website" label="Web Address" floatingLabel="true"></paper-input>
                <paper-button raised id="submit-form" class="button-blue" type="submit">Submit</paper-button>
                
                <input type="submit">
            </form>
        
</body>
     <script src="/app.js"></script>

    <script>
        (function() {
            var form = document.getElementsByTagName('form')[0],
                content = document.getElementById('content');
            
            form.addEventListener('invalid', function() {
            });
            
            form.addEventListener('submitting', function() {
                document.getElementById('pleaseWait').className = '';
                content.className = 'hidden';
            });
            
            form.addEventListener('submitted', function(event) {
                document.getElementById('pleaseWait').className = 'hidden';
                content.className = '';
                
                if (event.detail.status > 299) {
                }
                else {
                    content.innerHTML = 'Thanks!  Your choices have been submitted!';
                }
            });
        }());
    </script>

</html>