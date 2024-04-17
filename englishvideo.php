<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #333333;
      margin-top: 50px;
    }

    .video-list {
      list-style: none;
      padding: 0;
      margin-top: 30px;
    }

    .video-list-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      border: 2px solid black;
      padding: 20px;
      background-color: #FFF0F5;
    }

    .video-list-item:nth-child(even) {
      background-color: #F5F5F5;
    }

    .video-list-item > div {
      flex: 1;
    }

    .video-list-item h3 {
      margin-top: 0;
    }

    .video-list-item video {
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>English language video list</h1>

    <ul class="video-list">
      <li class="video-list-item">
        <div>
          <h3>1</h3>
        </div>
        <div>
          <video controls>
            <source src="video/FE.mp4" type="video/mp4">
          </video>
        </div>
      </li>
      <li class="video-list-item">
        <div>
          <h3>2</h3>
        </div>
        <div>
          <video controls>
            <source src="video/FE2.mp4" type="video/mp4">
          </video>
        </div>
      </li>
      <li class="video-list-item">
        <div>
          <h3>3</h3>
        </div>
        <div>
          <video controls>
            <source src="video/FE3.mp4" type="video/mp4">
          </video>
        </div>
      </li>
    </ul>
  </div>
</body>
</html>
