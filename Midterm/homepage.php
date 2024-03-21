<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<head>
    <title>Zippy's Inventory</title>
</head>
<body>
    <h1>Zippy's Vehicle Inventory</h1>

    <?php
    // vehicle data
    $vehicles = [
        ['make' => 'Chevy', 'model' => 'Suburban', 'year' => 2009, 'price' => 18999, 'type' => 'SUV', 'class' => 'Utility'],
        ['make' => 'Chevy', 'model' => 'Tahoe', 'year' => 2015, 'price' => 26999, 'type' => 'SUV', 'class' => 'Utility'],
        ['make' => 'Ford', 'model' => 'F150', 'year' => 2011, 'price' => 22999, 'type' => 'Truck', 'class' => 'Utility'],
        ['make' => 'Ford', 'model' => 'Fusion', 'year' => 2015, 'price' => 19999, 'type' => 'Sedan', 'class' => 'Economy'],
        ['make' => 'Cadillac', 'model' => 'Escalade', 'year' => 2012, 'price' => 24999, 'type' => 'SUV', 'class' => 'Luxury'],
        ['make' => 'Cadillac', 'model' => 'XTS', 'year' => 2014, 'price' => 19999, 'type' => 'Sedan', 'class' => 'Luxury'],
        ['make' => 'Nissan', 'model' => 'Rogue', 'year' => 2018, 'price' => 34999, 'type' => 'Economy', 'class' => 'Coupe'],
        ['make' => 'Hyundai', 'model' => 'Sonata', 'year' => 2016, 'price' => 29999, 'type' => 'Sedan', 'class' => 'Economy'],
        ['make' => 'Dodge', 'model' => 'Challenger', 'year' => 2020, 'price' => 49999, 'type' => 'Sports', 'class' => 'Coupe'],
        ['make' => 'Infiniti', 'model' => 'QX80', 'year' => 2017, 'price' => 54999, 'type' => 'SUV', 'class' => 'Luxury'],
    ];

    // Sort the vehicles by price
    usort($vehicles, function ($a, $b) {
        return $b['price'] - $a['price'];
    });

    // Display the vehicles
    foreach ($vehicles as $vehicle) {
        echo '<p>';
        echo 'Make: ' . $vehicle['make'] . ', Model: ' . $vehicle['model'] . ', Year: ' . $vehicle['year'] . ', Price: $' . number_format($vehicle['price']);
        echo '</p>';
    }
    ?>

    <!--Dropdown menus for sorting and filtering -->
    <form method="get">
        <label for="sort">Sort by:</label>
        <select id="sort" name="sort">
            <option value="price">Price</option>
            <option value="year">Year</option>
        </select>

        <!-- Make Menu -->
        <label for="make">Make:</label>
        <select id="make" name="make">
            <option value="">All Makes</option>
            <option value="Chevy">Chevy</option>
            <option value="Ford">Ford</option>
            <option value="Cadillac">Cadillac</option>
            <option value="Nissan">Nissan</option>
            <option value="Hyundai">Hyundai</option>
            <option value="Dodge">Dodge</option>
            <option value="Infiniti">Infiniti</option>
            <option value="Buick">Buick</option>
        </select>

        <!-- Type Menu -->
        <label for="type">Type:</label>
        <select id="type" name="type">
            <option value="">All Types</option>
            <option value="SUV">SUV</option>
            <option value="Truck">Truck</option>
            <option value="Sedan">Sedan</option>
            <option value="Coupe">Coupe</option>
        </select>

        <!-- Class Menu -->
        <label for="class">Class:</label>
        <select id="class" name="class">
            <option value="">All Classes</option>
            <option value="Utility">Utility</option>
            <option value="Economy">Economy</option>
            <option value="Luxury">Luxury</option>
            <option value="Sports">Sports</option>
        </select>

        <input type="submit" value="Apply Filters">
    </form>
</body>
</html>