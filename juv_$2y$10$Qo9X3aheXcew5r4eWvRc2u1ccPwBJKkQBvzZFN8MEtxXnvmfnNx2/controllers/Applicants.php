<?php

class Applicants extends Controller
{
    /*Beginning of routes */
    public function default()
	{
		try
		{
			if( ! isset( $_SESSION['applicantID'] ) || ! isset( $_SESSION['sessionID'] ) )
			{
				$this->view('Register/login');
				return;
			}

			$applicant = $this->model('Applicant');

            $applicant->setDBInstance( $this->getDBInstance() );
            $applicant->setEmail($_SESSION['studentID']);
			$applicant->loadProfile();

			if( $applicant->getSessionID() != $_SESSION['sessionID'] )
			{
				$this->view('students/login');
				return;
			}

			$this->view( 'students/dashboard', ['Student'=>$applicant] );
		}
		catch( PDOException $e )
		{
			echo $e->getMessage();
		}
		catch( CustomException $e )
		{
			echo $e->getMessage();
		}
		catch( Exception $e )
		{
			echo $e->getMessage();
		}
		catch( Error $e )
		{
			echo $e->getMessage();
		}
    }

    

    
    public function registration()
    {
        try 
		{
			$firstname = $lastname = $email =  '';

			if( ! isset($_POST['register_btn']) )
        	throw new CustomException("Ensure to use the register student button");


            if( $_SERVER["REQUEST_METHOD"] != "POST" )
			throw new CustomException("Error Processing Request", 1);

			if( isset($_POST['first_name'] ) )
    		{
        		$firstname = trim( $_POST['first_name'] );
    		}
    		
            if( '' == $firstname )
				throw new CustomException("enter firstname");

			
			
			if( isset($_POST['last_name'] ) )
    		{
        		$lastname = trim( $_POST['last_name'] );
    		}
    		
            if( '' == $lastname )
                throw new CustomException("enter lastname");
                
            if( isset($_POST['email'] ) )
            {
                $email = trim( $_POST['email'] );
            }
                
            if( '' == $email )
                throw new CustomException("enter email");
            
            
                

			$applicant = $this->model('Applicant');


			$applicant->setDBInstance( $this->getDBInstance() );
        
            
			

			$applicant->setFirstName($firstname);

            $applicant->setLastName($lastname);
            
            $applicant->setEmail($email);

            
			

			//$questionObject->setQuestionID($question_id);
            
        	
            if(!$this->registerApplicant($applicant))
                throw new CustomException('registration not successful');

            $_SESSION['sessionID'] = Person::generateRandomNumber( 9 );
            //var_dump($_SESSION['sessionID']);
            $applicant->setSessionID( $_SESSION['sessionID'] );

			if($applicant instanceof Applicant)
            {
                
                $_SESSION['applicantID'] = $applicant->getEmail();
                
                $success['message'] =  'Applicant registered successfully.';

                $success['title'] =  'Success';

                $this->response['success'] = $success;

                $this->response['error'] = false;

                echo  json_encode( $this->response );    
            }
            else
            {
                $error['message'] = 'You could not be registered!! try later';

                $error['title'] = 'Error';

                $this->response['success'] = false;

                $this->response['error'] = $error;

                echo  json_encode( $this->response );       
            }

		} 
		catch( CustomException $e )
		{
			$this->response['success'] = false;

            $this->response['error']['message'] = $e->getMessage();

            $this->response['error']['title'] = 'Error';

            echo json_encode( $this->response );
		}
		catch( PDOException $e )
		{
			$this->response['success'] = false;

            $this->response['error']['message'] = $e->getMessage();

            $this->response['error']['title'] = 'Error';

            echo json_encode( $this->response );
		         
		}
		catch (Exception $e) 
		{
		    $this->response['success'] = false;

            $this->response['error']['message'] = $e->getMessage();

            $this->response['error']['title'] = 'Error';

            echo json_encode( $this->response );

		}
        catch (Error $e) 
        {
            $this->response['success'] = false;

            $this->response['error']['message'] = $e->getMessage();

            $this->response['error']['title'] = 'Error';

            echo json_encode( $this->response );
        } 
    }

    public function registerApplicant(Applicant $applicant)
    {
        try
        {   
            
            $applicant->setDBInstance($this->dbInstance);
            
            
            $sql = "INSERT INTO applicant SET email = :email, 
                                         firstname = :f_name, 
                                         lastname = :l_name, 
                                         telephone = :phone,
                                         password=:psw";

            $stmt = $this->dbInstance->prepare($sql);
            $stmt->execute(array(
                                    ':email'=>$applicant->getEmail(),
                                    ':f_name'=>$applicant->getFirstName(),
                                    ':l_name'=>$applicant->getLastName(),
                                    ':phone'=>$applicant->getPhoneNumber(),
                                    ':psw'=>password_hash($applicant->getPassWord(), PASSWORD_DEFAULT)
                ));
            
                return ( $stmt->rowCount() >0 );

        } 
        catch(CustomException $e )
        {
            throw new CustomException("Error: ". $e->getMessage() );   
        }
        catch ( PDOException $e )
        {
            throw new PDOException ( $e->getMessage() );
        }
        catch(Exception $e)
        {
            throw new Exception("Error: ". $e->getMessage() );   
        }
        catch(Error $e)
        {
            throw new Error( $e->getMessage() );
        }
    }

    
    

}

?>