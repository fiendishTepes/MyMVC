<?php
class homeController extends Controller
{
   public function index($emp='',$id='',$name='')
   {
       echo 'I am in <font color=green>'.__CLASS__.'</font> method <font color=red>'.__METHOD__ .'</font>';
       echo '<br>';
       //echo 'Id: is <b>'. $id . '</b> and name: is <b>'.$name.'</b>';
       echo '<br>'. var_dump($this);
       $this->view('home/index',['name' => $name , 'id' => $id]);
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
