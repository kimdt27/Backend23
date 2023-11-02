<?php
class Resize{
    protected $image;
    protected $image_type;
    public function load($filename){
        $image_info = getimagesize($filename);
        $this->image_type = $image_info[2];
        if($this->image_type == IMAGETYPE_JPEG){
            $this->image = imagecreatefromjpeg($filename);
        }elseif ($this->image_type == IMAGETYPE_GIF){
            $this->image = imagecreatefromgif($filename);
        }elseif ($this->image_type == IMAGETYPE_PNG){
            $this->image = imagecreatefrompng($filename);
        }
    }
    public function save($filename, $imageType = IMAGETYPE_JPEG, $compression = 100){
        if($imageType == IMAGETYPE_JPEG){
            imagejpeg($this->image, $filename, $compression);
        }elseif ($imageType == IMAGETYPE_GIF){
            imagegif($this->image, $filename);
        }elseif ($imageType == IMAGETYPE_PNG){
            imagepng($this->image, $filename);
        }

    }

    protected function getWidth(){
        return imagesx($this->image);
    }
    protected function getHeight(){
        return imagesy($this->image);
    }

    public function resizeToHeight($height){
        $ratio = $height / $this->getHeight();
        $width = $this->getWidth() * $ratio;
        $this->resize($width, $height);
    }

    public function resizeToWidth($width){
        $ratio = $width / $this->getWidth();
        $height = $this->getHeight() * $ratio;
        $this->resize($width, $height);
    }

    public function resizeToScale($scale){
        $width = $this->getWidth() * $scale / 100;
        $height = $this->getHeight() * $scale / 100;
        $this->resize($width, $height);
    }

    public function resize($width, $height){
        $newImage = imagecreatetruecolor($width, $height);
        imagecopyresampled($newImage, $this->image, 0,0,0,0,
        $width, $height, $this->getWidth(), $this->getHeight());
        $this->image = $newImage;
    }
}

function dostuff($value){
    $size = new Resize();
    $size->load("img.jpg");
    $size->resizeToWidth($value);
    $size->save("img2.jpg");
}
dostuff(1000);
