<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>{{ env('APP_NAME') }}</title>

    <style>
        body {
            scrollbar-width: thin;
            scrollbar-color: #0d6efd #ddd;
        }

        body::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        body::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom right, #0d6efd 0%, #1a56ff 100%);
            border-radius: 50px;
        }

        body::-webkit-scrollbar-track {
            background-color: #ddd;
            border: 1px solid #ccc;
        }

        body::-webkit-scrollbar-button {
            background-color: #0d6efd;
            border-radius: 5px;
        }
    </style>
</head>