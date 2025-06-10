<?php
    echo $_REQUEST['name'] ?? '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['submit'])) 
    {
        $name = htmlspecialchars($_REQUEST['name']) ?? '';
        $age = htmlspecialchars($_REQUEST['age']) ?? '';
        
        $submitted = true;
    }
?>

<form method="post">
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
  </div>
  <div>
    <label for="age">Age:</label>
    <input type="text" name="age" id="age">
  </div>
  <input type="submit" name="submit" value="Submit">
</form>

<?php if ($submitted) : ?>
    <!-- Display submitted data -->
    <div class="mt-6 p-4 border rounded bg-gray-200">
        <h2 class="text-lg font-semibold">Job Listing:</h2>
        <p>
            <strong>Title:</strong>
            <?= $name ?> 
        </p>
        <p>
            <strong>Description:</strong>
            <?= $age ?> 
        </p>
    </div>
<?php endif; ?>