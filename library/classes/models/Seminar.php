<?php 

class Seminar extends Model {
  
  static protected $_tableName = "course";
  
 
  public static function getImageUrl($image) {
   try {
    if($image && is_file(IMAGES_PATH . "/course/" . $image)) {
      return WEB_URL . "/pictures/course/" . $image;
    }
    else {
      return "";
    }
   } catch (Exception $e) {
     throw $e;
   }
  } 
  
  public static function getImagePath() {
    return IMAGES_PATH . "/course/";
  }
  
  public static function getInfo($id) {
   $db = Database::instance();
   $data = $db->select()
     ->from(self::$_tableName)
     ->where('id = ?', $id)
     ->query()->fetch()
      ;
   
   return $data;
 }
 
  public static function getQuestionInfo($id) {
   $db = Database::instance();
   $data = $db->select()
     ->from("course_question")
     ->where('id = ?', $id)
     ->query()->fetch()
      ;
   
   return $data;
 }
 
  public static function getAttendingInfo($id) {
   $db = Database::instance();
   $data = $db->select()
     ->from("user_course_attending")
     ->where('id = ?', $id)
     ->query()->fetch()
      ;
   
   return $data;
 }
 
  public static function getAnswerInfo($id) {
   $db = Database::instance();
   $data = $db->select()
     ->from("course_question_answer")
     ->where('id = ?', $id)
     ->query()->fetch()
      ;
   
   return $data;
 }
  
  
 
  public static function getSeminarByUrl($url) {
      $db = Database::instance();
      $select = $db->select()
      ->from('course')
      ->where('url =  ?',$url)
      ;
      $data = $select->query()->fetch();
      
      return $data;
  }  
  
  public static function GetUsersForSeminar($courseID) {
      $db = Database::instance();
      $select = $db->select()
      ->from('user')
      ;
      $allusers = $select->query()->fetchall();
      
      $db = Database::instance();
      $select = $db->select()
      ->from('course_user')
      ->where('course_id =  ?',$courseID)
      ;
      $courseUsers = $select->query()->fetchall();
      
      
      return array(
      'allusers' =>   $allusers,
      'selected' =>  $courseUsers);
  }  
 
    public static function GetUsersForCourseAndNumOfTry($courseID) {
    $db   = Database::instance();
    $select = $db->select()
    ->from(array('C' => 'course_user'), '')
    ->joinLeft(array('A' => 'user'), 'C.user_id = A.id', '')
    ->where('course_id =  ?',$courseID)
    ->columns(array(
        'C.id',
        'C.user_id',
        'C.course_number_of_trys',
        'C.start_date',
        'C.end_date',
        'A.first_name',
        'A.last_name',

      ))
      ;
    $data = $select->query()->fetchAll();
    
    return $data;
     
  }  
  
  
 
  public static function getForIndex() {
   
   $db   = Database::instance();
   $select = $db->select()
    ->from(array('C' => 'course'), '')
    ->joinLeft(array('A' => 'course_user'), 'C.id = A.course_id', '')
    ->order('display_order')
    ->columns(array(
        'C.id',
        'C.title',
        'C.url',
        'C.image',
        'C.leed',
      ))
      ->group('C.id')
      ;
    
    ;
  
  
        $user = Website::getLoggedUserInfo();
        $select->where('A.user_id = ?',$user['id']);
    
    
    
    $data = $select->query()->fetchAll();
    
    return $data;
   
 }
 public static function getAllForFront($page = 1, $limit = 5) {
    $offset = ($page - 1) * $limit;
    $db = Database::instance();
      
    $select = $db->select()
    ->from(array('C' => 'course'), '')
    ->joinLeft(array('A' => 'course_user'), 'C.id = A.course_id', '')
    ->order('display_order')
    ->where('is_deleted = 0')
    ->where('type = "seminar"')
    ->columns(array(
        'C.id',
        'C.title',
        'C.url',
        'C.image',
        'C.leed',
      ))
      ->group('C.id')
      ;
    
    ;
 
//        $user = Website::getLoggedUserInfo();
//        $select->where('A.user_id = ?',$user['id']);
    
    
    
    $selectCount = clone($select);
    $count = count($selectCount->query()->fetchAll());
    
    $select->limit($limit, $offset);
    
    
    $data = $select->query()->fetchAll();
    
    
    return array('data' => $data, 'count' => $count);  
   
 } 
 
 
  
