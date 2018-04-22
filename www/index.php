<!DOCTYPE html>
<html>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bgimg {
    background-image: url('images/nigerdelta.jpg');
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Josefin Slab", Courier, monospace;
    font-size: 25px;
}

#counterfont{
    font-family: "Gugi";
    font-size: 30px
}


.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

hr {
    margin: auto;
    width: 40%;
}
</style>
<body>

<div class="bgimg">
  
  <div class="middle">
    <h1>HNG Internship 4</h1>
    <hr>
    <p id="counterfont">
    <?php
date_default_timezone_set("Africa/Lagos");
echo date("l ") . date("h:i:sa");
?>
    </p>
  </div>
</div>

</body>
</html>
