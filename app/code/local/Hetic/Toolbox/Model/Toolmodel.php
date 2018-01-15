<?php

// Noter que l'on utilise comme nom de classe : Hetic_Toolbox_Model_[nom_fichier]

class Hetic_Toolbox_Model_Toolmodel extends Mage_Core_Model_Abstract {

  // Une fonction permettant de lister 2 catégories
  public function getShownCategories() {

    $cats = Mage::getModel("catalog/category")
        ->getCollection()
        ->addAttributeToSelect("*")
        ->addIsActiveFilter()
        ->addFieldtoFilter('level', 3)
        ->addFieldtoFilter('show_home', 1)
        ->setOrder('entity_id', 'DESC')
        ->setPageSize(2); 

    return $cats;

    }

    public function getMenuCategories() {

    $cats = Mage::getModel("catalog/category")
        ->getCollection()
        ->addAttributeToSelect("*")
        ->addIsActiveFilter()
        ->addFieldtoFilter('level', 3)
        ->setOrder('entity_id', 'DESC')
        ->setPageSize(3); 

    return $cats;

    }
}
