<?php
	//以购买产品试图模型wl
	class VPDViewModel extends ViewModel {
		public $viewFields = array(
			'Products'=>array(
				'id'=>'order_id',
				'cusid',
				'pid',
				'creator',
				'ip',
				'domain',
				'ctime'=>'order_ctime',
				'update_time',
				'run_status'=>'order_status',
				'deleted'=>'order_deleted',
				'_as'=>'o',
				),
			'Order'=>array(
				'from'=>'fromtime',
				'to'=>'totime',
				'note'=>'ordernote',
				'payment',
				'paid',
				'contract_No',
				'is_on',
				'_as'=>'od',
				'_on'=>'od.product_id=o.id',
			
			),	
			'Protype'=>array(
				'tid'=>'pro_tid',
				'parentId',
				'labelname',
				'path',
				'_as'=>'p',
				'_on'=>'o.pid=p.tid',
				),
		);
	}
?>