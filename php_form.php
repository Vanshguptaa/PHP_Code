<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label{
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], textarea{
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        button{
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover{
            background-color: #444;
        }
        figcaption{
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form action="info.php" method="POST">
<figcaption>Medicine Symposium Registration Form</figcaption>
<label for="name">Full Name</label>
<input type="text" name="name" id="name" required><br>
<label for="institution">Institution</label>
<input type="text" name="institution" id="institution" required><br>
<label for="email">Email</label>
<input type="email" name="email" id="email" required><br>
<label for="come">Name of Organizers</label>
<textarea name="comme" id=""></textarea><br>
<button type="submit">Submit</button>





    </form>

  
</body>
</html>