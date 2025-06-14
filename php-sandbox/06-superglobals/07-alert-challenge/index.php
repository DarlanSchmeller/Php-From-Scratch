<?php
$title = '';
$description = '';
$submitted = false;
$messages = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $title = htmlspecialchars($_POST['title'] ?? '');
    $description = htmlspecialchars($_POST['description'] ?? '');

    if (empty($title) || empty($description)) {
        $messages[] = ['text' => 'Title or description is missing', 'color' => 'bg-red-400'];
    }

    $file = $_FILES['logo'];

    if ($file['error'] === UPLOAD_ERR_OK) {
        // Specify where to upload
        $uploadDir = 'uploads/';

        // Check and create dir
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Create file name
        $filename = uniqid() . '-' . $file['name'];

        // Check file type
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $fileExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        // Make sure extension is in array
        if (in_array($fileExtension, $allowedExtensions)) {
            // Upload file
            if (move_uploaded_file($file['tmp_name'], $uploadDir .  $filename)) {
                $messages[] = ['text' => 'File Uploaded!', 'color' => 'bg-green-400'];
            } else {
                $messages[] = ['text' => 'File Upload Error: ' . $file['error'], 'color' => 'bg-red-400'];
            }
        } else {
            $messages[] = ['text' => 'Invalid File Type', 'color' => 'bg-red-400'];
        }
    }

    $submitted = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job Listing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="bg-gray-100">
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
            <h1 class="text-2xl font-semibold mb-6">Create Job Listing</h1>
            <form method="post" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-medium">Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter job title" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none" value="<?= $title ?>">
                </div>
                <div class="mb-6">
                    <label for="description" class="block text-gray-700 font-medium">Description</label>
                    <textarea id="description" name="description" placeholder="Enter job description" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"><?= $description ?></textarea>
                </div>
                <div class="mb-4">
                    <label for="resume" class="block text-gray-700 font-medium">Logo</label>
                    <input type="file" id="logo" name="logo" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
                        Create Listing
                    </button>
                    <a href="#" class="text-blue-500 hover:underline">Back to Listings</a>
                </div>
            </form>

            <!-- Display submitted data -->
            <?php if ($submitted) : ?>
                <div class="mt-6 p-4 border rounded bg-gray-200">
                    <h2 class="text-lg font-semibold">Submitted Job Listing:</h2>
                    <p><strong>Title:</strong> <?= $title ?></p>
                    <p><strong>Description:</strong> <?= $description ?></p>
                </div>
            <?php endif; ?>

            <div class="w-auto justify-items-center">
            <?php if ($messages): ?>
                <?php foreach ($messages as $message): ?>
                    <div class="flex justify-center self-center mt-4 w-full max-w-md items-center p-2 rounded-md <?= $message['color'] ?> text-gray-800 font-medium">
                        <?= $message['text'] ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        </div>
        
    </div>
</body>

</html>