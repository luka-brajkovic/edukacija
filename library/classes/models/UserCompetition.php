<?php 

class UserCompetition extends Model {
  
  static protected $_tableName = "competition";
  
  public static function getWinners() {
    
    $db = Database::instance();
    $select = $db->select()
      ->from(array('UC' => 'user_competition'), '')
      ->join(array('U' => 'user'), 'U.id = UC.user_id', '')
      ->join(array('C' => 'competition'), 'C.id = UC.competition_id', '')
      ->where('UC.is_winner = 1')
      ->order('C.id DESC')
      ->columns(array(
        'UC.id as id',
        'UC.video',
        'UC.image',
        'UC.votes',
        'UC.yt_url',
        'UC.yt_votes',
        'U.username',
        'U.first_name',
        'U.last_name',
        'C.id as comp_id',
        'C.name as comp_name'
      ))
      ;
    
    return $select->query()->fetchAll();
    
  }
  
  public static function updateYTViews($id) {
    $entry = Model::find("user_competition", $id);
    if($entry->yt_url) {
      $views = Competition::getYouTubeViws($entry->yt_url);
      $entry->yt_votes = $views;
      $entry->save();
    }
    return $entry->yt_votes;
  }
  
}