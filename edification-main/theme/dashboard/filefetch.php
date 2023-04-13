
<?php
$folder_path = "upload-images/"; // Set the path to the folder containing the files
$files = scandir($folder_path); // Read the contents of the folder

foreach($files as $file) {
    if($file !== '.' && $file !== '..') { // Ignore the current and parent directories
        $file_path = $folder_path . $file; // Get the full file path
        $file_type = pathinfo($file_path, PATHINFO_EXTENSION); // Get the file type

        // Check if the file is an image
        if(in_array($file_type, array('jpg', 'jpeg', 'png', 'gif'))) {
            // Create an image tag for the file
            echo '<img src="' . $file_path . '" alt="' . $file . '"  type="application" width="100px" height="100px">';
        }
        // Check if the file is a PDF
        else if($file_type === 'pdf') {
            // Create an embed tag for the file
            echo '<embed src="' . $file_path . '" type="application/pdf" width="100%" height="100%">';
        }
        // Check if the file is an MP4 video
        else if($file_type === 'mp4') {
            // Create a video tag for the file
            echo '<video width="100%" height="auto" controls>';
            echo '<source src="' . $file_path . '" type="video/mp4">';
            echo '</video>';
        }
    }
}
?>