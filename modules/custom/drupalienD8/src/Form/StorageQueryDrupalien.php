<?php
namespace Drupal\drupalienD8\Form;
	use Drupal\Core\Database;
	use Drupal\Core\Database\Query\PagerSelectExtender;

/**
* 
*/
class StorageQueryDrupalien {

    static function exists($id) {
     	return (bool) $this->get($id);
    }



static function get($id) {
    $result = db_query('SELECT * FROM {drupalienD8_table} WHERE id = :id', array(':id' => $id))->fetchAllAssoc('id');
    if ($result) {
      return $result[$id];
    }
      else {
        return FALSE;
      }
  }

	/*static function get($id) {
	  $result = $connectionid->select('drupalienD8_table', 'data')
      ->fields(
        'data', 
      [
        'id',
        'uid',
        'theme',
        'score',
        'date',
        //'dataicat_de_validation'
      ]
     )
	    ->condition('data.id', $id)
	    ->execute()
	    ->fetchAll();
	  return $result;
	      
	      if ($result) {
	      return $result[$id];
	    }
	      else {
	      return FALSE;
	    }
	 }*/


/*	$uid = \Drupal::currentUser()->id();
   	$connectionid = \Drupal::database();*/

    //methode qui i'ajout de données dans la base ...	

	static function addData(
	  $uid,
	  $theme,
	  $score,
	  $date,
	  $certificat_de_validation
	)

	{

	$uid = \Drupal::currentUser()->id();
   	$connectionid = \Drupal::database();

	  db_insert('drupalienD8_table')
	    ->fields(
	      	array(
		      'uid' => $uid,
		      'theme' => $theme,
		      'score' => $score,
		      'date' => $date,     
		      'certificat_de_validation' => $certificat_de_validation,     
	     	)
	    )->execute();
	}

 //methode qui permet de recuperer les données dans la base ...
  static function getAllData() {

    $uid = \Drupal::currentUser()->id();
    $connection = \Drupal::database();
    $result = $connection->select('drupalienD8_table', 'data')
      ->fields(
        'data', 
      [
        'id',
        'uid',
        'theme',
        'score',
        'date',
        'certificat_de_validation'
      ]
     )
	    ->condition('data.uid', $uid)
	    ->orderBy('data.date', 'DESC')
	    ->execute()
	    ->fetchAll();
	  return $result;
   }
//methode delete lingne dans le formulaire
   /*static function delete($id) {

    db_delete('drupalienD8_table')
    ->condition('id', $id)
    ->execute();
  }*/
	
}


