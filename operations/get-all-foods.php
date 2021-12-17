<?php
$sql = "SELECT * FROM food;";
$results = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($results);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
?>
        <div class="food-card" data-id=<?php echo $row['id']; ?>>
            <img src="./images/<?php echo $row['image']; ?>" alt="Food Items" />
            <h3><?php echo $row['name']; ?></h3>
            <p>With Vegetables</p>
            <p class="price">Rs.<?php echo $row['price']; ?>.00</p>
        </div>
<?php
    }
}
