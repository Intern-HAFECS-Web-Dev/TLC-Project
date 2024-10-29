<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>testing register additional info</p>
    <p>{{ $user->id }}</p>
    
    <select id="province" name="province">
        <option value="">Pilih Provinsi</option>
        @foreach($provinces as $province)
            <option value="{{ $province->id }}">{{ $province->name }}</option>
        @endforeach
    </select>
    
    <select id="regency" name="regency" disabled>
        <option value="">Pilih Kabupaten/Kota</option>
    </select>
    
    <select id="district" name="district" disabled>
        <option value="">Pilih Kecamatan</option>
    </select>
    
    <select id="village" name="village" disabled>
        <option value="">Pilih Kelurahan</option>
    </select>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Ketika provinsi dipilih
            $('#province').change(function() {
                var provinceId = $(this).val();
                $('#regency').prop('disabled', !provinceId);
                $('#district').prop('disabled', true);
                $('#village').prop('disabled', true);
                $('#regency').empty().append('<option value="">Pilih Kabupaten/Kota</option>');
                $('#district').empty().append('<option value="">Pilih Kecamatan</option>');
                $('#village').empty().append('<option value="">Pilih Kelurahan</option>');
                
                if (provinceId) {
                    $.get('/regencies/' + provinceId, function(data) {
                        $.each(data, function(key, value) {
                            $('#regency').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    });
                }
            });
    
            // Ketika kabupaten/kota dipilih
            $('#regency').change(function() {
                var regencyId = $(this).val();
                $('#district').prop('disabled', !regencyId);
                $('#village').prop('disabled', true);
                $('#district').empty().append('<option value="">Pilih Kecamatan</option>');
                $('#village').empty().append('<option value="">Pilih Kelurahan</option>');
                
                if (regencyId) {
                    $.get('/districts/' + regencyId, function(data) {
                        $.each(data, function(key, value) {
                            $('#district').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    });
                }
            });
    
            // Ketika kecamatan dipilih
            $('#district').change(function() {
                var districtId = $(this).val();
                $('#village').prop('disabled', !districtId);
                $('#village').empty().append('<option value="">Pilih Kelurahan</option>');
                
                if (districtId) {
                    $.get('/villages/' + districtId, function(data) {
                        $.each(data, function(key, value) {
                            $('#village').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    });
                }
            });
        });
    </script>
    
</body>
</html>