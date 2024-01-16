<?php

class Applicant extends Person
{
    
    public function loadProfile()   
    {
        try
        {
            $sql = 'SELECT * FROM applicant WHERE email=:email';

            $stmt = $this->dbInstance->prepare( $sql );

            $stmt->execute( array(':email'=>$this->email ) );

            $row = $stmt->fetch( PDO::FETCH_ASSOC );
            //var_dump($row);
            $this->firstName = $row['firstname'];

            $this->lastName = $row['lastname'];
            
            $this->phoneNumber = $row['telephone'];
            
            $this->sessionID = $row['session_id'];
            
            

        }
        catch( PDOException $e )
        {
            throw new PDOException( $e->getMessage() );
        }
    }

    public function passwordVerify( $pWord )
    {
        try 
        {
            $sql = "";


            
            if( $this instanceof Applicant )
                $sql = "SELECT password FROM applicant WHERE email = :email";

            
            if( "" == $sql )
                throw new CustomException( "Unrecognised role" );
            
            $stmt = $this->dbInstance->prepare( $sql );


            $stmt->execute( array ( ':email'=>$this->email ) );

            $row = $stmt->fetch( PDO::FETCH_ASSOC );

            if(is_array($row)){
                $passwordHash = $row['password'];
                return(password_verify($pWord, $passwordHash ));
            }

            
        }
        catch (PDOException $e) 
        {
           throw new PDOException( $e->getMessage() );
             
        }
        catch (CustomException $e) 
        {
            throw new CustomException( $e->getMessage() );             
        }

        catch (Error $e) 
        {
            throw new Error( $e->getMessage() );             
        }
        catch ( Exception $e) 
        {
           throw new Exception( $e->getMessage() );
             
        }
        
    }
}

?>