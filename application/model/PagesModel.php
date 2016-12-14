<?php

Class PagesModel
{
    public static function viewpage($id) 
	{
		//iniate the database-
		$database = DatabaseFactory::getFactory()->getConnection();	
		
		//sql to run 
		$sql = "SELECT page_body, 
					   page_title 
				FROM pages 
				WHERE page_SITE_URL = ?";
		
		//run the sql
        $getpage = $database->prepare($sql);
        $getpage->execute(array($id));
        
        //return the results
		return $getpage->fetch();

    }
}