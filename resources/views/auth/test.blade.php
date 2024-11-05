$province = Province::find($user->province_id);
        $regency = Regency::find($user->regency_id);
        $district = District::find($user->district_id);
        $village = Village::find($user->village_id);


        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
            <p>{{ $province }}</p>
            <p>{{ $regency }}</p>
            <p>{{ $district }}</p>
            <p>{{ $village }}</p>
        </body>
        </html>