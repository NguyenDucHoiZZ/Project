<?php 
namespace app\controllers;
use yii;
use yii\web\Controller;
use app\models\TestUser;
class TestController extends Controller 
{
	
	public function actionTestUser()
	{
		$model = new TestUser();
		$model->setUser("nguyen van d","123456789");
		$model->getUser();
		}
}
?>