<?php
include_once 'Admin/db.php';

// Get the product ID from the URL
$product_id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if ($product_id > 0) {
    // Fetch product details from the database
    $sql = "SELECT * FROM products WHERE id = ? AND status = 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Handle image
        $images = json_decode($row['image_path'] ?? '[]', true);
        $first_image = $images[0] ?? '';
        $product_image = 'assets/images/product/default-product.png'; // default image

        if (!empty($first_image)) {
            $first_image_path = 'Admin/uploads/products/' . basename($first_image);
            if (file_exists($first_image_path)) {
                $product_image = $first_image_path;
            }
        }

        // Status, price, and sanitization
        $availability = ($row['quantity'] > 0) ? 'In Stock' : 'Out of Stock';
        $formatted_price = '₹' . number_format($row['price'], 2);
        $old_price = '₹' . number_format($row['price'] * 1.2, 2);
        $product_name = htmlspecialchars($row['product_name']);
        $product_description = nl2br(htmlspecialchars($row['description']));
    } else {
        echo "Product not found.";
        exit;
    }
} else {
    echo "Invalid product ID.";
    exit;
}
?>

<!DOCTYPE html>
<html>

<?php include 'head.php'; ?>

<body>

    <div style="display: flex; justify-content: center; padding: 20px;">
        <div style="width: 400px; border: 10px solid #000; margin-left: 30px; padding: 1.5rem; 
                background: white; box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 8px;">
            <!-- Product Image -->
            <div style="margin-bottom: 1rem; overflow: hidden; text-align: center;">
                <img src="<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>"
                    style="max-width: 100%; height: auto; max-height: 300px; object-fit: contain;">
            </div>

            <!-- Product Name -->
            <h2 style="font-size: 1.5rem; margin-bottom: 1rem; font-weight: 600;"><?php echo $product_name; ?></h2>

            <!-- Product Description -->
            <p style="color: #6c757d; margin-bottom: 1rem; line-height: 1.5;"><?php echo $product_description; ?></p>

            <!-- Price -->
            <div style="margin-bottom: 1rem;">
                <span
                    style="font-size: 1.25rem; color: #0d6efd; font-weight: 700;"><?php echo $formatted_price; ?></span>
                <span
                    style="color: #6c757d; text-decoration: line-through; margin-left: 0.5rem;"><?php echo $old_price; ?></span>
            </div>

            <!-- Status -->
            <p style="margin-bottom: 1.5rem;">
                <span style="display: inline-block; padding: 0.35em 0.65em; font-size: 0.75em; font-weight: 700;
                     line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline;
                     border-radius: 0.25rem; background-color: <?php echo ($availability === 'In Stock') ? '#198754' : '#dc3545'; ?>;
                     color: white;">
                    <?php echo $availability; ?>
                </span>
            </p>

            <!-- Add to Cart Button -->
            <a href="order.php" style="display: block; width: 100%; padding: 0.5rem 1rem; margin-bottom: 50px;
                                  background-color: #0d6efd; color: white; text-align: center; text-decoration: none;
                                  border: none; border-radius: 0.25rem; font-weight: 400; line-height: 1.5;
                                  transition: all 0.15s ease-in-out;">
                <i class="fas fa-shopping-cart" style="margin-right: 0.5rem;"></i>Add to cart
            </a>
        </div>
    </div>

</body>

</html>