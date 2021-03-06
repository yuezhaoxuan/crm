<?php
	class ReportViewModel extends ViewModel {
		public $viewFields=array(
			'Order'=>array(
				'cusid',
				'from'=>'fromtime',
				'to'=>'totime',
				'payment',
				'paid',
				'finnote',
				'_as'=>'o',	
				
			),
			'Products'=>array(
				'pid',
				'_as'=>'pd',
				'_on'=>'pd.id=o.product_id'
			
			),
			'Cus_info'=>array(
				'cusname',
				'salemanId',
				'_as'=>'c',
				'_on'=>'o.cusid=c.id'
			),
			
			'Protype'=>array(
				'labelname',
				'_as'=>'p',
				'_on'=>'pd.pid=p.tid'
			),
			'user'=>array(
				'uid',
				'uname',
				'_on'=>'c.salemanId=user.uid',
			),
		
		);
	
	}


?>