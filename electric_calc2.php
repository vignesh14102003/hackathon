<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electric Consumption Result</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            padding: 20px;
            text-align: center;
        }

        .result {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
            margin-bottom: 20px;
        }

        strong {
            color: #4caf50;
        }
    </style>
</head>
<body>
    <h2>Electric Consumption Result</h2>

    <div class="result">
        <?php
             $n_fans = $_POST['n_fans'];
             $n_tlights = $_POST['n_tlights'];
             $n_tvs = $_POST['n_tvs'];
             $tv_type = $_POST['tv_type'];
             $m_limit = $_POST['m_limit'];
     
             // Define wattage for each device
             $fan_wattage = 75;
             $tlight_wattage = 55;
     
             // Calculate the total power consumption for each device
             $total_fan_power = $n_fans * $fan_wattage;
             $total_tlight_power = $n_tlights * $tlight_wattage;
             $total_tv_power = $n_tvs * $tv_type;
     
             // Calculate the total power consumption for all devices
             $total_power_consumption = $total_fan_power + $total_tlight_power + $total_tv_power;
     
             // Calculate the number of hours the devices can be used within the user's limit
             $hours_of_usage = $m_limit / $total_power_consumption;
     
             // Convert decimal hours to hours, minutes, and seconds
             $hours = floor($hours_of_usage);
             $minutes = floor(($hours_of_usage - $hours) * 60);
             $seconds = floor((($hours_of_usage - $hours) * 60 - $minutes) * 60);
     
            echo "<p>You can use the fan for <strong>$hours hours, $minutes minutes, and $seconds seconds</strong>, the tubelight for <strong>$hours hours, $minutes minutes, and $seconds seconds</strong>, and the TV for <strong>$hours hours, $minutes minutes, and $seconds seconds</strong> within your maximum limit of <strong>$m_limit watts</strong>.</p>";
        ?>
    </div>
</body>
</html>
