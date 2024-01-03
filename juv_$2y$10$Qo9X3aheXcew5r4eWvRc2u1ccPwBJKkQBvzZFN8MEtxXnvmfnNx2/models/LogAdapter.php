<?php
	
    abstract class LogAdapter implements ILogAdapter
    {
        protected $origin;
        
        protected $target;
        
        protected $specialLogFile;
        
        protected $date;
        
        const NOTIFICATION_LOG_BASE = 'notifications/';
        
        const GENERAL_LOG_BASE = 'logs/';
        
        const DEBUG_LOG_FILE = 'logs/debug.txt';
        
        const INFO_LOG_FILE = 'logs/info.txt';
        
        const WARNING_LOG_FILE = 'logs/warning.txt';
        
        const NOTICE_LOG_FILE = 'logs/notice.txt';
        
        const ERROR_LOG_FILE = 'logs/error.txt';
        
        const ALERT_LOG_FILE = 'logs/alert.txt';
        
        const CRITICAL_LOG_FILE = 'logs/critical.txt';
        
        const GENERAL_DATE_FORMAT = 'D, M d, Y h:i:s a';
        
        public function __construct()
        {
            $dateTime = new DateTime();
            
            $this->date = $dateTime->format( self::GENERAL_DATE_FORMAT );
        }
        
        public function setOrigin( User $user = null )
        {
            $this->origin = $user;
        }
        
        public function setTarget( $target )
        {
            $this->target = $target;
        }
        
        protected function generateLogFile( $fileExtension = null )
        {
            if( null == $fileExtension || '' == $fileExtension )
                $fileExtension = 'txt';

            return time() . Utility::generateAlphaString( 2 ) . '.' . strtolower( $fileExtension );
        }
    }