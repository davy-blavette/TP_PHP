<?php
namespace Components;

require_once './Core/component.php';
require_once './Components/header.component.php';
require_once './Components/contact-form/contact-form.component.php';

use Core\{Component};

class MainComponent extends Component {

  public function render() {
    $header = new HeaderComponent();
    $mail_form = new ContactFormComponent();

    echo "<main>";
    $header->render();
    
    //Formulaire
    $mail_form->render();

    echo "</main>";

  }

}