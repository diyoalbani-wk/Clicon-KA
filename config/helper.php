<?php
function getSection($conn, $section_name) {
    $section_name = mysqli_real_escape_string($conn, $section_name);
    $sql = "SELECT content FROM home_sections WHERE section_name='$section_name' LIMIT 1";
    $res = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($res);
    return json_decode($data['content'], true);
}
?>
