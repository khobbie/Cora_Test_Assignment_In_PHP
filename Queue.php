<?php
class Queue
{

    public $users = array();

    public $is_reversed = false;


    public function numberOfUsers()
    {
        return count($this->users);
    }

    public function isUserEmpty()
    {
        return $this->numberOfUsers() === 0;
    }



    public function getUserPositionByUser($user)
    {
        if ($this->checkIfUserExistInUsers($user)) {
            return array_search(trim($user), $this->users);
        } else {
            print_r("<br><br>User does not exit");
            // return ;
        }
    }


    public function getUserPositionByUserPosition($position)
    {
        if (isset($this->users[$position])) {
            return $user = $this->users[$position];
           // return array_search(trim($user), $this->users);
        } else {
            print_r("<br><br>User does not exit");
            // return ;
        }
    }



    public function checkIfUserExistInUsers($user)
    {

        if (in_array(trim($user), $this->users)) {
            return true;
        } else {
            return false;
        }
    }

    public function AddUser($user)
    {
        if ($this->checkIfUserExistInUsers($user)) {
            print_r("<br><br>User already");
        } else {
            $this->users[] = trim($user);
            return $this->getUserPositionByUser($user);
            // array_push($this->users, $user);
        }
    }

    public function checkIfUserIsAtFirstPosition($user)
    {
        $userPosition = $this->getUserPositionByUser($user);
        if ($userPosition == 0) {
            return true;
        } else {
            return false;
        }
    }



    // REMOVE USER BY VALUE
    public function removeUserByValue($user)
    {
        if ($this->checkIfUserExistInUsers($user)) {

            $position = $this->getUserPositionByUser($user);

            //  FIFO: only remove first position user
            if ($position == 0) {
                array_splice($this->users, $position, 1);
            } else {
                print_r("<br><br>Can not remove user ($user) which is not in the first position");
            }
        } else {
            print_r("<br><br>User ($user) does not exit");
        }
    }

    
    // REMOVE USER BY POSITION
    public function removeUserByPosition($position)
    {
        if(isset($this->users[$position])){
            
            if ($position == 0) {
                array_splice($this->users, $position, 1);
            } else {
                print_r("<br><br>Can not remove user which is not in the first position");
            }
        }else{
            print_r("<br><br>Position ($position) does not exit");
        }

    }

    //SWITCH USERS
    public function switchUserGivenTwoPositions($first_position, $second_position)
    {
        $first_position_value = $this->getUserPositionByUserPosition($first_position);
        $second_position_value = $this->getUserPositionByUserPosition($second_position);

        // swap values
        $this->users[$first_position] = $second_position_value;
        $this->users[$second_position] = $first_position_value;


    }

    // MOVE USER TWO USERS 
    public function moveTwoUsers(&$users, $old_position, $new_position)
    {
       
            if ($old_position == $new_position) {
                print_r("<br><br>Can not move users of the same positions");
            }else{
                array_splice($users,max($new_position,0),0,array_splice($users,max($old_position,0),1));

            }
       
    }

    public function moveUsersGivenStartAndEndPosition($old_position, $new_position)
    {
       return $this->moveTwoUsers($this->users, $old_position, $new_position);
    }


    //REVERSE USERS

    public function reversUsers()
    {
        $this->users = array_reverse($this->users, true);
        $this->is_reversed = true;
        // return array_reverse($this->users, true);
    }


    // Go through the users and output
    public function show()
    {
        if (!$this->isUserEmpty()) {
            for ($i = 0; $i < $this->numberOfUsers(); $i++) {
                echo $this->users[$i] . PHP_EOL;
            }
        } else {
            print_r("<br><br>empty");
        }
    }

    // Clear Users
    public function clearUsers()
    {
        unset($this->users);
        // $this->users = array();
    }
}
