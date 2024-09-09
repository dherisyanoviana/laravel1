<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form send message</title>
</head>
    <body>
        <style>
            .title {
                color: #eb9dcd;
            }

            .button {
                color: #eb9dcd
            }

            button:hover {
                background-color: #eb9dcd
            }
        </style>

<!-- Form untuk kirim data message -->
    <h1 class="title">Kirim Pesan</h1>
        <form action="/home" method="POST">
            @csrf
                <div class="title">
                    <label for="message">Message:</label>
                    <input type="text" name="message" id="message" required>
                    <button class="button" type="submit">Send</button>
                </div>
        </form>
    </body>
</html>
