<!DOCTYPE html>
<?php include 'Navbar.php';?>
<html>
    <head>
        <meta charset="utf-8">
        <title>PhotoBooth | Wedding</title>      
         <link rel="stylesheet" href="assets/Categories.css">
    </head>
    <body>
        <h1>Wedding</h1>
        <table>
            <?php
                include "connection.php";
                $sql = "SELECT * FROM wedding ORDER BY id DESC";
                $res = mysqli_query($con,  $sql);

                while($images = mysqli_fetch_assoc($res))
                {
                    ?>
                        <tr>
                            <td>
                            <div id="myModal" class="modal">
                                <span class="close">&times;</span>
                                <img class="modal-content" id="img01">
                                <div id="caption"></div>
                            </div>
                                <img id="myImg" src="uploads/<?=$images['image_url']?>"><br>
                                <a href="uploads/<?=$images['image_url']?>" download='image'>Download</a>
                            </td>
                        </tr>	
                    <?php
                }
            ?>
        </table>
    </body>
    <script>
        var isNS = (navigator.appName == "Netscape") ? 1 : 0;
        if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
        function mischandler(){
        return false;
        }
        function mousehandler(e){
        var myevent = (isNS) ? e : event;
        var eventbutton = (isNS) ? myevent.which : myevent.button;
        if((eventbutton==2)||(eventbutton==3)) return false;
        }
        document.oncontextmenu = mischandler;
        document.onmousedown = mousehandler;
        document.onmouseup = mousehandler;

        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
        modal.style.display = "none";
        }
    </script>
</html>