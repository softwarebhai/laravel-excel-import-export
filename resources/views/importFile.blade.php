<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Excel & csv file</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <h2>Laravel Import Excel & CSV File</h2>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="form-group mb-4">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Choose File</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Import Users</button>
            <a href="{{ route('export-users') }}" class="btn btn-success">Export Users</a>
        </form>
    </div>
</body>
</html>