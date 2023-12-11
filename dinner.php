<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        /* CSS rule for images */
        .dinner-img {
            max-width: 300px; /* Adjust max-width as needed */
            height: 200px; /* Set a specific height */
            width: auto; /* Maintain aspect ratio */
        }
    </style>
    <script>
        function showBritishDinnerQuote() {
            alert("Keep calm and enjoy British Dinner.");
        }

        function showMexicanDinnerQuote() {
            alert("Mexican Dinner: A fiesta on your plate.");
        }
    </script>
</head>
<body>
    <h1>Dinner Options</h1>
    <div class="meal">
        <!-- Apply the new class to both images -->
        <img class="dinner-img" src="https://www.kimbersfarmshop.co.uk/blog-admin/wp-content/uploads/2021/10/shutterstock_53001679-scaled.jpg" alt="Dinner 1" onclick="showBritishDinnerQuote()">
        <p>British Dinner</p>
    </div>
    <div class="meal">
        <img class="dinner-img" src="https://images.immediate.co.uk/production/volatile/sites/30/2022/10/Pork-carnitas-b94893e.jpg?quality=90&resize=556,505" alt="Dinner 2" onclick="showMexicanDinnerQuote()">
        <p>Mexican Dinner</p>
    </div>
    <button onclick="window.location.href='index.php'">Home</button>
</body>
</html>
