<?php 

                            $userid = $_SESSION['valid_user_id'];
                            $sql = "SELECT UserID_R, message FROM messages
                                    WHERE UserID = '$userid'";
                            $result=$conn->query($sql);
                            
                            $user_r = array();
                            $message = array();
                            if($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    array_push($message,$row['message']);
                                    array_push($user_r,$row['UserID_R']);
                                }
                            }
                            
                            //print_r($user_r);
                            //print_r($message);
                            $counter = 0;
                            while($counter < count($user_r)){
                                $sql_u = "SELECT FirstName FROM users
                                            WHERE userId='$user_r[$counter]'";
                                $result_u=$conn->query($sql_u);
                            
                                //$user_r_name = array();
                    
                                if($result_u->num_rows > 0) {
                                    while($row = $result_u->fetch_assoc()) {
                                        //echo $row['FirstName'];
                                        $user_r_name = $row['FirstName'];
                                    }
                                }
                                //print_r($user_r_name);

                                echo "<td>".$user_r_name."</td>
                                      <td>".$message[$counter]."</td></tr>";
                            
                                  $counter = $counter + 1;
                            }
                            
                            
                            ?>