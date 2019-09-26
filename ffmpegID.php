#!/usr/bin/php -f
<?php   ini_set("error_reporting", ~E_ALL);  
 exec( '  pgrep  ffmpeg   ', $ot , $rt ) ; //  
 $pid     =  $ot[0]     ;
 
$lastID  =  explode  (   PHP_EOL , file_get_contents( 'ffmpegID.txt' )  )  ;
$lastID2 =     $lastID [ count (  $lastID  ) - 2  ] ; 
var_dump (  $lastID2    );
   if (   strpos( $pid  , $lastID2 )    ===   false ) 
  {
file_put_contents (  'ffmpegID.txt' , $pid .PHP_EOL ,FILE_APPEND    ) ;
echo ' not match ' ;
 }
else echo ' their is match , ffmpeg id didn\'t change last time   ' .PHP_EOL ;

//   if (    $pid != $lastID       ) 
//  if ( strcmp ( $pid , $lastID  ) ==  0  ) 
//  


