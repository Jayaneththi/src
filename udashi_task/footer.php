<footer style="text-align: center;">
    <div class="row">
        <div class="col-sm-1">
            <img class="footerlogo" src="logo-4.png">
    </div>
    <div class="col-md-8" >
    <?php
    $filename = basename($_SERVER['PHP_SELF']);
    $lastModifiedTime = date("F d, Y, g:i a", filemtime($filename));
    echo "<p>$filename was last modified on: $lastModifiedTime</p>";
    ?>

    </div>
    </div>



        </footer> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>