   public static function create($data) {
       
      $data['url']        = Utils::generateUrl($data['title']);
      $data['image']     = Utils::imageUpload('image', self::getImagePath(), $data['url'] . "");
      
      if(isset($data['files']) && !empty($data['files'])) {
      $data['files'] = implode(",", $data['files']);
      }

      return parent::create($data);
   }
  /**
   * Method will update specific page
   * 
   * @param array $data
   * @param int $id
   * @return boolean
   */
   
     public static function getSeminarUrl() {
      return WEB_URL . "seminar.php?url=";
  }
  
   
  public static function edit($data, $id) {
   
       return parent::edit($data, $id);
  }
  
  public static function updateOrder($items,$tableName) {
    self::updateDisplayOrder($items,$tableName);
    }
    
    
  public static function getAllUsersForSeminarAdding($id) {
    self::updateDisplayOrder($items,self::$_tableName);
    }
    
     public static function getAllQuestionsForSeminar($course_id) {
   
   $db   = Database::instance();
    $select = $db->select()
    ->from(array('C' => "course_question"),'')
    ->joinLeft(array('A' => 'course_question_answer'), 'C.id = A.course_question_id', '')
    ->where('C.course_id = ?', $course_id)
    ->order('C.display_order')
    ->columns(array(
        'C.id',
        'C.title',
        'C.active',
        'COUNT(A.id) as a_num'
      ))
      ->group('C.id')
      ;
    
    
    $data = $select->query()->fetchAll();
    
    return $data;
   
 }
 
 public static function getAll() {
   
    $db   = Database::instance();
     $select = $db->select()
     ->from(array('C' => self::$_tableName),"")
     ->joinLeft(array('A' => 'course_question'), 'C.id = A.course_id', '')
     ->order('C.display_order')
     ->where('is_deleted = 0')
     ->where('type = "seminar"')
     ->columns(array(
        'C.id',
        'C.text',
        'C.leed',
        'C.image',
        'C.url',
        'C.title',
        'COUNT(A.id) as a_num'
      ))
      ->group('C.id')
     ;

     $data = $select->query()->fetchAll();

     return $data;
   
 }
 
 
     public static function getAllAnswersForQuestion($course_id) {
   
   $db   = Database::instance();
    $select = $db->select()
    ->from("course_question_answer")
    ->where("course_question_id = ?",$course_id)
    ->order('display_order')
    ;
    
    $data = $select->query()->fetchAll();
    
    return $data;
   
 }
 
     public static function getAllDataForTest($course_id) {
   
    $db   = Database::instance();
    $select = $db->select()
    ->from(array('C' => "course_question"),'')
    ->joinLeft(array('A' => 'course_question_answer'), 'C.id = A.course_question_id', '')
    ->where('C.active = 1 AND C.course_id = ?', $course_id)
    ->order(array('C.display_order', 'A.display_order'))
    ->columns(array(
        'C.id as question_id',
        'A.id as answer_id',
        'A.course_question_id',
        'A.text as answer_text',
        'A.is_correct_answer',
      ))
      ;
    
    
    $answers = $select->query()->fetchAll();
    
    $select = $db->select()
    ->from(array('C' => "course_question"),'')
    ->joinLeft(array('A' => 'course_question_answer'), 'C.id = A.course_question_id', '')
    ->where('C.active = 1 AND C.course_id = ?', $course_id)
    ->order('C.display_order')
    ->columns(array(
        'C.id',
        'C.title',
        'C.text',
        'COUNT(A.id) as a_num'
      ))
      ->group('C.id')
      ;
    $questions = $select->query()->fetchAll();
    
    
    
    return array("answers" => $answers , "questions" => $questions);
   
 }
 
 
 public static function getNumOfSeminarQuestions($id) {
   
    $db   = Database::instance();
     $select = $db->select()
     
     ->from('course_question')
     ->where('active = 1 AND course_id = ?',$id)
     
     ;

     $questionNumber = count($select->query()->fetchAll());
     
     
     $course = $db->select()
     ->from(self::$_tableName)
     ->where('id = ?', $id)
     ->query()->fetch()
      ;

     return array("questionNumber" => $questionNumber , "success_percentage" => $course['success_percentage'] );
   
 }
  public static function LeftTrys($user_id ,$course_id) {
     $db   = Database::instance();
     $select = $db->select()
     ->from('user_course_attending')
     ->where('user_id = ?',$user_id)
     ->where('course_id = ?',$course_id)
     ;
     
     $data = $select->query()->fetchAll();
     
     return $data;
  }
    
