<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <div class="container_two">
        <?php
            $foods = array("Almond", "Oatmeal", "Broccoli", "Apple", "Avocados", "Chicken"); // List of foods
            $food = $foods[array_rand($foods)]; // Randomly select a food from the list

            switch ($food) {
                case "Almond":
                    $benefits = "Almond has magnesium, vitamin E, iron, calcium, and fiber.";
                    break;
                case "Oatmeal":
                    $benefits = "Oats contain complex carbohydrates, as well as water-soluble fiber.";
                    break;
                case "Broccoli":
                    $benefits = "Broccoli provides good amounts of fiber, calcium, potassium, folate, and phytonutrient.";
                    break;
                case "Apple":
                    $benefits = "Apples are an excellent source of antioxidants, which combat free radicals.";
                    break;
                case "Avocados":
                    $benefits = "Avocados provide healthful fats, as well as B vitamins, vitamin K, and vitamin E.";
                    break;
                case "Chicken":
                    $benefits = "Chicken is cost-effective meat that is an excellent source of protein.";
                    break;
                default:
                    $benefits = "No health benefits found for this food.";
                    break;
            }
            echo "<h1>Know Your Healthful Food!</h1>";
            echo "<h1>Random Food: $food</h1>";
            echo "<p>Benefits: $benefits</p>";
            ?>
        </div>
    </div>
</body>
</html>