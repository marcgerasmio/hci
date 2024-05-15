<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Content</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Link to your custom CSS file -->
  <link rel="stylesheet" href="upload_styles.css">
</head>
<body>

<div class="upload-container">
  <h2 class="upload-header">Upload New Content</h2>
  <form id="upload-form" class="upload-form" action="#" method="post">
    <div class="form-group">
      <label for="upload-image" class="form-label">Image</label>
      <input type="file" id="upload-image" name="image" class="form-input" accept="image/*">
      <div id="upload-image-error" class="error-message"></div>
    </div>
    <div class="form-group">
      <label for="upload-description" class="form-label">Description</label>
      <textarea id="upload-description" name="description" class="form-input" placeholder="Enter description"></textarea>
      <div id="upload-description-error" class="error-message"></div>
    </div>
    <button type="submit" class="btn">Upload</button>
  </form>
</div>

</body>
</html>
