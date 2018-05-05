<?php
class homeController
{
   public function index($data=[])
   {
       echo 'I am in in <font color=green>'.__CLASS__.'</font> method <font color=red>'.__METHOD__ .'</font>';
       
   }
   
   public function about()
   {
       echo 'I am in <font color=green>'.__CLASS__.'</font> method <font color=red>'.__METHOD__ .'</font>';
   }
   public function contact()
   {
       echo 'I am in <font color=green>'.__CLASS__.'</font> method <font color=red>'.__METHOD__ .'</font>';
   }
}
