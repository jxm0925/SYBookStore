<?php
namespace app\admin\model;
use think\Model;
use traits\model\SoftDelete;

class User extends Model
{
	use SoftDelete;
	protected $autoWriteTimestamp = true;

	public function listUser()
	{
		return $this;
	}
	public function getSexAttr($value) {
		$sex = [0=>'女',1=>'男',2=>'保密'];
		return $sex[$value];
	}
}