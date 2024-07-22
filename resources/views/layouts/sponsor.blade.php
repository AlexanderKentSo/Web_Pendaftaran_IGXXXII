<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .sponsor-section {
                opacity: 0.5
            }

            .sponsor-list div.sponsor {
                border: 1px solid #c2e3f6;
                height: 150px
            }
        </style>
    </head>

    <body>
        <div class="sponsor-section mt-5 mx-2 mx-md-5 px-0 px-md-5 bg-light">
            <div class="text-center py-md-5"><h2 class="fw-bold" style="color: #E2c56a7">Sponsored by: </h2></div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 sponsor-list">
                @for($i=1; $i <=8; $i++)
                <div class="col pb-5 px-0 px-md-5">
                    <div class="sponsor"></div>
                </div>
                @endfor
            </div>
        </div>
    </body>
</html>

