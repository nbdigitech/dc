<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script type="text/javascript" src="//platform.linkedin.com/in.js">
        api_key: 81y4tm1ibec18d
        onLoad: onLinkedInLoad
        authorize: true
    </script>
    <script>
        function onLinkedInLoad(){
            IN.Event.on(IN, "auth", onLinkedInAuth);
        }
        function onLinkedInAuth(){
            IN.API.Profile("me").result(displayProfiles);
        }
        function displayProfiles(profiles){
            member = profiles.values[0];
            document.getElementById("profiles").innerHTML = "<p id=\"" + member.id + "\">Hello " + member.firstName + " " + member.lastName + "</p>";
        }
    </script>
</head>
<body>
    <script type="IN/Login"></script>

    <div id="profiles"></div>
    
</body>
</html>