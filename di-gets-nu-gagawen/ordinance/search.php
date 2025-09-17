<?php
include "../db.php";

// Get subcategory_id from query string (default = 1)
$subcategory_id = isset($_GET['subcategory_id']) ? (int)$_GET['subcategory_id'] : 1;

$query = isset($_GET['query']) ? trim($_GET['query']) : '';
$results = [];

if ($query !== '') {
    $stmt = $conn->prepare("SELECT id, title, subtitle, created_at, updated_at 
                            FROM content 
                            WHERE subcategory_id = ? AND (title LIKE ? OR subtitle LIKE ?)
                            ORDER BY created_at DESC");
    $like_query = "%$query%";
    $stmt->bind_param("iss", $subcategory_id, $like_query, $like_query);
    $stmt->execute();
    $res = $stmt->get_result();

    while ($row = $res->fetch_assoc()) {
        $results[] = [
            'id' => $row['id'],
            'title' => htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8'),
            'subtitle' => htmlspecialchars($row['subtitle'], ENT_QUOTES, 'UTF-8'),
            'created_at' => $row['created_at'],
            'updated_at' => $row['updated_at']
        ];
    }
}

header('Content-Type: application/json');
echo json_encode($results);
