<?php
function fetchFromWP($endpoint) {
    $url = 'https://backendcms.sizaf.com/wp-json/wp/v2/' . $endpoint;
    $response = file_get_contents($url);
    return json_decode($response, true);
}

// Convert text to a URL-friendly slug
function slugify($text) {
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '-');
    $text = preg_replace('~-+~', '-', $text);
    $text = strtolower($text);
    return $text ?: 'n-a';
}

// Helper function to extract content by keyword
function extractByKeyword($keyword, $content) {
    $pattern = '/(?:<[^>]+>)?' . preg_quote($keyword, '/') . '[:：]?\s*(.*?)<\/p>/i';
    preg_match($pattern, $content, $match);
    return trim(strip_tags($match[1] ?? 'Not specified'));
}

// Function to fetch blogs
function getBlogs($page = 1, $postsPerPage = 10) {
    $apiUrl = "https://backendcms.sizaf.com/wp-json/wp/v2/posts?_embed&per_page={$postsPerPage}&page={$page}";

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $apiUrl,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT => 10,
    ]);

    $response = curl_exec($curl);

    if ($response === false) {
        curl_close($curl);
        error_log("Error fetching posts: " . curl_error($curl));
        return [
            'blogs' => [],
            'totalPages' => 0
        ];
    }

    $headerSize = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
    $headers = substr($response, 0, $headerSize);
    $body = substr($response, $headerSize);

    $totalPages = 1;
    if (preg_match('/X-WP-TotalPages:\s*(\d+)/i', $headers, $matches)) {
        $totalPages = (int)$matches[1];
    }

    curl_close($curl);

    $blogs = json_decode($body, true);

    if (!is_array($blogs) || empty($blogs)) {
        return [
            'blogs' => [],
            'totalPages' => 0
        ];
    }

    return [
        'blogs' => $blogs,
        'totalPages' => $totalPages
    ];
}

// Function to get featured image or fallback
function getFeaturedImage($blog) {
    if (isset($blog['_embedded']['wp:featuredmedia'][0]['source_url'])) {
        return $blog['_embedded']['wp:featuredmedia'][0]['source_url'];
    }
    return 'https://via.placeholder.com/500x300?text=No+Image';
}

?>
