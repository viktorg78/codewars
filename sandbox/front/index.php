<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <title>одинаковые по высоте дивы</title>
</head>
<body>
<h1>Одинаковые по высоте дивы</h1>

<div class="row container11">
    <div class="col-4">
        <div style="background-color: #00FF00">
            kjhkjhkh <br>svsvsvs <br>dswfdwsfgw
        </div>
    </div>
    <div class="col-4">
        <div style="background-color: #7e939b">
            sssssss
        </div>

    </div>
    <div class="col-4">
        <div style="background-color: #7e919b">
            sssssss
        </div>
    </div>
    <div class="col-4">
        <div style="background-color: #71939b">
            sssssss
        </div>
    </div>
    <div class="col-4">
        <div style="background-color: #74939b">
            kjhkjhkh <br>svsvsvs <br>dswfdwsfgw
        </div>
    </div>
</div>

<!--<div class='container'>-->
<!--    <div class='leftsidebar'> … Lots Of Content … </div>-->
<!--    <div class='content'> …. Lots Of Content … <br>sfgvfsgsgsg </div>-->
<!--    <div class='rightsidebar'> … Lots Of Content … <br>sfgvfsgsgsg <br>sfgvfsgsgsg <br>sfgvfsgsgsg</div>-->
<!--</div>-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--<script src="//code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>-->
<script>
    function setEqualHeight(columns)
    {
        var tallestcolumn = 0;
        columns.each(
            function()
            {
                currentHeight = $(this).height();
                if(currentHeight > tallestcolumn)
                {
                    tallestcolumn = currentHeight;
                }
            }
        );
        columns.height(tallestcolumn);
    }
    $(document).ready(function() {
        setEqualHeight($(".container11 > div > div"));
    });
</script>
</body>
</html>


