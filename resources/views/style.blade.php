<html>

<head>
    <title>CSS</title>
    <link rel="stylesheet" href="mystyle.css">
    <style>
        body {
            color:blueviolet;
        }
        p {
            text-align: center;
        }

        .salam{
            font-size: larger;
            text-align: right;
            font-weight: bold;
            text-transform: uppercase;
        }

        .garisBawah{
            text-decoration: underline;
            color: black;
        }

    </style>
    </head>
    <body>
        <!-- Inline CSS, digunakan jika hanya 1 bagian di 1 halaman yang berbeda -->
        Hallo <b style="color:red;text-decoration: underline; text-shadow: 2px 2px 5px rgb(0,0,0);">Apa</b> kabar?
        <!-- Inpage CSS, digunakan jika yang berbeda hanya du 1 halaman -->
        <div class="garisBawah salam ">Hallo apa kabar?</div>
        <!-- External File, digunakan untuk global 1 situs -->
        <span class="sembunyi">Hallo apa kabar?</span>
        <p>Hallo apa kabar?</p>
    </body>
</html>