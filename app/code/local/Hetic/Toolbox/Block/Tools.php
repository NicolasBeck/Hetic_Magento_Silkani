<?php
class Hetic_Toolbox_Block_Tools extends Mage_Core_Block_Template {

  public function getHomeCategories() {

    $arr_cats = array();
    $scm = Mage::getModel("custommodel/toolmodel");
    $cats = $scm->getShownCategories();

    foreach ($cats as $cat) {
      $arr_cats[] = array(
        'id' => $cat->getId(),
        'name' => $cat->getName(),
        'url' => $cat->getUrl(),
        'img' => $cat->getImage(),
        'home_image' => $cat->getHomeImage(),
        'menu_image' => $cat->getMenuImage(),
        'parent_category' => $cat->getParentCategory()
      );
    }
    return $arr_cats;
  }

  public function getMenuCategories() {

    $arr_cats = array();
    $scm = Mage::getModel("custommodel/toolmodel");
    $cats = $scm->getMenuCategories();

    foreach ($cats as $cat) {
      $arr_cats[] = array(
        'id' => $cat->getId(),
        'name' => $cat->getName(),
        'url' => $cat->getUrl(),
        'img' => $cat->getImage(),
        'home_image' => $cat->getHomeImage(),
        'menu_image' => $cat->getMenuImage(),
        'parent_category' => $cat->getParentCategory()
      );
    }
    return $arr_cats;
  }

}
