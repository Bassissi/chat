                if($_FILES['uplaodI']['size']>1)
                {
                  
              
                       // nomer les images par rand 
                      $r=rand(5, 10000);
                     $extention= strrchr($_FILES['uplaodI']['name'],'.');
                     $nomImage=$r.$extention; 

                 
                     $lesnomsImage=glob('publicite/*');  
              
                    
                    foreach ($lesnomsImage as $value )
                      {
                        if($value=='publicite/'.$nomImage)                  
                          {
                           
                            $nomImage=$r.$nomImage; 
                         
                            
                          }
                                      
                      }                     
                      
                       $urlNomImage='publicite/'.$nomImage;
                       
                       move_uploaded_file($_FILES['uplaodI']['tmp_name'], $urlNomImage); 
                       $url=$urlNomImage; 
                 }
                 else
                 {
                  $url=$publiciteDetail[0]['url']; 
                 }