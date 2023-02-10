<!DOCTYPE html> 

<html>
    <meta lang="en-US">
    <meta name="viewport" content="webpage">
    <meta charset="UTF-8">
    <head>
        <!-- Bootstrap -->
        <link href="bootstrap-5.2.3-dist/css/bootstrap.min.css" media="screen" rel="stylesheet">
        <link href="bootstrap-5.2.3-dist/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap-5.2.3-dist/css/bootstrap-responsive.css" rel="stylesheet">
        <script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>

        <!-- jQuery -->
        <script src="jquery-3.6.1/jquery-3.6.1.min.js"></script>

        <!-- CSS -->
        <link href="navbar-setting.css" rel="stylesheet" type="text/css">

        <!-- Vue -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <!-- Koneksi database MySQL -->
        <?php
            include 'connection.php';

            //mysqli_close($conn);
        ?>

        <title>Template Web</title>
    </head>

    <body>

        <!-- Tempat Output Vue -->
        <div id="app">{{ msg }}</div>

        
        <!-- Tempat Program Vue -->
        <script>
            const { createApp } = Vue

            createApp ({
                data(){ /*Tempat data*/
                    return {
                        msg: "Hello World of Vue!"
                    }
                }
            }).mount ("#app") /*Tempat Nungging :) */
        </script>
        
    <p></p>
    <h1></h1>
    
    </body>
</html>