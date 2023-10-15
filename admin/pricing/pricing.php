<?php
  require_once('../../assets/php/json.php');
  function getPricing() {
    return readJSON("../../data/pricing.json");
  }

  function updatePricing($index, $updated) {
    updateJSON(getPricing(), "../../data/pricing.json", $index, $updated);
  }

  function deletePricing($index) {
    updateJSON(getPricing(), "../../data/pricing.json", $index, []);
  }

  function createPricing($data) {
    writeJSON("../../data/pricing.json", $data);
  }

?>