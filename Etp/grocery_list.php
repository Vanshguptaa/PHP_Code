<?php
session_start();

if (!isset($_SESSION['grocery_list'])) {
    $_SESSION['grocery_list'] = ["Milk", "Eggs", "Bread", "Butter"];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_item = htmlspecialchars(trim($_POST['new_item']));
    if (!empty($new_item)) {
        if (!in_array($new_item, $_SESSION['grocery_list'])) {
            $_SESSION['grocery_list'][] = $new_item;
            $add_message = "Item added successfully!";
        } else {
            $add_message = "Item already exists in the list.";
        }
    } else {
        $add_message = "Item cannot be empty.";
    }
}

$search_results = [];
if (isset($_GET['search_item'])) {
    $search_item = htmlspecialchars(trim($_GET['search_item']));
    if (!empty($search_item)) {
        $search_results = array_filter($_SESSION['grocery_list'], function ($item) use ($search_item) {
            return stripos($item, $search_item) !== false;
        });
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery List</title>
</head>
<body>
    <h1>Grocery List Management</h1>

    <h2>Search for an Item</h2>
    <form method="GET" action="">
        <label for="search_item">Item Name:</label>
        <input type="text" id="search_item" name="search_item" value="<?= isset($search_item) ? htmlspecialchars($search_item) : '' ?>">
        <button type="submit">Search</button>
    </form>

    <?php if (isset($search_item) && !empty($search_item)): ?>
        <h3>Search Results:</h3>
        <?php if (!empty($search_results)): ?>
            <ul>
                <?php foreach ($search_results as $item): ?>
                    <li><?= htmlspecialchars($item) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No items found matching "<?= htmlspecialchars($search_item) ?>"</p>
        <?php endif; ?>
    <?php endif; ?>

    <h2>Add a New Item</h2>
    <form method="POST" action="">
        <label for="new_item">Item Name:</label>
        <input type="text" id="new_item" name="new_item">
        <button type="submit">Add Item</button>
    </form>

    <?php if (isset($add_message)): ?>
        <p><?= htmlspecialchars($add_message) ?></p>
    <?php endif; ?>

    <h2>Complete Grocery List</h2>
    <ul>
        <?php foreach ($_SESSION['grocery_list'] as $item): ?>
            <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
