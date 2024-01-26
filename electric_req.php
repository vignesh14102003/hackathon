<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Consumption Calculator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            padding: 20px;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Power Consumption Calculator</h2>
    
    <form action="electric_calc2.php" method="POST">
        <label for="n_fans">Enter the no. of fans:</label>
        <input type="text" name="n_fans" id="n_fans">

        <label for="n_tlights">Enter the no. of tubelights:</label>
        <input type="text" name="n_tlights" id="n_tlights">

        <label for="n_tvs">Enter the no. of television:</label>
        <input type="text" name="n_tvs" id="n_tvs">

        <label>Select the type of television:</label>
        <input type="radio" name="tv_type" value="100" id="lcd"> <label for="lcd">LCD</label>
        <input type="radio" name="tv_type" value="125" id="oled"> <label for="oled">OLED</label>
        <input type="radio" name="tv_type" value="90" id="crt"> <label for="crt">CRT</label>
        <input type="radio" name="tv_type" value="200" id="plasma"> <label for="plasma">Plasma</label>

        <label for="m_limit">Maximum limit of current:</label>
        <input type="text" name="m_limit" id="m_limit">

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
