<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage Contract</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fc7ea4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #facdda;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }
        .form-group {
            margin: 20px 0;
            text-align: left;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #ff477e;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #ff477e;
        }
        .signature-box {
            margin-top: 10px;
        }
        .result {
            background: #fc7ea4;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-top: 20px;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Marriage Contract</h1>
        <p>
            We, the undersigned, hereby declare our commitment to each other as partners in marriage.  
            We promise to nurture our love, respect, and understanding for the rest of our lives.
        </p>
        <form action="" method="POST">
            <div class="form-group">
                <label for="partner1">Your Name:</label>
                <input type="text" name="partner1" id="partner1" placeholder="kadari alaa" readonly  required>
            </div>
            <div class="form-group">
                <label for="partner2">your Name:</label>
                <input type="text" name="partner2" id="partner2" placeholder="fatma" readonly required>
            </div>
            <div class="form-group signature-box">
                <label for="signature1">alaa's Signature:</label>
                <input type="text" name="signature1" id="signature1" placeholder="agree"  readonly required>
            </div>
            <div class="form-group signature-box">
                <label for="signature2">fatma's Signature:</label>
                <input type="text" name="signature2" id="signature2" placeholder="Type your  signature" required>
            </div>
            <button type="submit">confirme Contract</button>
        </form>

        <?php
        $partner1 = "alaa";
        $signature1= "agree";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //$partner1 = htmlspecialchars($_POST['partner1']);
            //$partner2 = htmlspecialchars($_POST['partner2']);
            $partner2 = "fatma";
            //$signature1 = htmlspecialchars($_POST['signature1']);
            $signature2 = htmlspecialchars($_POST['signature2']);

            echo "<div class='result'>";
            echo "<h2>Marriage Contract Signed</h2>";
            echo "<p><strong>$partner1</strong> signed as: <em>$signature1</em></p>";
            echo "<p><strong>$partner2</strong> signed as: <em>$signature2</em></p>";
            echo "<p>Thank you! your mine now hehehe <3</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
