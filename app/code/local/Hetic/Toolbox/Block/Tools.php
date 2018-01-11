<?php
class Hetic_Toolbox_Block_Tools extends Mage_Core_Block_Template {

  public function getHomeCategories() {

    $arr_cats = array();
    $scm = Mage::getModel("custommodel/toolmodel"); // noeud xml utilisé dans config.xml + le nom du fichier (Path+_+name) de la classe
    $cats = $scm->getShownCategories();

    foreach ($cats as $cat) {
      $arr_cats[] = array(
        'id' => $cat->getId(),
        'name' => $cat->getName(),
        'url' => $cat->getUrl(),
        'img' => $cat->getImage(),
        'home_image' => $cat->getHomeImage(),
        'menu_mage' => $cat->getMenuImage()
      );
    }
    return $arr_cats;
  }

}
