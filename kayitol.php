<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUBilet'e Kayıt Ol</title>    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:  #333;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    
    <div>
    <form>
        <h2>BUBilet'e Üye Ol</h2>

        <label for="username">Adınız:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="username">Soyadınız:</label>
        <input type="text" id="surname" name="surname" required>

        <label for="username">Telefon Numaranız:</label>
        <input type="text" id="number" name="number" required>

        <label for="email">E-posta:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Şifre:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Kayıt Ol</button>
    </form>
    </div>

</body>
</html>