<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Search Page</title>  
    <link rel="stylesheet" href="styles.css">  
</head>  
<body>  
    <div class="container">  
        <div class="search-bar">  
            <input type="text" id="searchInput" placeholder="Search..." onkeyup="filterResults()">  
        </div>  
        <div class="categories">
            <button onclick="setCategory('')">All</button>
            <button onclick="setCategory('email')">Email</button>
            <button onclick="setCategory('facebook')">Facebook</button>
            <button onclick="setCategory('instagram')">Instagram</button><br><br>
            <button onclick="setCategory('instagram')">Instagram</button>
        </div>
        <div class="results" id="resultsContainer">  
            <?php  
            // Sample data for demonstration  
            $items = [
                ["category" => "email", "content" => "<div class='email-info'>
                    <div><strong>Email:</strong> fitrinoor632@gmail.com</div>
                    <div><strong>Password:</strong> FitriNoor077</div>
                </div>"],

                ["category" => "email", "content" => "<div class='email-info'>
                    <div><strong>Email:</strong> example@gmail.com</div>
                    <div><strong>Password:</strong> Example123</div>
                </div>"],

                ["category" => "facebook", "content" => "<div class='email-info'>
                    <div><strong>Facebook:</strong> example.fb@example.com</div>
                    <div><strong>Password:</strong> FbPass123</div>
                </div>"],

                ["category" => "instagram", "content" => "<div class='email-info'>
                    <div><strong>Instagram:</strong> example.fb@example.com</div>
                    <div><strong>Password:</strong> FbPass123</div>
                </div>"],

                
            ];
                
            foreach ($items as $item) {  
                echo "<div class='result-item' data-category='{$item['category']}'>{$item['content']}</div>";  
            }  
            ?>  
        </div>  
    </div>  
    <script src="script.js"></script>  
</body>  
</html>