    public static function getUsersAttendings($user_id) {
   
    $db   = Database::instance();
    $select = $db->select()
    ->from(array('C' => "user_course_attending"),'')
    ->joinLeft(array('A' => 'course'), 'C.course_id = A.id', '')
    ->where('C.user_id = ?', $user_id)
    ->columns(array(
        'C.id as id',
        'A.title',
        'C.is_pass',
        'C.number_of_questions',
        'C.number_of_correct_anwers',
        'A.success_percentage',
        'C.is_pass',
      ))
      ;
    
    
    return $select->query()->fetchAll();
    }
   
    
   public static function getAttendingAnswers($id) {
   
    $db   = Database::instance();
    $select = $db->select()
     
     ->from('user_course_answers')
     ->where('user_course_attending_id = ?',$id)
     ;

  
    
    return $select->query()->fetchAll();
    }
  
    public static function getSeminarAttendings($id) {
   
    $db   = Database::instance();
    $select = $db->select()
    ->from(array('C' => "user_course_attending"),'')
    ->joinLeft(array('A' => 'course'), 'C.course_id = A.id', '')
    ->where('A.id = ?', $id)
    ->columns(array(
        'C.id as id',
        'A.title',
        'C.is_pass',
        'C.number_of_questions',
        'C.number_of_correct_anwers',
        'C.is_pass',
      ))
      ;
    
    
    return $select->query()->fetchAll();
    }
    
    
    public static function getStatsForSeminar($id) {
   
    $db   = Database::instance();
    $select_1 = $db->select()
    ->from("user_course_attending")
    ->where('course_id = ?', $id)
    ->group('user_id');
      ;
    $NumberOfUsersThatTrierd = count($select_1->query()->fetchAll());
    
    
    $select_2 = $db->select()
    ->from(array('C' => "user_course_attending"),'')
    ->where('C.course_id = ?', $id)
    ->columns(array(
      'COUNT(C.user_id) as a_num' 
      ))
    ->group('C.course_id')
      ;

    $attendings = $select_2->query()->fetch()['a_num'];
    
    $select_3 = $db->select()
    ->from("user_course_attending")
    ->where('is_pass = 1 AND course_id = ?', $id)
    ->group('user_id');
      
         
    
    $countPass = count($select_3->query()->fetchAll());
    
    
    
    
    return array("attendings" => $attendings,"NumberOfUsersThatTrierd" => $NumberOfUsersThatTrierd , "countPass" => $countPass );
    }
    
    public static function DidUserpassTest($user_id,$course_id) {
   
    $db   = Database::instance();
    $select = $db->select()
    ->from("user_course_attending")
    ->where('user_id = ?',$user_id)
    ->where('course_id = ?',$course_id)
    ->where('is_pass = 1 ')
    
            
    ;
    
    
    return $select->query()->fetchAll();
    }
    
     public static function GetUsersSeminars($user_id) {
    $db   = Database::instance();
    $select = $db->select()
    ->from(array('C' => 'course'), '')
    ->joinLeft(array('A' => 'course_user'), 'C.id = A.course_id', '')
    ->where('A.user_id = ?',$user_id)
    ->where('is_deleted = 0')
    ->columns(array(
        'C.id',
        'C.title',
        'C.url',
        'C.image',
        'C.leed',
        'C.number_of_tries_per_user',
      ))
      ;
    
    
     return $select->query()->fetchAll();
     }
    
    public static function getUserSeminarAttendings($user_id,$course_id) {
   
    $db   = Database::instance();
    $select = $db->select()
    ->from("user_course_attending")
    ->where('course_id = ?', $course_id)
    ->where('user_id = ?', $user_id)
    
      ;
     
     return $select->query()->fetchAll();
    }
     
    public static function IsUserOnSeminar($user_id,$course_id) {
   
    $db   = Database::instance();
    $select = $db->select()
    ->from("course_user")
    ->where('course_id = ?', $course_id)
    ->where('user_id = ?', $user_id)
    ;
     
     return $select->query()->fetch()? TRUE : FALSE;
    }
    
  
    
     
}
