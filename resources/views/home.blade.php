<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Babe</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background:#f7a5c1;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background-color: #f7a5c1;
            padding: 60px;
            border-radius: 20px;
            box-shadow: 0 4px 8px #ee457d;
            width: 80%;
            max-width: 600px;
        }

        h1 {
            font-size: 2rem;
            color: #000000;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .description {
            font-size: 1rem;
            color: #000000;
            margin-bottom: 30px;
        }

        .box {
            background-color: #fc8fb3;
            color: #000000;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .box h2 {
            font-size: 1.5rem;
            color: #000000;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .box p {
            font-size: 1rem;
            color: #000000;
            margin-bottom: 20px;
        }

        button {
            background-color:  #f7a5c1;
            color: #000000;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #fc8fb3;
        }

        footer  {
            font-size: 0.9rem;
            color: #000000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>WELCOME IN UR HOME!</h1>
        <p class="description">This website is for finding information.</p>
         <!-- Menampilkan pesan -->
                        @if(isset($message))
                            <p class="box">Message: {{ $message }}</p>
                        @else
                            <p class="box">Tidak ada pesan yang dikirim.</p>
                        @endif

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
