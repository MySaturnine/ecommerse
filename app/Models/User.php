<?php

class User
{

    protected $pdo = null;


    /**
     * Constructor that takes pdo connection
     */
    public function __construct(Database $pdo)
    {
        if (!isset($pdo->pdo)) return null;
        $this->pdo = $pdo->pdo;
    }


    public function register($inputs)
    {
        $data = [
            'first_name' => $inputs["first_name"],
            'last_name' => $inputs["last_name"],
            'email' => $inputs["email"],
            'password' => password_hash($inputs["password"], PASSWORD_DEFAULT)
        ];

        $sql = "INSERT INTO `users`
        (`user_id`,
        `first_name`,
        `last_name`,
        `email`,
        `password`,
        `user_created`,
        `user_type`)
        VALUES
        (
         NULL,
        :first_name,
        :last_name,
        :email,
        :password,
        CURRENT_TIMESTAMP(),
        'user'
        );
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }


    public function login($inputs)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$inputs['email']]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($inputs['password'], $user['password'])) {
            echo "valid!";
            $user["password"] = null;
            $_SESSION["current_user"] = $user;
            return true;
        }

        return false;
    }
}
