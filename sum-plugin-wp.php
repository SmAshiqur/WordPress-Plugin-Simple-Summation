<?php
/**
 * Plugin Name: Sum Plugin
 * Description: A simple plugin to calculate the sum of two numbers
 * Version: 1.0.0
 * Author: Masjid Solutions
 */
function sum_plugin_menu(){
    add_menu_page(
        'Sum Plugin',
        'Sum Plugin',
        'manage_options',
        'sum-plugin',
        'sum_plugin_page'
    );
}
add_action('admin_menu', 'sum_plugin_menu');

function sum_plugin_page() {
    ?>
    <div class="wrap">
        <h1>Sum Plugin</h1>
        <form method="post" action="">
            <label for="num1">Enter Number 1:</label>
            <input type="number" name="num1" required>
            <br>
            <label for="num2">Enter Number 2:</label>
            <input type="number" name="num2" required>
            <br>
            <input type="submit" name="calculate_sum" value="Calculate Sum">
        </form>

        <?php
        // Handle form submission and display result
        if (isset($_POST['calculate_sum'])) {
            $num1 = isset($_POST['num1']) ? intval($_POST['num1']) : 0;
            $num2 = isset($_POST['num2']) ? intval($_POST['num2']) : 0;
            $sum = $num1 + $num2;
            echo "<p>Sum: $sum</p>";
        }
        ?>
    </div>
    <?php
}


?>