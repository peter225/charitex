<?php
	
    interface ILogAdapter
    {
        //public function setOrigin( User $user );
        
        public function setTarget( $target );
        
        public function logAlert( $message );
        
        public function logWarning( $message );
        
        /**
         * The origin and target must be properly set for notificaion log
         */
        public function logNotice( $message );
        
        /**
         * The origin and target must be properly set for notificaion log
         */
        public function notify( $message, $uniqueTargetID );
        
        public function logInfo( $message );
        
        public function logDebug( $message );
        
        public function logError( $message );
        
        
        public function readWarning();
        
        public function readInfo();
        
        public function readDebug();
        
        public function readError();
        
        public function readAlert();
    }