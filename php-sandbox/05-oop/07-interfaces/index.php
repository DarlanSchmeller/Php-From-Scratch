<?php
    // Interface is a contract. Any class that implements this must define these methods
    interface ContentInterface
    {
        public function display();
        public function edit();
    }

    // The class agrees to implement all methods from the Interface
    class Article implements ContentInterface
    {
        private $title;
        private $content;

        public function __construct($title, $content)
        {
            $this->title = $title;
            $this->content = $content;
        }

        public function display()
        {
            return '<h2>' . $this->title . '</h2>' . '<br> <content>' . $this->content . '</content>';
        }

        public function edit()
        {
            return 'Editing the article ' . $this->title;
        }
    }

    class Video implements ContentInterface
    {
        private $title;
        private $url;

        public function __construct($title, $url)
        {
            $this->title = $title;
            $this->url = $url;
        }

        public function display()
        {
            return '<h2>' . $this->title . '</h2>' . '<br> <iframe src=\'' . $this->url . '\'></iframe>';
        }

        public function edit()
        {
            return 'Editing the video ' . $this->title;
        }
    }

    $article = new Article('Introduction to PHP', 'PHP is a versatile scripting language');
    $video = new Video('PHP for Beginners', 'https://www.youtube.com/watch?v=BUCiSSyIGGU');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <!-- Output -->
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
             <?= $article->display()?>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
             <?= $video->display()?>
        </div>
    </div>
</body>

</html>