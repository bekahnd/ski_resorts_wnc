<?php

class User extends DatabaseObject {

  static protected $table_name = 'member';
  static protected $db_columns = ['member_id', 'username', 'first_name', 'last_name', 'email', 'state_id', 'hashed_password', 'is_admin', 'date_joined'];

  public $id;
  public $username;
  public $first_name;
  public $last_name;
  public $email;
  public $state_id;
  public $password;
  public $confirm_password;
  protected $hashed_password;
  public $is_admin;
  public $date_joined;

  public function __construct($args=[]) {
    $this->username = $args['username'] ?? '';
    $this->first_name = $args['first_name'] ?? '';
    $this->last_name = $args['last_name'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->state_id = $args['state_id'] ?? '';
    $this->password = $args['password'] ?? '';
    $this->confirm_password = $args['confirm_password'] ?? '';
  }

  protected function set_hashed_password() {
    $this->hashed_password = password_hash($this->password, PASSWORD_BCRYPT);
  }

  public function verify_password($password) {
    return password_verify($password, $this->hashed_password);
  }

  protected function create() {
    $this->set_hashed_password();
    parent::create();
  }

  protected function update() {
    $this->set_hashed_password();
    parent::update();
  }

  static public function find_by_username($username) {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE username='" . self::$database->escape_string($username) . "'";
    $obj_array = static::find_by_sql($sql);
    if(!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }


// something like this for user class
  protected function validate() {
    $this->errors = [];

    if(is_blank($this->username)) {
      $this->errors[] = "Username cannot be blank.";
    }
    if(is_blank($this->first_name)) {
      $this->errors[] = "First name cannot be blank.";
    }
    if(is_blank($this->last_name)) {
      $this->errors[] = "Last name cannot be blank.";
    }
    if(is_blank($this->email)) {
      $this->errors[] = "Email name cannot be blank.";
    }
    if(is_blank($this->password)) {
      $this->errors[] = "Password name cannot be blank.";
    }
    return $this->errors;
  }
}

?>