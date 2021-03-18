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

<div class="header">
AmTomato</div>
    <section>
    <?php
     $data = array();
     $dir = 'video';
     $files = scandir($dir, 0);
     
     for($i = 2; $i < count($files); $i++)
     $filesCount = $i -1;
    //  print $filesCount;
    //  print $i;
    ?>
        <video class="video"id="slider" autoplay muted loop> 
            <source src="video/{{ $files[2] }}" type="video/mp4">
        </video>

        <ul class="navigation">
    <?php
    //  print $filesCount;
     $element = '<li class="buttonsimages" onclick="videoUrl("video/" + "{{ $files[0] }}")">1</li>';
     $div = 'bla';
     for ($i = 0; $i < $filesCount; $i++)
         echo $element + $div;
        //  echo $i;

    ?>
        </ul>


        <!-- <ul class="navigation"> 
           <li class="buttonsimages" onclick="videoUrl('video/' + '{{ $files[2] }}')">1</li>
           <li class="buttonsimages" onclick="videoUrl('video/' + '{{ $files[3] }}')">2</li>
           <li class="buttonsimages" onclick="videoUrl('video/' + '{{ $files[4] }}')">3</li>
           <li class="buttonsimages" onclick="videoUrl('video/' + '{{ $files[5] }}')">4</li>
           <li class="buttonsimages" onclick="videoUrl('video/' + '{{ $files[6] }}')">5</li>
           <li class="buttonsimages" onclick="videoUrl('video/' + '{{ $files[7] }}')">6</li>
           <li class="buttonsimages" onclick="videoUrl('video/' + '{{ $files[8] }}')">7</li>
           <li class="buttonsimages" onclick="videoUrl('video/' + '{{ $files[9] }}')">8</li>
           <li class="buttonsimages" onclick="videoUrl('video/' + '{{ $files[10] }}')">9</li>
           <li class="buttonsimages" onclick="videoUrl('video/' + '{{ $files[11] }}')">10</li>
           <li class="buttonsimages" onclick="videoUrl('video/' + '{{ $files[12] }}')">11</li>
        </ul> -->
    </section>  
    <?php
    //  $data = array();
    //  $dir = 'video';
    //  $files = scandir($dir, 0);
    //  $filesCount = $i -2;
    //     for($i = 2; $i < count($files); $i++)
    //     print $files[$i]."<br>";
    //     print $filesCount;
    ?>
    <script type="text/javascript">
        function videoUrl (getVideo) {
            document.getElementById("slider").src = getVideo;
        }
    </script>
</body>
</html>
