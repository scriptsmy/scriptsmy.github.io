

	


<?php

function getTitle($url) {
//	ob_start();
    $handle = fopen($url, "r");
	
    $contents = '';
    for ($i = 0; $i < 10; $i++) {
		
        $contents .= fread($handle, 1000);
		
        $pos = stripos($contents, '<title>');
        if (!isset($start) and  $pos !== false) {
            $contents = substr($contents, $pos+7);
            $start = true;
        }
        $pos = stripos($contents, '</title>');
        if ($pos !== false) {
            $contents = substr($contents, 0, $pos);
            break;
        }
    }
    fclose($handle);
	
//    $contents1 .= ob_get_contents();
//	echo $contents1;
//    ob_end_clean();
	
    return (isset($start)) ? $contents : 'ссылка';
 
}
  echo getTitle("http://stat-site.ru/index.html");
// echo getTitle($_SERVER['REQUEST_URI']);
echo "<br />";
?>

