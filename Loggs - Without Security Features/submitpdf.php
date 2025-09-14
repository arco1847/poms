<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Upload PDF</title>
   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #f9f9f9;
         background-image: url(portproject2.jpg);
      }

      .container {
         width: 400px;
         margin: 0 auto;
         margin-top: 50px;
         padding: 20px;
         border: 1px solid #ccc;
         border-radius: 5px;
         background-color: #fff;
      }

      h2 {
         text-align: center;
         margin-bottom: 20px;
      }

      .form-group {
         margin-bottom: 20px;
      }

      label {
         display: block;
         font-weight: bold;
         margin-bottom: 5px;
      }

      input[type="text"], input[type="file"] {
         width: 100%;
         padding: 8px;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-sizing: border-box;
      }

      button[type="submit"] {
         background-color: #4CAF50;
         color: #fff;
         padding: 10px 15px;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         width: 100%;
      }

      button[type="submit"]:hover {
         background-color: #45a049;
      }

      .error {
         color: red;
      }
   </style>
</head>
<body>
   <div class="container">
      <h2>Upload PDF File</h2>
      <form method="post" enctype="multipart/form-data">
         <div class="form-group">
            <label for="shipnumber">Ship Number:</label>
            <input type="text" name="shipnumber" id="shipnumber" placeholder="Enter the Ship Number">
         </div>
         <div class="form-group">
            <label for="pdffile">Select PDF File:</label>
            <input type="file" name="pdffile" id="pdffile">
            <span class="error"><?php if(isset($file_error)) { echo $file_error; } ?></span>
         </div>
         <button type="submit" name="submit">Upload File</button>
      </form>
   </div>
</body>
</html>



<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Validate ship number
    $shipnumber = $_POST['shipnumber'];
    // Add additional validation if needed

    // Check if a file was uploaded
    if (!empty($_FILES['pdffile']['name'])) {
        // File size limit (in bytes)
        $maxFileSize = 5 * 1024 * 1024; // 5 MB

        // Allowed file types
        $allowedTypes = array('application/pdf');

        // Get file information
        $fileName = $_FILES['pdffile']['name'];
        $fileSize = $_FILES['pdffile']['size'];
        $fileType = $_FILES['pdffile']['type'];
        $fileTmpName = $_FILES['pdffile']['tmp_name'];

        // Check file size
        if ($fileSize > $maxFileSize) {
            $file_error = "File size exceeds the limit (5MB).";
        } elseif (!in_array($fileType, $allowedTypes)) {
            // Check file type
            $file_error = "Only PDF files are allowed.";
        } else {
            // File is valid, proceed with upload
            $uploadDir = 'uploads/'; // Directory to upload files

            // Generate a unique filename to avoid overwriting existing files
            $uniqueFilename = uniqid('pdf_').'_'.time().'.pdf';
            $targetFilePath = $uploadDir . $uniqueFilename;

            // Move uploaded file to destination directory
            if (move_uploaded_file($fileTmpName, $targetFilePath)) {
                // File upload successful
                // Additional processing if needed
                echo "File uploaded successfully.";
            } else {
                $file_error = "Error uploading file. Please try again.";
            }
        }
    } else {
        // No file uploaded
        $file_error = "Please select a PDF file to upload.";
    }
}
?>
*/