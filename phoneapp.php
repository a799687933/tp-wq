<?php
/**
 * run_cowstep模块APP接口定义
 *
 * @author a799687933
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class Run_cowstepModulePhoneapp extends WeModulePhoneapp {
	public function doPageTest(){
		global $_GPC, $_W;
		$errno = 0;
		$message = '返回消息';
		$data = array();
		return $this->result($errno, $message, $data);
	}
	
	
}