<?php

class Students extends Controller
{
    /*Beginning of routes */
    public function default()
	{
		try
		{
			if( ! isset( $_SESSION['studentID'] ) || ! isset( $_SESSION['sessionID'] ) )
			{
				$this->view('students/login');
				return;
			}

			$student = $this->model('Student');

			$student->setID( $_SESSION['studentID'] );

			$student->setDBInstance( $this->getDBInstance() );
            $student->setEmail($_SESSION['studentID']);
			$student->loadProfile();

			if( $student->getSessionID() != $_SESSION['sessionID'] )
			{
				$this->view('students/login');
				return;
			}

			$this->view( 'students/dashboard', ['Student'=>$student] );
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

    public function courses()
    {
        try
		{
			if( ! isset( $_SESSION['studentID'] ) || ! isset( $_SESSION['sessionID'] ) )
			{
				$this->view('students/login');
				return;
			}
            if(isset($_GET['id']))
            {
                $this->view('students/course');
            }

			$student = $this->model('Student');

			$student->setID( $_SESSION['studentID'] );

            $student->setDBInstance( $this->getDBInstance() );
            
            $student->setEmail($_SESSION['studentID']);

            $student->loadProfile();
            

			if( $student->getSessionID() != $_SESSION['sessionID'] )
			{
				$this->view('students/login');
				return;
			}

			$this->view( 'students/courses', ['Student'=>$student] );
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
    
    public function course()
    {
        try
		{
			if( ! isset( $_SESSION['studentID'] ) || ! isset( $_SESSION['sessionID'] ) )
			{
				$this->view('students/login');
				return;
			}
            // if(isset($_GET['id']))
            // {
            //     $this->view('students/course');
            // }

			$student = $this->model('Student');

			$student->setID( $_SESSION['studentID'] );

            $student->setDBInstance( $this->getDBInstance() );
            
            $student->setEmail($_SESSION['studentID']);

            $student->loadProfile();
            

			if( $student->getSessionID() != $_SESSION['sessionID'] )
			{
				$this->view('students/login');
				return;
			}

			$this->view( 'students/course', ['Student'=>$student] );
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

    public function spvi()
    {
        try
		{
			if( ! isset( $_SESSION['studentID'] ) || ! isset( $_SESSION['sessionID'] ) )
			{
				$this->view('students/login');
				return;
			}
            // if(isset($_GET['id']))
            // {
            //     $this->view('students/course');
            // }

			$student = $this->model('Student');

			$student->setID( $_SESSION['studentID'] );

            $student->setDBInstance( $this->getDBInstance() );
            
            $student->setEmail($_SESSION['studentID']);

            $student->loadProfile();
            

			if( $student->getSessionID() != $_SESSION['sessionID'] )
			{
				$this->view('students/login');
				return;
			}

			$this->view( 'students/spvi', ['Student'=>$student] );
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

    public function spdvi()
    {
        try
		{
			if( ! isset( $_SESSION['studentID'] ) || ! isset( $_SESSION['sessionID'] ) )
			{
				$this->view('students/login');
				return;
			}
            // if(isset($_GET['id']))
            // {
            //     $this->view('students/course');
            // }

			$student = $this->model('Student');

			$student->setID( $_SESSION['studentID'] );

            $student->setDBInstance( $this->getDBInstance() );
            
            $student->setEmail($_SESSION['studentID']);

            $student->loadProfile();
            

			if( $student->getSessionID() != $_SESSION['sessionID'] )
			{
				$this->view('students/login');
				return;
			}

			$this->view( 'students/spdvi', ['Student'=>$student] );
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

    public function sies()
    {
        try
		{
			if( ! isset( $_SESSION['studentID'] ) || ! isset( $_SESSION['sessionID'] ) )
			{
				$this->view('students/login');
				return;
			}
            // if(isset($_GET['id']))
            // {
            //     $this->view('students/course');
            // }

			$student = $this->model('Student');

			$student->setID( $_SESSION['studentID'] );

            $student->setDBInstance( $this->getDBInstance() );
            
            $student->setEmail($_SESSION['studentID']);

            $student->loadProfile();
            

			if( $student->getSessionID() != $_SESSION['sessionID'] )
			{
				$this->view('students/login');
				return;
			}

			$this->view( 'students/sies', ['Student'=>$student] );
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

    public function pvsc()
    {
        try
		{
			if( ! isset( $_SESSION['studentID'] ) || ! isset( $_SESSION['sessionID'] ) )
			{
				$this->view('students/login');
				return;
			}
            // if(isset($_GET['id']))
            // {
            //     $this->view('students/course');
            // }

			$student = $this->model('Student');

			$student->setID( $_SESSION['studentID'] );

            $student->setDBInstance( $this->getDBInstance() );
            
            $student->setEmail($_SESSION['studentID']);

            $student->loadProfile();
            

			if( $student->getSessionID() != $_SESSION['sessionID'] )
			{
				$this->view('students/login');
				return;
			}

			$this->view( 'students/pvsc', ['Student'=>$student] );
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

    /*End of routes */
	
    /*Beginning of controllers*/
    public function registration()
    {
        try 
		{
			$firstname = $lastname = $email = $phone = $reference = $psw = $c_psw = '';

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
            
            if( isset($_POST['phone'] ) )
            {
                $phone = trim( $_POST['phone'] );
            }
                
            if( '' == $phone )
                throw new CustomException("enter phone number");


            if( isset($_POST['password'] ) )
            {
                $psw = trim( $_POST['password'] );
            }
                    
            if( '' == $psw )
                throw new CustomException("enter password");

            if( isset($_POST['c-password'] ) )
            {
                $c_psw = trim( $_POST['c-password'] );
            }
                        
            if( '' == $c_psw )
                throw new CustomException("confirm password");

            if( isset($_POST['reference'] ) )
            {
                $reference = trim( $_POST['reference'] );
            }
                    
            if( '' == $reference )
                throw new CustomException("enter reference");

            
            
            if($psw !== $c_psw)
                throw new CustomException("password error");
                

			$student = $this->model('Student');


			$student->setDBInstance( $this->getDBInstance() );
            $details = $student->isUsedReference($reference);
            //var_dump($details);

            if($details["is_reference_used"]==0){
                $student->updateReferenceStatus($reference);
            }
            else
            {
                throw new CustomException("Your payment reference has been used, please process a new payment");
            }
            
			

			$student->setFirstName($firstname);

            $student->setLastName($lastname);
            
            $student->setEmail($email);

            $student->setPhoneNumber($phone);

            $student->setPassWord($psw);
			

			//$questionObject->setQuestionID($question_id);
            
        	
            if(!$this->registerStudent($student))
                throw new CustomException('registration not successful');

            $_SESSION['sessionID'] = Person::generateRandomNumber( 9 );
            //var_dump($_SESSION['sessionID']);
            $student->setSessionID( $_SESSION['sessionID'] );

			if($student instanceof Student)
            {
                
                $_SESSION['studentID'] = $student->getEmail();

                $success['dashboard'] = '../Students';

                $success['message'] =  'Student registered successfully.';

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

    public function registerStudent(Student $student)
    {
        try
        {   
            
            $student->setDBInstance($this->dbInstance);
            
            
            $sql = "INSERT INTO user SET email = :email, 
                                         first_name = :f_name, 
                                         last_name = :l_name, 
                                         phone_no = :phone,
                                         password=:psw";

            $stmt = $this->dbInstance->prepare($sql);
            $stmt->execute(array(
                                    ':email'=>$student->getEmail(),
                                    ':f_name'=>$student->getFirstName(),
                                    ':l_name'=>$student->getLastName(),
                                    ':phone'=>$student->getPhoneNumber(),
                                    ':psw'=>password_hash($student->getPassWord(), PASSWORD_DEFAULT)
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

    public function fetchCourseDetails()
    {
        try 
		{
            $id= "";
            
            if(isset($_POST['id']))
            {
                $id = $_POST['id'];
            }

            if(" "==$id)
            {
                throw new CustomException("NO ID");
                
            }

            $student = $this->model('Student');

            $student->setDBInstance($this->getDBInstance());

            $student->setID($id);

            $responses = $this->fetch($student);

            

            if( $responses )
        	{
            	$success['message'] =  $responses;

            	$success['title'] =  'Success';

            	$this->response['success'] = $success;

            	$this->response['error'] = false;

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

    public function enrollStudent()
    {
        try 
		{
            $email = $course_name = $price = $desc = "";
            
            if(isset($_POST['email']))
            {
                $email = $_POST['email'];
            }

            if(" "==$email)
            {
                throw new CustomException("NO email");
                
            }

            if(isset($_POST['name']))
            {
                $course_name = $_POST['name'];
            }

            if(" "==$course_name)
            {
                throw new CustomException("NO name");
            }

            if(isset($_POST['price']))
            {
                $price = $_POST['price'];
            }

            if(" "==$price)
            {
                throw new CustomException("NO price");
            }

            if(isset($_POST['description']))
            {
                $desc = $_POST['description'];
            }

            if(" "==$desc)
            {
                throw new CustomException("NO description");
                
            }

            $student = $this->model('Student');

            $course = $this->model('Course');

            $course->setDBInstance($this->getDBInstance());

            $student->setDBInstance($this->getDBInstance());

            $course->setCourseName($course_name);

            $course->setEmail($email);

            $course->setPrice($price);

            $course->setDesc($desc);

            
            

            if( $this->enroll($course) )
        	{
            	$success['message'] = 'ok';

            	$success['title'] =  'Success';

            	$this->response['success'] = $success;

            	$this->response['error'] = false;

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

    public function verifyEnrollment()
    {
        try 
		{
            $email = "";
            
            if(isset($_POST['email']))
            {
                $email = $_POST['email'];
                //var_dump($email);
            }

            if(""==$email)
            {
                throw new CustomException("NO email");
                
            }

            

            $student = $this->model('Student');

            

            $student->setDBInstance($this->getDBInstance());

            $student->setEmail($email);
            
            $responses = $this->verify();
            //var_dump($responses);
            $response1 = '';
            $response2 ='';
            //var_dump($student->getEmail());
            for($i=0; $i<count($responses); $i++){
                //var_dump($responses[$i]);
                
                if($responses[$i]["email"]==$student->getEmail())
                {
                    //var_dump($student->getEmail());
                    $success['message'] = $responses[$i];

            	    $success['title'] =  'Success';

            	    $this->response['success'] = $success;

            	    $this->response['error'] = false;

            	    $response1 = $this->response;
                }
                else
                {
                    
                    $error['message']='Not verified';

            	    $error['title'] =  'Error';

            	    $this->response['error'] = $error;

            	    $this->response['success'] = false;

            	    $response2 = $this->response;
                }
            }
            if($response1){
                echo json_encode($response1);
            }
            else{
                echo json_encode($response2);
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
    /*End of controllers*/

    public function fetch( Student $student)
    {
        $sql = "SELECT * FROM course WHERE id=:ID";

        $stmt = $this->dbInstance->prepare($sql);

        $stmt->execute(array(':ID'=>$student->getID()));

        $responses = $stmt->fetch();

        return $responses;
    }

    public function enroll(Course $course)
    {
        $sql = "INSERT INTO student_course SET email=:email,
                                                name=:name,
                                                description=:desc,
                                                price=:price";

        $stmt = $this->dbInstance->prepare($sql);

        $stmt->execute(array(':email'=>$course->getEmail(),
                            ':name'=>$course->getCourseName(),
                            ':desc'=>$course->getDesc(),
                            ':price'=>$course->getPrice()
                        ));
        return ($stmt->rowCount()>0);
    }

    public function verify()
    {
        $sql = "SELECT * FROM student_course";

        $stmt = $this->dbInstance->prepare($sql);

        $stmt->execute();

        

        return $stmt->fetchAll();
    }
    

}

?>