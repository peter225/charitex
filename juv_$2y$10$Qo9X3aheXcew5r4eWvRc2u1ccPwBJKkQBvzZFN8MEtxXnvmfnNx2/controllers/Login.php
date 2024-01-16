<?php
/**
 * 
 */
class Login extends Controller
{
	
	public function default()
	{
		$this->view('Registration/login');
		
	}
	
	public function loginApplicant()
	{
		try 
		{
			$email = $psw = "";

			if(! isset($_POST['login-btn']))
			{
				throw new CustomException("Ensure to use the login button");
			}
			if( $_SERVER["REQUEST_METHOD"] != "POST" )
        		throw new CustomException("Error Processing Request", 1);
        
    		if(isset($_POST['email']))
    		{
        		$email = trim( $_POST['email'] );
    		}

    		if(isset($_POST['psw']))
    		{
        		$psw = trim( $_POST['psw'] );
    		}
            
    		if( "" == $email || "" == $psw )
        		throw new CustomException("Enter your email and/or passsword");

            


            

    		  $applicant = $this->model('Applicant');

            

            if( null == $applicant )
                throw new CustomException("Unkown role detected");

            //$passwordHash = password_hash( $psw, PASSWORD_DEFAULT );
            //var_dump( $passwordHash );
//throw new CustomException($passwordHash);
            $applicant->setDBInstance( $this->getDBInstance() );

            $applicant->setEmail( $email );

            $applicant->setPassWord($psw);
        	
        	$_SESSION['sessionID'] = Person::generateRandomNumber( 9 );
            //var_dump($_SESSION['sessionID']);
        	$applicant->setSessionID( $_SESSION['sessionID'] );

            if($applicant instanceof Applicant)
            {
                
                $_SESSION['applicantID'] = $applicant->getEmail();

                $success['dashboard'] = 'Applicants';

                $success['message'] =  'redirecting, please wait!!';

                $success['title'] =  'Success';

                $this->response['success'] = $success;

                $this->response['error'] = false;

                echo  json_encode( $this->response );    
            }
            else
            {
                $error['message'] = 'You could not be logged in!! try later';

                $error['title'] = 'Error';

                $this->response['success'] = false;

                $this->response['error'] = $error;

                echo  json_encode( $this->response );       
            }
		}
		catch( CustomException $e )
		{
			$this->response['success'] = false;

            $this->response['error'] = $e->getMessage();

            echo json_encode( $this->response );
		}
		catch( PDOException $e )
		{
			$this->response['success'] = false;

            $this->response['error'] = $e->getMessage();

            echo json_encode( $this->response );
		         
		}
		catch (Exception $e) 
		{
		    $this->response['success'] = false;

            $this->response['error'] = $e->getMessage();

            echo json_encode( $this->response );
		}
        catch (Error $e) 
        {
            $this->response['success'] = false;

            $this->response['error'] = $e->getMessage();

            echo json_encode( $this->response );
        }
    }
}
?>