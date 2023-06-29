<html>
<body>
    <h1>Frontend Rebuild</h1>
    
            <?php  
            $json = file_get_contents('http://backend');
            $backend = json_decode($json)->backend;

            foreach($backends as $backend) {
                echo "<li>$backend</li>";
            }
            
            ?>
    </ul>
</body>

</html>
