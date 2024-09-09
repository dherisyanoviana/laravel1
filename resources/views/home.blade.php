<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        body {
            background:#fdb8cf;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 50;
        }

        .container {
            background-color: #f7a5c1;
            box-shadow: 0 4px 8px #ee457d;
            padding: 60px;
            border-radius: 20px;
            width: 80%;
            max-width: 600px;
        }

        h1 {
            font-size: 2rem;
            color: #000000;
            text-shadow: 0 4px 6px #ee457d;
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .description {
            font-size: 1rem;
            color: #000000;
            text-shadow: 0 4px 6px #ee457d;
            text-align: center;
            margin-bottom: 30px;
        }

        .message {
            background-color: #fc8fb3;
            box-shadow: 0 4px 6px #ee457d;
            color: #ff0000;
            text-shadow: 0 4px 6px #ff3636;
            text-align: center;
            padding: 10px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .box {
            background-color: #fc8fb3;
            box-shadow: 0 4px 6px #ee457d;
            color: #ff0000;
            text-shadow: 0 4px 6px #ff3636;
            text-align: center;
            padding: 20px 40px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .box h2 {
            font-size: 1.5rem;
            color: #000000;
            text-shadow: 0 4px 6px #ee457d;
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .box p {
            font-size: 1rem;
            color: #000000;
            text-shadow: 0 4px 6px #ee457d;
            text-align: center;
            margin-bottom: 30px;
        }

        button {
            background-color: #f7a5c1;
            color: #000000;
            text-align: center;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ee457d;
        }

        footer  {
            font-size: 0.9rem;
            color: #ff0000;
            text-shadow: 0 4px 6px #ff3636;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>WELCOME IN UR HOME!</h1>
        <p class="description">This website is for finding information.</p>

         <!-- Menampilkan message -->
         <div class="message">
            @if(isset($message))
                <p>Message: {{ $message }}</p>
            @else
                <p>No message sent.</p>
            @endif
        </div>

        <div class="box">
            <h2>HI FRIENDS!</h2>
            <p>DO YOU WANT TO JOIN?</p>
            <button>JOINED</button>
        </div>

        <footer>
            <p>&copy; 2024 Your Website. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
