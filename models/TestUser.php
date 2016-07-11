<?php 
namespace app\models;
use Yii;
use yii\base\Model;
class TestUser extends Model 
{
	public $username;
	public $password;
	public function setUser($username,$password)
	{
		
		$this->username = $username;
		
		$this->password = $password;
	
	}
	public  function getUser()
	{
		return $this->username.'<br/>'.$this->password.'<br/>';
		
	}
}
