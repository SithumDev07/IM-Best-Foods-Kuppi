<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imbestfoods";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {

    $location = "Location: ./404.php?error=" . $conn->connect_error . "&db=" . $dbname;
    $location = str_replace(PHP_EOL, '', $location);
    header($location);
    exit();
};

if (isset($_POST['itemid'])) {

    $sql = "SELECT food_nutrition.*, nutrition.* FROM food_nutrition JOIN nutrition ON food_nutrition.nutrition_id = nutrition.id WHERE food_nutrition.food_id=" . $_POST['itemid'] . ";";
    $resultsNutritions = mysqli_query($conn, $sql);
    $resultCheckNutritions = mysqli_num_rows($resultsNutritions);
    $nutritions = array();

    if ($resultCheckNutritions > 0) {
        while ($rowNutritions = mysqli_fetch_assoc($resultsNutritions)) {
            $nutritions[$rowNutritions['name']] = $rowNutritions['amount'] . $rowNutritions['unit'];
        }
    }

    //* Getting Ingredients
    $sql = "SELECT food_ingredient.*, ingredient.* FROM food_ingredient JOIN ingredient ON food_ingredient.ingredient_id = ingredient.id WHERE food_ingredient.food_id=" . $_POST['itemid'] . ";";
    $resultsIngredients = mysqli_query($conn, $sql);
    $resultCheckIngredients = mysqli_num_rows($resultsIngredients);
    $ingredients = array();

    if ($resultCheckIngredients > 0) {
        while ($rowIngredients = mysqli_fetch_assoc($resultsIngredients)) {
            array_push($ingredients, $rowIngredients['name']);
        }
    }

    $sql = "SELECT * FROM food WHERE id=" . $_POST['itemid'] . ";";
    $resultsSelectedFood = mysqli_query($conn, $sql);
    $resultCheckSelectedFood = mysqli_num_rows($resultsSelectedFood);

    if ($resultCheckSelectedFood > 0) {
        while ($rowSelectedFood = mysqli_fetch_assoc($resultsSelectedFood)) {
?>
            <button class="product-page-back">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5 19L8.5 12L15.5 5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <div class="selected-food-image">
                <img src="./images/<?php echo $rowSelectedFood['image']; ?>" alt="Potgrasso Food Image">
            </div>
            <div class="food-content">
                <h1><?php echo $rowSelectedFood['name']; ?></h1>
                <p class="food-ingredients">with <?php
                                                    foreach ($ingredients as $ingredient) {

                                                        echo $ingredient . " ";
                                                    }
                                                    ?></p>
                <div class="food-description">
                    <?php echo $rowSelectedFood['description']; ?>
                </div>
                <div class="kal-counter">
                    <?php
                    foreach ($nutritions as $nutrition => $value) {
                    ?>
                        <div class="kal">
                            <p><?php echo $nutrition; ?></p>
                            <h4 class="nutrion-counter-values"><?php echo $value; ?></h4>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <button class="add-to-cart">
                    <span>Rs.<?php echo $rowSelectedFood['price']; ?></span>
                    Buy Now
                </button>
            </div>

<?php
        }
    }
}
