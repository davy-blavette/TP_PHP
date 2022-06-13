<?php
namespace Components;

require_once './Core/component.php';

use Core\{Component};

class HeaderComponent extends Component {

  public function render() {
    echo '<header> Mon Formulaire !</header>';
  }

}