<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <div>
                <h1 id="Naam-boven" class="text margin-geen">
                </h1>
            </div>
            <img src="../assets/pictures/person_logo.png" alt="foto logo" class="person">

            <div id="gegevens">
                <div>
                    <p id="Naam">
                    </p> 
                </div>
                <div >
                    <p id="Gender">
                    </p> 
                </div>
                <div>
                    <p id="Age">
                    </p> 
                </div>
                <div >
                    <p id="Telefoonnummer">
                    </p> 
                </div>
                <div>
                    <p id="intresses">
                    </p> 
                </div>
            </div>

            <div id="Knoppen">
                <button type="submit" class="knop" id="1" onClick="reply_click(this.id)"> 
                </button>

                <button type="submit" class="knop" id="2" onClick="reply_click(this.id)"> 
                </button>

                <button type="submit" class="knop" id="3" onClick="reply_click(this.id)">
                </button>

                <button type="submit" class="knop" id="4" onClick="reply_click(this.id)">
                </button>

                <button type="submit" id="Next" class="knop hidden">
                        Go to next person
                </button>
            </div>
        </div>
        
    <script src="../assets/js/script.js">
    </script>
    </body>
</html>
