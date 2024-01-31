<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style Error Example</title>
</head>
<body>

<!-- Random font-size without units -->
<span style='font-size: 2;'>test</span>

<script>
    // JavaScript to check for font-size without units
    var element = document.querySelector('span');

    if (element && element.style && typeof element.style === 'object') {
        // Access and inspect font-size property
        var fontSize = element.style.fontSize;

        if (fontSize && isNaN(parseFloat(fontSize))) {
            console.error('Style error: Font-size without units');
        }
    } else {
        console.error('Element or style property not found');
    }
</script>

</body>
</html>