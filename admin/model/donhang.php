<?php 
class Donhang
{
	private $tendh;
	private $madh;
	private $name;
	private $ngayban;
	private $sotien;
	private $loaisp;

	public function __construct($tendh,$madh,$name,$ngayban,$sotien,$loaisp)
	{
		$this->tendh = $tendh;
		$this->madh = $tendh;
		$this->name = $name;
		$this->ngayban = $ngayban;
		$this->sotien = $sotien;
		$this->loaisp = $loaisp;
	}
	 public function get_tendh()
    {
        return $this->tendn;
    }
     public function get_madh()
    {
        return $this->madh;
    }
     public function get_name()
    {
        return $this->name;
    }
     public function get_ngayban()
    {
        return $this->ngayban;
    }
     public function get_sotien()
    {
        return $this->sotien;
    }
     public function get_loaisp()
    {
        return $this->loaisp;
    }

}
 ?>
