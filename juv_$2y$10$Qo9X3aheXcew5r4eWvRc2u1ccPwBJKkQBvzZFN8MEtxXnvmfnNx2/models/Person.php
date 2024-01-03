<?php
class Person
{
    protected $id;
    protected $sessionID;
    protected $userName;
    protected $passWord;
    protected $dbInstance;
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $phoneNumber;
    protected $gender;
    protected $address;
    protected $delTable;
    protected $dob;

    public function setDBInstance( PDO $dbInstance )
    {
        $this->dbInstance = $dbInstance;
    }

    public function getDBInstance()
    {
        return $this->dbInstance;
    }

    public function setID( $id )
    {
        $this->id = $id;
    }

    public function getID()
    {
        return $this->id;
    }

    public function setUserName($uName)
    {
        $this->userName = $uName;
    }
    
    public function getUserName()
    {
        return $this->userName;
    }
    
    public function setPassWord($pWord)
    {
        $this->passWord = $pWord;
    }

    public function getPassWord()
    {
        return $this->passWord;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
    }
    public function getDob()
    {
        return $this->dob;
    }

    public function setSessionID( $sessionID )
    {
        try
        {
            $this->sessionID = $sessionID;

            $sql = '';

            if( $this instanceof Student )
                $sql = 'UPDATE user SET session_id = :sessionID WHERE email = :email';
            if( '' == $sql )
                throw new CustomException("Unrecognised role");
                
            $stmt = $this->dbInstance->prepare( $sql );

            $stmt->execute( array(':sessionID'=>$this->sessionID, ':email'=>$this->email) );

            return ( $stmt->rowCount() == 1 );
        }
        catch (PDOException $e) 
        {
           throw new PDOException($e->getMessage() );
        }
        catch (CustomException $e) 
        {
           throw new CustomException( $e->getMessage() );
        }
        catch ( Exception $e) 
        {
           throw new Exception($e->getMessage() );    
        }
    }
     
    public function getSessionID()
    {
        return $this->sessionID;
    }
    

    

   

   
    
    

    public static function generateRandomNumber( $digit )
    {
        $number = "";

        for ($i = 0; $i < $digit; $i++) 
        {
            $number .= mt_rand(0, 9);
        }

        return $number;
    }

    public function IDExists( $id )
    {

        $stmt = $this->dbInstance->prepare( 'SELECT COUNT(customer_id) FROM customer WHERE customer_id = :ID' );

        $stmt->execute( array(':ID'=>$id ) );
        
        return ( $stmt->fetchColumn() > 0 );
    }

    public function sessionIDExists( $sessionID )
    {

        $stmt = $this->dbInstance->prepare( 'SELECT COUNT(session_id) FROM customer WHERE session_id = :ID' );

        $stmt->execute( array(':ID'=>$sessionID ) );
        
        return ( $stmt->fetchColumn() > 0 );
    }
}