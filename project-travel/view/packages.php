<?php
// requring files
require_once('../model/packagesModel.php');
require_once('../model/reviewModel.php'); 
$packages = get_all_package_data();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>WanderLuxe Tours - Packages</title>

    <link rel="stylesheet" href="../assets/css/packages.css">
</head>
<?php require "../view/nav_view.php" ?>
<body>
    <table border="1" width="100%">
        <tr>
            <td><img src="../assets/image/package/logo.jpg" alt="logo" width="60px" height="20px"></td>
            <td align="center"><h2>WanderLuxe Tours</h2></td>
        </tr>

        <tr>
            <td colspan="2">
                <br>
                <br>
                <table border="1">
                    <?php
                    foreach ($packages as $package) {
                        ?>
                        <tr>
                            <td><img width="120px" src="<?php echo $package['image_url']; ?>" alt=""></td>
                            <td><h2><a href="all_packages.php?id=<?php echo $package['id']; ?>"></a></h2></td>
                            <td><p>Destination Name: <strong><?php echo $package['destination_name']; ?></strong></p></td>
                            <td><p>Description: <strong><?php echo $package['description']; ?></strong></p></td>
                            <td><p>Price: <strong><?php echo $package['price']; ?></strong></p></td>
                            <td><a class="custom-button" href="billing_information.php?package_id=<?php echo $package['id']; ?>">Book Now</a></td>

                            <!-- Display Review Information -->
                            <td>
                                <h3>Reviews</h3>
                                <?php
                                
                                $reviews = command($package['id']);

                                foreach ($reviews as $review) {
                                    ?>
                                    <p><strong>Customer Name:</strong> <?php echo $review['reviewerName']; ?></p>
                                    <p><strong>Rating:</strong> <?php echo $review['rating']; ?></p>
                                    <p><strong>Packages Name:</strong> <?php echo $review['reviewTitle']; ?></p>
                                    <p><strong>Command:</strong> <?php echo $review['reviewContent']; ?></p>
                                    <hr>
                                    <?php
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <br>
                <br>
            </td>
        </tr>
        <tr>
            <td colspan="3">Copyright &copy; 2023 WanderLuxe Tours. All rights are reserved.</td>
        </tr>
    </table>
</body>
</html>
