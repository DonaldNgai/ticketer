<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        $this->loadViewWithTemplates("home","index");
    }

    public function getEvents($latitude,$longitude){
    	echo json_encode(array(
		    		array('id'=>1,'title'=>"TITLE1",'description' => "description1"),
    				array('id'=>2,'title'=>"TITLE2",'description' => "description2"),
    				array('id'=>3,'title'=>"TITLE4",'description' => "description3")
    			));
    }

    /**
     * returns ticket information if it exists for user or 
     * @param  int $eventId event id
     * @return JSON          event information
     */
    public function getEventPageInfo($eventid){
        $tickethelper = $this->loadHelper("tickets");
        $ticket = $tickethelper->getTicket($eventid);
        if($eventid){

        }
    }

    
}
