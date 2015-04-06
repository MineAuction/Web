<?php
class Auction{
    public function items(){
      $inauction = DB::assocAll(DB::query('SELECT * FROM ' . TABLE_ITEMS . ' WHERE inauction = 1'));
       return $inauction;
    }
}      