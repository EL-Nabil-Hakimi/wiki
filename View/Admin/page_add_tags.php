<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Form</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body {
            background-color: #f0f0f0;
            color: #333;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #007bff;
            padding: 10px;
            text-align: center;
            color: #fff;
        }

        main {
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <header>
        <h1>NB_WIKI</h1>
    </header>

    <main>
        <form action="?route=add_tage" method="post">
            <label for="firstName">Product Name:</label>
            <input type="text" id="firstName" name="name" required> 

            <button type="submit">Submit</button>
            <a href="?route=page_tage">Back</a>
        </form>
    </main>

</body>
</html>
