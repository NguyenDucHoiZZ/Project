<?php 
namespace app\models;
use yii\base\Model;
class Test2 extends Model
{
	public $name;
	public $password;
	public function setTest2($name,$passwod)
	{
		$this->name= $name;
		$this->password= $passwod;
	}
	public function getTest2()
	{
		return $this->name.'<br/>'.$this.password.'<br/>';
	}
}

?>

