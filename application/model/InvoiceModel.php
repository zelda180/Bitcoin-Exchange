<?php

Class InvoiceModel
{
    public static function invoice($id) 
	{
		//iniate the database
		$database = DatabaseFactory::getFactory()->getConnection(); 
		
		//sql to run
		$sql = "SELECT * FROM trades 
				WHERE trade_user = ? 
				AND trade_id = ?";
				
		//run sql
        $getorder = $database->prepare($sql);
        $getorder->execute(array(Session::get('id'), $id));
        
		//return the results
		return $getorder->fetch();
    }
}