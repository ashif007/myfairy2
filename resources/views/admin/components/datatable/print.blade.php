<!DOCTYPE html>
<html lang="en">
<head>
    <title>Print Table</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        body {margin: 20px}
        .thumb-image {width: 50px;height: 50px;border-radius: 50% !important;}
    </style>
</head>
<body>
<table class="table table-bordered table-condensed table-striped">
    @foreach($data as $row)
        @if ($row == reset($data))
            <tr>
                @foreach($row as $key => $value)
                    <th>{!! $key !!}</th>
                @endforeach
            </tr>
        @endif
        <tr>
            @foreach($row as $key => $value)
                @if(is_string($value) || is_numeric($value))
                    <td>{!! $value !!}</td>
                @else
                    <td></td>
                @endif
            @endforeach
        </tr>
    @endforeach
</table>
<script>
    window.onload = function() {
        window.print();
        setTimeout(function () {
            window.close();
        }, 500);
    }
</script>
</body>
</html>
