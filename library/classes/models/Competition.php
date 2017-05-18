<?php 

class Competition extends Model {
  
  static protected $_tableName = "competition";
  
  public static function getAll($categoryID = NULL, $companyID = NULL, $active = NULL, $name = NULL, $sort = NULL, $forArchive = false) {
    
    $db = Database::instance();
    $select = $db->select()
      ->from(array('C' => 'competition'), '')
      ->join(array('CT' => 'category'), 'CT.id = C.category_id', '')
      ->join(array('COM' => 'company'), 'COM.id = C.company_id', '')
      ;
    
    if(!is_null($categoryID)) {
      $select->where('C.category_id = ?', $categoryID);
    }
    
    if(!is_null($companyID)) {
      $select->where('C.company_id = ?', $companyID);
    }
    
    if(!is_null($active) && !$forArchive) {
      $select->where('C.is_active = ?', $active);
      $select->where('C.end_date > ?', time());
    }
    
    if(!is_null($search)) {
      $select->where('C.name LIKE "%?%"', $search);
    }
    
    if($forArchive) {
      $select->where('C.is_active = ?', $active);
      $select->where('C.end_date < ?', time());
    }
    
    if(!is_null($sort)) {
      switch($sort) {
        case "name-asc":
          $select->order('C.name ASC');
          break;
        
        case "id-asc":
          $select->order('C.id ASC');
          break;
        
        case "name-desc":
          $select->order('C.name DESC');
          break;
        
        case "date-asc":
          $select->order('C.end_date ASC');
          break;
        
        case "date-desc":
          $select->order('C.end_date DESC');
          break;
      }
    }
    else {
      $select->order(array('C.display_order', 'C.id DESC'));
    }
    
    if(!is_null($name)) {
      $select->where("C.name LIKE '%$name%'");
    }
    
    $select->columns(array(
      'C.id',
      'C.name',
      'CT.name as category_name',
      'COM.name as company_name',
      'COM.id as company_id',
      'CT.id as category_id',
      'C.end_date',
      'C.type',
      'C.is_public',
      'C.is_active',
      'C.description',
      'C.display_order'
    ));
    
    $data = $select->query()->fetchAll();
    return $data;
  }
  
  public static function create($data) {
    
    $admin = new View('competition');
    
    list($day, $month, $year) = explode('.', $data['end_date']);
    $endDate = strtotime("$year-$month-$day 23:59:59");
    
    $admin->name  = $data['name'];
    $admin->description   = $data['description'];
    $admin->name_en  = $data['name_en'];
    $admin->description_en   = $data['description_en'];
    $admin->category_id   = $data['category_id'];
    $admin->company_id   = $data['company_id'];
    $admin->type   = $data['type'];
    $admin->is_public   = $data['is_public'];
    $admin->is_active   = $data['is_active'];
    $admin->end_date = $endDate;
    
    $admin->ctime       = time();
    $admin->mtime       = time();
    $admin->save();
    
  }
  
  public static function edit($data) {
    
    $admin = Model::find('competition', $data['id']);
    
    list($day, $month, $year) = explode('.', $data['end_date']);
    $endDate = strtotime("$year-$month-$day 23:59:59");
    
    $admin->name  = $data['name'];
    $admin->description   = $data['description'];
    $admin->name_en  = $data['name_en'];
    $admin->description_en   = $data['description_en'];
    $admin->category_id   = $data['category_id'];
    $admin->company_id   = $data['company_id'];
    $admin->type        = $data['type'];
    $admin->is_public   = $data['is_public'];
    $admin->is_active   = $data['is_active'];
    $admin->display_order   = $data['display_order'];
    $admin->end_date    = $endDate;
    
    $admin->mtime       = time();
    $admin->save();
    
  }
  
  public static function getAllEntries($compID = NULL, $userID = null, $approved = false, $public = false) {
    
    $db = Database::instance();
    $select = $db->select()
      ->from(array('UC' => 'user_competition'), '')
      ->join(array('U' => 'user'), 'U.id = UC.user_id', '')
      ->join(array('C' => 'competition'), 'C.id = UC.competition_id', '')
      ;
    
    if(!is_null($compID)) {
      $select->where('UC.competition_id = ?', $compID);
    }
    
    if(!is_null($userID)) {
      $select->where('UC.user_id = ?', $userID);
    }
    
    if($approved) {
      $select->where('UC.approved = 1');
    }
    
    if($public) {
      $select->where('UC.visible = 1');
    }
    
    $select->order('UC.is_winner DESC, UC.approved');
    
    $select->columns(array(
      'UC.id',
      'U.username as username',
      'U.first_name',
      'U.last_name',
      'U.email',
      'C.name as competition_name',
      'C.type as competition_type',
      'UC.video',
      'UC.image',
      'UC.votes',
      'UC.yt_url',
      'UC.yt_votes',
      'UC.approved',
      'UC.visible as public',
      'UC.is_winner',
      'UC.ctime as send_date'
    ));
    
    return $select->query()->fetchAll();
    
  }
  
  
  public static function getEntryImage($image) {
    return WEB_URL . "pictures/images/" . $image;
  }
  
  public static function getEntryVideo($video) {
    return WEB_URL . "pictures/videos/" . $video;
  }
  
  public static function getYouTubeViws($videoID) {
    $apiKey = YT_API_KEY;
    $JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=statistics&id=$videoID&key=$apiKey");
    $json_data = json_decode($JSON, true);
    return $json_data['items'][0]['statistics']['viewCount'];
  }
  
}