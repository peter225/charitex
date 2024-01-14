<?php
	
    class CustomLogAdapter extends LogAdapter
    {
        const DATE_FORMAT = 'D, M d, Y';

        public function __construct()
        {
            parent::__construct();
        }
        
        public function logAlert( $message )
        {
            try
            {
                $jsonFormat = json_encode( array( 'message'=>$message, 'origin'=>get_class( $this->origin ) . ' ( ' . $this->origin->getID() . ' )', 'date'=>$this->date ) ) . PHP_EOL;
             
                file_put_contents( dirname( __DIR__ ) . '/' . self::ALERT_LOG_FILE, $jsonFormat, FILE_APPEND );
            }
            catch( Exception $ex )
            {
                
            }
            catch( Error $ex )
            {
               
            }
        }
        
        public function logWarning( $message )
        {
            try
            {
                $jsonFormat = json_encode( array( 'message'=>$message, 'origin'=>get_class( $this->origin ) . ' ( ' . $this->origin->getID() . ' )', 'date'=>$this->date ) ) . PHP_EOL;
             
                file_put_contents( dirname( __DIR__ ) . '/' . self::WARNING_LOG_FILE, $jsonFormat, FILE_APPEND );
            }
            catch( Exception $ex )
            {
                
            }
            catch( Error $ex )
            {
                
            }
        }
        
        /**
         * @author Adeyemo Peter
         * This method does notification
         * The origin and target must be properly set before invoking this method
         * @param String $message
         * @return void
         */
        public function logNotice( $message )
        {
            try
            {
                $this->specialLogFile = self::NOTIFICATION_LOG_BASE . strtolower( $this->target ) . '/' .  self::generateLogFile( 'json' );

                $jsonFormat = json_encode( array( 'message'=>$message, 'origin'=>get_class( $this->origin ) . ' ( ' . $this->origin->getID() . ' )', 'date'=>$this->date ) ) . PHP_EOL;
             
                file_put_contents( dirname( __DIR__ ) . '/' . $this->specialLogFile, $jsonFormat, FILE_APPEND );
            }
            catch( Exception $ex )
            {
                
            }
            catch( Error $ex )
            {
                
            }
        }
        
        /**
         * @author Adeyemo Peter
        * This method notifies the person specified
         * The origin and target must be properly set before invoking this method
         * @param String $message
         * @param String $targetID
         * @return void
         */
        public function notify( $message, $targetID )
        {
            try
            {
                $this->specialLogFile = self::NOTIFICATION_LOG_BASE . strtolower( $this->target ) . '/' .  self::generateLogFile( $targetID );

                $jsonFormat = json_encode( array( 'message'=>$message, 'origin'=>get_class( $this->origin ) . ' ( ' . $this->origin->getID() . ' )', 'date'=>$this->date ) ) . PHP_EOL;
             
                file_put_contents( dirname( __DIR__ ) . '/' . $this->specialLogFile, $jsonFormat, FILE_APPEND );
            }
            catch( Exception $ex )
            {
                
            }
            catch( Error $ex )
            {
                
            }
        }
        
        public function logInfo( $message )
        {
            try
            {
                $jsonFormat = '';

                if( ! empty( $this->origin ) )
                    $jsonFormat = json_encode( array( 'message'=>$message, 'origin'=>get_class( $this->origin ) . ' ( ' . $this->origin->getID() . ' )', 'date'=>$this->date ) ) . PHP_EOL;
                else
                    $jsonFormat = json_encode( array( 'message'=>$message, 'date'=>$this->date ) ) . PHP_EOL;
                
                file_put_contents( dirname( __DIR__ ) . '/' . self::INFO_LOG_FILE, $jsonFormat, FILE_APPEND );
            }
            catch( Exception $ex )
            {
                
            }
            catch( Error $ex )
            {
                
            }    
        }
        
        public function logDebug( $message )
        {
            try
            {
                $jsonFormat = json_encode( array( 'message'=>$message, 'origin'=>get_class( $this->origin ) . ' ( ' . $this->origin->getID() . ' )', 'date'=>$this->date ) ) . PHP_EOL;
                
                file_put_contents( dirname( __DIR__ ) . '/' . self::DEBUG_LOG_FILE, $jsonFormat, FILE_APPEND );
            }
            catch( Exception $ex )
            {
                
            }
            catch( Error $ex )
            {
                
            }       
        }
        
        public function logError( $message )
        {
            try
            {
                $jsonFormat = '';

                if( !empty( $this->origin ) )
                    $jsonFormat = json_encode( array( 'message'=>$message, 'origin'=>get_class( $this->origin ) . ' ( ' . $this->origin->getID() . ' )', 'date'=>$this->date ) ) . PHP_EOL;
                else
                    $jsonFormat = json_encode( array( 'message'=>$message, 'date'=>$this->date ) ) . PHP_EOL;

                file_put_contents( dirname( __DIR__ ) . '/' . self::ERROR_LOG_FILE, $jsonFormat, FILE_APPEND );  
            }
            catch( Exception $ex )
            {
                
            }
            catch( Error $ex )
            {
                
            }  
        }
        
        public function readError()
        {
            $errorMessages = array();
            
            $reader = file( dirname( __DIR__ ) . '/' . self::ERROR_LOG_FILE );
            
            foreach ( $reader as $log ) 
            {
                $errorMessages[] = json_decode( $log, true );
            }
            
            return $errorMessages;
        }
        
        public function readInfo()
        {
            $infoMessages = array();
            
            $reader = file( dirname( __DIR__ ) . '/' . self::INFO_LOG_FILE );
            
            foreach ( $reader as $log ) 
            {
                $infoMessages[] =  json_decode( $log, true );
            }
            
            return $infoMessages;
        }
        
        public function readDebug()
        {
            $debugMessages = array();
            
            $reader = file( dirname( __DIR__ ) . '/' . self::DEBUG_LOG_FILE );
            
            foreach ( $reader as $log ) 
            {
                $debugMessages[] = json_decode( $log, true );
            }
            
            return $debugMessages;
        }
        
        public function readWarning()
        {
            $warningMessages = array();
             
            $reader = file( dirname( __DIR__ ) . '/' . self::WARNING_LOG_FILE );
            
            foreach ( $reader as $log ) 
            {
                $warningMessages[] = json_decode( $log, true );
            }
            
            return $warningMessages;
        }
        
        public function readAlert()
        {
            $alertMessages = array();
            
            $reader = file( dirname( __DIR__ ) . '/' . self::ALERT_LOG_FILE );
            
            foreach ( $reader as $log ) 
            {
                $alertMessages[] = json_decode( $log, true );    
            }
            
            return $alertMessages;
        }
    }