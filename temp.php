$mydir = '/opt/ctf/text_file_store/rw/';
$files = scandir($mydir);
foreach($files as $file) {
    $contents = file_get_contents($file);
    echo $file + $contents;
}
