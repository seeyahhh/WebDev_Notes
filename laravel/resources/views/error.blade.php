<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Full Screen Image</title>
  <style>

    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #ffffffff; 
    }
    img {
        width: 90%;
        height: auto;
        max-height: 90%;
        object-fit: contain;
    }

    .back-button {
        position: absolute;
        top: 30px;
        left: 40px;
        background-color: #ffffffff;
        color: #8a88edff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 10px;
        border: 2px solid #8a88edff;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .back-button:hover {
        background-color: #8a88edff;
        color:#ffffffff;
    }
  </style>
</head>
<body>
    <a href="{{route('userPage')}}" class="back-button">← Back to homepage</a>
    <img src="/images/error404.jpg" alt="Error 404 | Page not found">
</body>
</html>