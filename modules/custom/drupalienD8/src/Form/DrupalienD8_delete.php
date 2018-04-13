<?php


/**
 * @file
 * Contains \Drupal\drupalienD8\Form\DrupalierD8_delete.
 */


/*namespace Drupal\drupalienD8\Form;

use Drupal\Core\Form\ConfirmFormBase;
use Drupal\Core\Form\ConfirmFormInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

class DrupalienD8_delete extends ConfirmFormBase {
*/
  /**
   * {@inheritdoc}
   */
/*  public function getFormId() : string {
    return "DrupalienD8_delete";
  }*/
 
  /**
   * {@inheritdoc}
   */

/*  public function buildForm(array $form, FormStateInterface $form_state) {
    $this->id = \Drupal::request()->get('id');
    return parent::buildForm($form, $form_state);

  }
*/

  /**
   * {@inheritdoc}
   */
/*  public function getCancelUrl() {
    return new Url('certification_list');
  }*/

/**
   * {@inheritdoc}
   */
/*  public function getQuestion() {

    return t('Do you want to delete %id?', ['%id' => $this->id]);
  }


  public function getConfirmText() {

    return t('Delete');
  }

  function submitForm(array &$form, FormStateInterface $form_state) {
        
        
    StorageQueryDrupalien::delete($this->id);
    \Drupal::logger('drupalienD8')->notice('@type: deleted %title.',
        array(
            '@type' => $this->id,
            '%title' => $this->id,
        ));

    drupal_set_message(t('La certtification %id a bien été supprimé !', array('%id' => $this->id)));

    $form_state->setRedirect('certification_list', ['user' => Drupal::currentUser()]);
    
  }
}*/





namespace Drupal\drupalienD8\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\ConfirmFormBase;
use Drupal\Core\Url;
use Drupal\Core\Render\Element;
/**
 * Class DeleteForm.
 *
 * @package Drupal\mydata\Form
 */
class DrupalienD8_delete extends ConfirmFormBase {
/**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'delete_form';
  }
  public $id;

  public function getQuestion() { 
    return t('Do you want to delete %id?', array('%id' => $this->id));
  }
 public function getCancelUrl() {
    return new Url('certification_list');
}
public function getDescription() {
    return t('Only do this if you are sure!');
  }
  /**
   * {@inheritdoc}
   */
  public function getConfirmText() {
    return t('Delete it!');
  }
  /**
   * {@inheritdoc}
   */
  public function getCancelText() {
    return t('Cancel');
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $id = NULL) {
     $this->id = $id;
    return parent::buildForm($form, $form_state);
  }

  /**
    * {@inheritdoc}
    */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
       $query = \Drupal::database();
       $query->delete('drupalienD8_table')
                   ->condition('id',$this->id)
                  ->execute();
             drupal_set_message("succesfully deleted");
            $form_state->setRedirect('certification_list');
  }
}