<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();
$id    = $request->getParam('id');
$user_id  = Website::getLoggedUserInfo()['id'];
$video_id    = $request->getParam('video_id');
if(!Website::isLoggedUser()){
    exit();
}


$course = Course::getInfo($id);
if($course['type']=="course"){
    if(!Course::CanUserBeOnCourse($user_id, $course['id'],$course['display_order']))
        exit();

    if(!Course::IsUserOnCourse($user_id, $course['id']))
    $request->redirect(WEB_URL."strana.php?url=nemate-pristup-ovom-kursu");

    
    
    if($course['start_available'] > date("Y-m-d")){
        exit();
    }

    if($course['end_available'] < date("Y-m-d")){
      
    
    }

}else{

  if(!Seminar::IsUserOnSeminar($user_id, $course['id']))
    exit();
}
$video = new View("course_video", $video_id);

?>
<html lang="en">
<head>
<!DOCTYPE html>  
     <link href="http://vjs.zencdn.net/6.2.0/video-js.css" rel="stylesheet">
 
    
</head>     
<body style="height: 460px;">
    
    
     <video id="my-video" class="video-js" style="margin: 0px auto" controls preload="auto" width="800px" height=""
                                            poster="<?php echo Course::getImageUrl($course['image']);?>" data-setup="{}">
                                              <source src="<?php echo $video->url;?>" type='video/mp4'>
                                              <source src="<?php echo $video->url;?>" type='video/webm'>
                                              <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider upgrading to a web browser that
                                                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                              </p>
                                         </video>
 <script src="http://vjs.zencdn.net/6.2.0/video.js"></script>

</body>
</html>