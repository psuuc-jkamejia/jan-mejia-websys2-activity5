<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Computation</title>
    <style>
        .result-box {
            padding: 10px;
            border-radius: 5px;
            color: white;
            display: inline-block;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Jan Kenneth A. Mejia 3B BSIT</h1>
    <h3>Activity 5 - BOYS</h3>

    <!-- Ang resulta at desinyo para sa multiplacation -->
    <h2>Value 1: <span style="color: {{ $multTextColor }};">{{ $num1 }}</span></h2>
    <h2>Value 2: <span style="color: {{ $multTextColor }};">{{ $num2 }}</span></h2>
    <h2>Operator: Multiply</h2>

    <h2>Result (Displayed in {{ ucfirst($multBackgroundColor) }}):</h2>
    <div class="result-box" style="background-color: {{ $multBackgroundColor }};">
        {{ $multiplication }}
    </div>

    <br><br>

    <!-- Ang resulta at desinyo para sa addition -->
    <h2>Value 1: <span style="color: {{ $addTextColor }};">{{ $num3 }}</span></h2>
    <h2>Value 2: <span style="color: {{ $addTextColor }};">{{ $num4 }}</span></h2>
    <h2>Operator: Add</h2>

    <h2>Result (Displayed in {{ ucfirst($addBackgroundColor) }}):</h2>
    <div class="result-box" style="background-color: {{ $addBackgroundColor }};">
        {{ $addition }}
    </div>

</body>
</html>
