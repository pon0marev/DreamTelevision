<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamTown-TV</title>
    <link rel="stylesheet" href="main.css">
    <script src="script.js"></script>
</head>
<body>
    <section>
        <video class="video"id="slider" autoplay muted loop> 
            <source src="video/8.avi" type="video/mp4">
        </video>
        <ul class="navigation">
           <li class="buttonsimages" onclick="videoUrl('video/1.mp4')">1</li>
           <li class="buttonsimages" onclick="videoUrl('video/2.mp4')">2</li>
           <li class="buttonsimages" onclick="videoUrl('video/3.mp4')">3</li>
           <li class="buttonsimages" onclick="videoUrl('video/4.mp4')">4</li>
           <li class="buttonsimages" onclick="videoUrl('video/5.mp4')">5</li>
           <li class="buttonsimages" onclick="videoUrl('video/6.mkv')">6</li>
           <li class="buttonsimages" onclick="videoUrl('video/7.mp4')">7</li>
           <li class="buttonsimages" onclick="videoUrl('video/8.avi')">8</li>
           <li class="buttonsimages" onclick="videoUrl('video/9.mp4')">9</li>
           <li class="buttonsimages" onclick="videoUrl('video/10.mp4')">10</li>
           <li class="buttonsimages" onclick="videoUrl('video/11.mp4')">11</li>
        </ul>
    </section>  
    <script type="text/javascript">
        function videoUrl (getVideo) {
            document.getElementById("slider").src = getVideo;
        }
    </script>
</body>
</html>
