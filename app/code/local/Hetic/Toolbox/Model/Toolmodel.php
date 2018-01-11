<?php

// Noter que l'on utilise comme nom de classe : Hetic_Toolbox_Model_[nom_fichier]

class Hetic_Toolbox_Model_Toolmodel extends Mage_Core_Model_Abstract {

  // Une fonction permettant de lister 2 catégories
  public function getShownCategories() {

    $cats = Mage::getModel("catalog/category") // Utilisation d'un modèle existant de magento
        ->getCollection()
        ->addAttributeToSelect("*")
        ->addIsActiveFilter()
        ->addFieldtoFilter('show_home', 1)
        ->setOrder('entity_id', 'DESC')
        ->setPageSize(2); 

    return $cats;

    }
}
