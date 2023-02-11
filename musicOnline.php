<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicOnline</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">

</head>




<header class="showcase">
        <div class="showcase-top">
            <div>
                <a href="./allMusicOnline.php" class="btn btn-danger btn-rounded">All Music</a>
                <a href="#" class="btn btn-danger btn-rounded">Premium</a>
            </div>
            <div><img class="logo" src="./img/logo.png" alt="Logo"></div>
            <div>
                <a href="#" class="btn btn-danger btn-rounded">Sign In</a>
                <a href="#" class="btn btn-danger btn-rounded">Log In</a>
            </div>     
        </div>


        <div class="showcase-content">
            <h1 class="display-2 mb-4">Your Music</h1>
            <form action="musicOnline-display.php" method="GET" name="music-collect">
            <label class="discover mb-4" for="musicOnline">Discover all your favorites artists with MusicOnline</label>
            <input class="inputSearch" type="text" name="musicQuery" id="musicQuery">
            <input class="btn btn-danger btn-rounded" type="submit" name="submit" id="submit" value="Search">
            </form>
        </div>
</header>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</header>

</body>

</html>