<html>
<body>
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

        // Convert decimal hours to minutes and seconds
        $total_seconds = $hours_of_usage * 3600; // 1 hour = 3600 seconds
        $minutes = floor($total_seconds / 60);
        $seconds = $total_seconds % 60;

        echo "You can use the fan for $minutes minutes and $seconds seconds, the tubelight for $minutes minutes and $seconds seconds, and the TV for $minutes minutes and $seconds seconds within your maximum limit of $m_limit watts.";
    ?>
</body>
</html>
