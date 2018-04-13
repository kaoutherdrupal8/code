<?php

namespace Drupal\drupalienD8\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Url;
use Drupal\Core\Link;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\SafeMarkup;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\CssCommand;
use Drupal\Core\Ajax\HtmlCommand;

/**
* Implements an example form.
*/
class DrupalienD8Form extends FormBase {

	  /**
	   * {@inheritdoc}
	   */
	  public function getFormId() {
	    return 'drupalienD8Form';
	  }

	  /**
	   * {@inheritdoc}
	   */

	public function buildForm(array $form, FormStateInterface $form_state) {
	$options = [];
	$header 	= array( 
      'id' 							=> t('Id Table'), 
      'uid' 						=> t('Uid'), 
      'theme' 						=> t('Theme'), 
      'score'			    		=> t('Score'), 
      'date' 						=> t('Date'), 
      'certificat_de_validation' 	=> t('Justificatif'), 
      'operations' => t('Delete'),
  );


	$rows = array();
    foreach (StorageQueryDrupalien::getAllData() as $id => $content) {

    	$deleteUrl = Url::fromUserInput('drupalienD8/form/delete/'.$content->id);
      // Row with attributes on the row and some of its cells.
     // $editUrl = Url::fromRoute('certification_list', array('id' => $content->id));

     //$deleteUrl = Url::fromRoute('certification_list', array('id' => $content->id));
     //$deleteUrl = Url::fromRoute('certification_list', array('id' => $content->id));
     //$deleteUrl =  $content->id;

      $lien ='';

     if(!empty($content->certificat_de_validation)){
       $file = file_load($content->certificat_de_validation);
       if(!empty($file)){
          $uri  = $file->get('uri')->value;
          $url  = file_create_url($uri);      
          $lien = Link::fromTextAndUrl('Justificatif',Url::fromUri($url));
        }
    }
     
      $rows[] = array(
        'data' => array(
         // \Drupal::l($content->id, $editUrl),
          $content->id,
          $content->uid,
          $content->theme, 
          $content->score,
          strftime('%A %d %B %Y', $content->date),
          $lien,
          \Drupal::l('Delete', $deleteUrl)
        )
      );
    }

    $table['table'] = array(
      '#type'       => 'table',
      '#header'     => $header,
      '#options' => $options,
      '#rows'       => $rows,
      '#attributes' => array(
      'id'        => 'bd-contact-table',
      ),
    );

    return array(
      //$text,
      $table,
    );

	  }

	/**
	 * {@drupalienD8}
	 */  

	public function validateForm(array &$form, FormStateInterface $form_state) {
	  
	}


	/**
	 * {@drupalienD8}
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