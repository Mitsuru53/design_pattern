<?php
require_once 'Listing.class.php';

class ExtendedListing extends Listing {
  function __construct()
  {
    parent::__construct($data_source);
  }

  function readWithEncode()
  {
    return htmlspe($this->read(), ENT_QUOTES, mb_internal_encoding());
  }
}
 ?>
