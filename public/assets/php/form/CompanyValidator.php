<?php
class Validator {
    private $data;
    private $errors = [];

    public function __construct($data) {
        $this->data = $data;
    }

    public function validate() {
        if (empty($this->data['name'])) $this->errors[] = "Name required";
        if (!empty($this->data['web']) && !filter_var($this->data['web'], FILTER_VALIDATE_URL)) {
            $this->errors[] = "Valid website URL required";
        }
        if (!filter_var($this->data['email'], FILTER_VALIDATE_EMAIL)) $this->errors[] = "Valid email required";
        if (empty($this->data['mobile']) || !preg_match("/^[0-9]{10,15}$/", $this->data['mobile'])) $this->errors[] = "Valid mobile required";

        if (empty($this->data['registrant_type'])) $this->errors[] = "Select Registrant Type";
        if (empty($this->data['registrant_category']) || !is_array($this->data['registrant_category'])) {
            $this->errors[] = "Select at least one Registrant Category";
        }
        if (empty($this->data['country']) || $this->data['country'] === "0") $this->errors[] = "Country required";
        if (empty($this->data['city'])) $this->errors[] = "City required";
        if (empty($this->data['address'])) $this->errors[] = "Address required";
        if (empty($this->data['username'])) $this->errors[] = "Username required";
        if (empty($this->data['password']) || strlen($this->data['password']) < 6) $this->errors[] = "Password must be 6+ chars";
        if ($this->data['password'] !== $this->data['cpassword']) $this->errors[] = "Passwords do not match";
        if (empty($this->data['captcha'])) $this->errors[] = "Captcha required";

        if (count($this->errors) > 0) {
            return ['status' => 'error', 'errors' => $this->errors];
        }
        return ['status' => 'success'];
    }
}
