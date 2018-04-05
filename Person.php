<?php
require_once "Input.php";
require_once "Model.php";
class Person extends Model
{
	protected static $table = 'people';
	protected static function findPersonByName()
	{
		self::dbConnect();
        $table = static::$table;
        $query = "SELECT * FROM $table WHERE name = :name";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
	}
}