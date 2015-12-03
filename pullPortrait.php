<html>
<head>
    <title>JSSample</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>

<script type="text/javascript">
    $(function() {
        var params = {
            // Request parameters
            "size": "95",
            "crop": "portrait",
        };
      
        $.ajax({
            url: "https://www.haloapi.com/profile/h5/profiles/Gruuler/spartan&" + $.param(params),
            beforeSend: function(xhrObj){
                // Request headers
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key","7ce867c79e044e9e91b25f783c41ed09");
            },
            type: "GET",
            // Request body
            data: "body",
        })
        .done(function(data) {
            alert("success");
        })
        .fail(function() {
            alert("error");
        });
    });
</script>


</body>
</html>