{{-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article View</title>
    <style>
        /* Global Styling */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Article Image */
        .article-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        /* Article Title */
        .article-title {
            font-size: 2em;
            font-weight: bold;
            margin: 20px 0 10px;
            color: #333;
        }

        /* Posted On */
        .posted-on {
            font-size: 0.9em;
            color: #777;
            margin-bottom: 20px;
        }

        /* Article Content */
        .article-content {
            font-size: 1.1em;
            color: #444;
            line-height: 1.8;
            margin-top: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .article-title {
                font-size: 1.8em;
            }

            .article-content {
                font-size: 1em;
            }
        }
    </style>
</head>

<body> --}}

<x-user-App>
    <div class="content-detailoflegalpedia">
        <!-- Article Image -->
        <div class="article-image"
            style="background-image: url('../storage/article_images/{{ $article->picture_path }}')"><a>
        </div>

        <!-- Article Title -->
        <h1 class="article-detail-title">{{ $article->headline }}</h1>

        <!-- Posted On -->
        <p class="posted-on">Posted on: {{ $article->created_at }}</p>

        <!-- Article Content -->
        <div class="article-content">
            <p>
                {{ $article->content }}
            </p>
        </div>
    </div>
</x-user-App>
{{--     
</body>

</html> --}}
