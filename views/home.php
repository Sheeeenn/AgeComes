<!DOCTYPE html>
<html>
    <head>
        <title>Age Comes With Price</title>
        <link rel="stylesheet" type="text/css" href="other/header.css">
        <link rel="stylesheet" type="text/css" href="other/button.css">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const ws = new WebSocket('ws://localhost:8765');
                
                ws.onopen = function() {
                    console.log('Connected to WebSocket server');
                };
                
                ws.onmessage = async function(event) {
                    const data = JSON.parse(event.data);
                    if (data.barcode) {
                        console.log('Received barcode:', data.barcode);
                        
                        try {
                            const response = await fetch('/api/barcode', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                },
                                body: JSON.stringify({ barcode: data.barcode })
                            });
                            
                            const result = await response.json();
                            console.log('API response:', result);
                            
                            if (result.success && result.redirect) {
                                window.location.href = result.redirect;
                            }
                        } catch (error) {
                            console.error('Error:', error);
                        }
                    }
                };
                
                ws.onerror = function(error) {
                    console.error('WebSocket error:', error);
                };
                
                ws.onclose = function() {
                    console.log('Disconnected from WebSocket server');
                };
            });
        </script>
    </head>
    <body>
        <?php include("other/header.php")?>

        <p class="scan-text">Scan the barcode.</p>

        <div class="bar-div">
            <img class="bar-image" src="other/img/barcode.png">
        </div>

        <div class="dgrid">
            <a href="/register"><button><p>REGISTER</p></button></a>
        </div>
    </body>
</html>