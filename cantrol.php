<?php
include_once 'model.php';
class Mycontrol extends model

{
    public function __construct()
    {
        parent::__construct();
        $url = $_SERVER['PATH_INFO'];

        switch($url)

        {
            case '/user details':
              $data = $this->SelectAll('register');
              include_once 'hedder.php';
              include_once 'sidebar.php';
              include_once 'user details.php';
              break;

            case '/contact':
             $data = $this->SelectAll('contact');
               //include_once 'hedder.php';
               include_once 'contact details.php';
                 include_once 'sidebar.php';  
                  break;

               case '/login':
                     include_once 'login.php';
                      break;   

               case '/index':
                     include_once 'hedder.php';
                       include_once 'sidebar.php';
                        include_once 'index.php';
                        break;     

            case '/delete':
                   if (isset($_GET['did']))
                    {
                        $d=$_GET['did'];
                       $where = array('id'=>$d);
                        $this->Delete_Data('register',$where);
                    header('location:user details');
                   }
                    break;

              case '/edit':
                        
                    if(isset($_GET['eid']))

                    {
                         $eid = $_GET['eid'];
                         $where =$arry('id=>$eid');
                         $all_data = $this->Select_Where('register',$where);
                        $fetch_user = $all_data->fetch_object();
                    }

                        include_once 'edit user.php';
                        break;


                    case '/addproduct':
             $data = $this->SelectAll('addcetegory');
                       

             if(isset($_POST['submit']))
             {
               $name = $_POST['name'];
               $cetegory= $_POST ['cetegory'];
               $price = $_POST ['price'];
               $offprice = $_POST ['offprice'];
               $image= $_FILES['photo']['name'];
              //  echo $image;exit;

             //  move_uploaded_file($file['file'][], destination)


              
       move_uploaded_file($_FILES['photo']['tmp_name'],"upload/".$_FILES['photo']['name']);
               $data = array('name'=>$name,
                              'cetegory'=>$cetegory,
                             'cet_id'=>$cetegory,
                             'price'=>$price,
                             'offprice'=>$offprice,
                             'photo'=>$image );

               $this->InsertData('addproduct',$data);
                            echo "inserted"; 
                            header('location:addproduct');
                }
                             include_once 'hedder.php';
                             include_once 'add product.php'; 
                             include_once 'sidebar.php'; 
                break;

                case '/add cetegory':

                 if(isset($_POST['submit']))

                 {
                     $cetegory = $_POST['cetegory'];

                       $data = array('cetegory'=>$cetegory);
                       $this->InsertData('addcetegory',$data);
                 }
                             include_once 'hedder.php';
                             include_once 'addcetegory.php'; 
                             include_once 'sidebar.php'; 
                    break;

                    case 'view cetegory':
                    $data = $this->SelectAll('addcetegory');
            
                        include_once 'viewcetegory.php';
                        break;

                       


        }

    }

}

 $obj = new Mycontrol;

