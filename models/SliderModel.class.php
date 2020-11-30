<?php

 class  SliderModel extends ModelManager{
      public function getSlider(){
          $req = "SELECT `id_image`,`image_slider`,`publish` FROM `Slider` where publish=1";
        $sliders = $this -> queryAll($req);
        return $sliders;
          
      }
      
 }
 