<?php
/**
 * run_cowstep模块处理程序
 *
 * @author a799687933
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class Run_cowstepModuleProcessor extends WeModuleProcessor {
	public function respond() {
		$content = $this->message['content'];
		//这里定义此模块进行消息处理时的具体过程, 请查看微擎文档来编写你的代码
	}
}