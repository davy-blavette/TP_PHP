<?php
namespace Components;

require_once './Core/component.php';

use Core\{Component};

class ContactFormComponent extends Component {

  public function render() {
    require_once 'components/contact-form/contact-form.componentV.php';
  }

}



