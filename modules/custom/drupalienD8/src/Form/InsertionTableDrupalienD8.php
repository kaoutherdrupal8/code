<?php

/**
 * @file
 * Contains \Drupal\drupalienD8\Form\InsertionTableDrupalienD8.
 */

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
* 
*/
class InsertionTableDrupalienD8 extends FormBase{

	
 protected $id;

  public function getFormId() {
  	//retourne le nom de la route
    return 'drupalien_certification_add';

  }


public function buildForm(array $form, FormStateInterface $form_state) {

 //$drupalienD8 = 0;

    $this->id = \Drupal::request()->get('id');
    $drupalienD8 = StorageQueryDrupalien::get($this->id);

    $form['theme'] = array(
      '#type' => 'select',
      '#title' => $this->t('Themes'),
      '#options' => array(
        'webmaster' => $this->t('Webmaster'),
        'themer' => $this->t('Themer'),
        'developpement' => $this->t('Developpement'),
        'expert' => $this->t('Expert'),
     ),
   );
    $form['score'] = array(
      '#type' => 'number',
      '#title' => t('Score'),
      '#min' => 0,
      '#max' => 100,
      '#ajax'          => array(
        'callback'  => array($this, 'AjaxValidateNumeric'),
        'event'     => 'change',
      ),
      '#default_value' => ($drupalienD8) ? $drupalienD8->score : 0,

    );

    $form['date'] = array(
      '#type' => 'date',
      '#title' => $this->t('Date de passage'),
      '#default_value' => date('d-m-Y'),
      '#max' => date('Y-m-d'),
    );

    $form['certificat_de_validation'] = array(
      '#type' => 'managed_file',
      '#name' => 'certificat_de_validation',
      '#title' => t('certificat de validation'),
      '#size' => 20,
      '#description' => t('format PDF uniquement'),
      '#upload_location' => 'public://justificatifs_certifications',
    );

    $form['actions'] = array('#type' => 'actions');
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#button_type' => 'primary',
      '#value' => ($drupalienD8) ? t('Editer') : t('Ajouter'),
      
    );
    $form['actions']['back'] = array(
      '#type' => 'submit',
      '#value' => t('<span class="glyphicon glyphicon-arrow-left"></span> Retour'),
      '#button_type' => 'success',
      '#limit_validation_errors' => [],
      '#attributes' => array(
          'onclick' => 'window.history.back();
          return false;',
      ),
    );
    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    
      /*     if (!is_numeric($score)) {
            $form_state->setErrorByName('score', $this->t('The field "score" must be a numeric'));
          }
      */
  }



  public function submitForm(array &$form, FormStateInterface $form_state) {

    $id = $form_state->getValue('id');
    $uid = $form_state->getValue('uid');
    $theme = $form_state->getValue('theme');
    $score = $form_state->getValue('score');
    $date = $form_state->getValue('date');
    $date = strtotime($date);
    $certificat_de_validation = $form_state->getValue('certificat_de_validation')[0];

   /* if (!empty($this->id)) {

      StorageQueryDrupalien::edit($this->id,
        SafeMarkup::checkPlain($uid),
        SafeMarkup::checkPlain($theme), 
        SafeMarkup::checkPlain($score),
        SafeMarkup::checkPlain($date),
        SafeMarkup::checkPlain($certificat_de_validation)
      );
      \Drupal::logger('certificationD8')->notice('@type: deleted %title.',
          array(
              '@type' => $this->id,
              '%title' => $this->id,
      ));

      drupal_set_message(t('Your score has been edited'));
    }
    else {*/
      $uid = \Drupal::currentUser()->id();

      //kint($uid);exit;
        StorageQueryDrupalien::addData(

          SafeMarkup::checkPlain($uid),
          SafeMarkup::checkPlain($theme),
          SafeMarkup::checkPlain($score),
          SafeMarkup::checkPlain($date),
          SafeMarkup::checkPlain($certificat_de_validation)
        );

        \Drupal::logger('certificationD8')
        ->notice('@type: deleted %title.',
          array(
              '@type' => $this->id,
              '%title' => $this->id,
      ));
  
      drupal_set_message(t('Your score has been submitted'));
/*    }
*/
    $form_state->setRedirect('certification_list',[
      'user' => \Drupal::currentUser()->id()
    ]
  );
    return;
  }
 }
/*}
*/