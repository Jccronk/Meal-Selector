<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script>
        function showQuote(meal) {
            var quote;
            if (meal === 'british') {
                quote = "A hearty start to the day with eggs, sausages, and beans.";
            } else if (meal === 'mexican') {
                quote = "A spicy twist to morning with huevos rancheros.";
            }
            alert(quote);
        }
    </script>
</head>
<body>
    <h1>Breakfast Options</h1>
    <div class="meal">
        <img src="https://unpeeledjournal.com/wp-content/uploads/2023/04/52828002762_99f3b99b45_b.jpg" alt="Breakfast 1" onclick="showQuote('british')" style="height: 150px; width: auto;">
        <p>British Breakfast</p>
    </div>
    <div class="meal">
        <img src="https://www.mylatinatable.com/wp-content/uploads/2016/04/huevos-rancheros-8-1024x765-1.jpg" alt="Breakfast 2" onclick="showQuote('mexican')" style="height: 150px; width: auto;">
        <p>Mexican Breakfast</p>
    </div>
    <button onclick="window.location.href='index.php'">Home</button>
</body>
</html>
