<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responsive Image and Text</title>
  <style>
    .container {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }

    .image {
      width: 50%;
    }

    .text {
      width: 50%;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .image {
        width: 100%;
      }

      .text {
        width: 100%;
      }
    }

    body {
  font-family: sans-serif;
  margin: 0;
}

.container {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}

.image {
  width: 50%;
}

.text {
  width: 50%;
}

@media (max-width: 768px) {
  .container {
    flex-direction: column;
  }

  .image {
    width: 100%;
  }

  .text {
    width: 100%;
  }
}
  </style>
</head>
<body>
  <div class="container">
    <div class="image">
      <img src="images/Avtar-1.jpeg" alt="Image">
    </div>
    <div class="text">
      <h1>This is a responsive image and text</h1>
      <p>This image and text will be responsive to different screen sizes.</p>
    </div>
  </div>
</body>
</html>