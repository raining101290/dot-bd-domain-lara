<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Attachments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Upload Required Attachments</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('customer.attachments.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="files" class="form-label">Select Files (JPG, PNG, PDF up to 5 MB each)</label>
                    <input type="file" name="files[]" id="files" multiple class="form-control" required>
                    @error('files.*') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Upload Files</button>
                </div>
            </form>

            <p class="mt-4 text-muted text-center">Once uploaded, you'll be redirected to your dashboard.</p>
        </div>
    </div>
</div>

</body>
</html>
