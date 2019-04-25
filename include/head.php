<head>
    <meta name="description" content="Joyeuse troupe bariol&eacute;e biardaise" />
    <meta name="keywords" content="fanfare, plastic, plastique, biard, poitiers, vienne, 86, airs" />
    <meta name="robots" content="all" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>La Fanfare en Plastic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if(basename(getcwd()) == "fanfare") {
        echo '<link rel="stylesheet" href="css/knacss.css" media="all">
        <link rel="stylesheet" href="css/styles.css" media="all">';
    } else {
        echo '<link rel="stylesheet" href="../css/knacss.css" media="all">
        <link rel="stylesheet" href="../css/styles.css" media="all">';
    }


        ?>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script>
    $( function() {
        $( "#date" ).datepicker({
            dateFormat: 'yy-mm-dd',
            beforeShow: function (textbox, instance) {
        var txtBoxOffset = $(this).offset();
        var top = txtBoxOffset.top;
        var left = txtBoxOffset.left;
        var textBoxWidth = $(this).outerWidth();
        setTimeout(function () {
            instance.dpDiv.css({
                top: top, //you can adjust this value accordingly
                left: left + textBoxWidth//show at the end of textBox
                });
        }, 0);
    }
        });
        $( "#heure" ).timepicker({
            timeFormat: 'HH:mm'
        });
    } );
    </script>

</head>
