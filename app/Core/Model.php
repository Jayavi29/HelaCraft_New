<?php

trait Model
{
    use Database; // Use Database trait for DB ops

    // Uncomment and set in your model class:
    // protected $table = 'users';

    protected $limit = 10;
    protected $offset = 0;

    public function first($data, $data_not = [])
    {
        return "This is the first method in the Model class.";
    }

    // Get all rows from the table with limit & offset
    public function all()
    {
        $query = "select * from $this->table limit $this->limit offset $this->offset";
        $results = $this->query($query);
        if (is_array($results) && count($results) > 0) {
            return $results;
        }
        return false;
    }

    // Get rows matching $data conditions and not matching $data_not
    public function where($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->table where ";

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        $query = rtrim($query, " &&");

        foreach ($keys_not as $key) {
            $query .= " && " . $key . " != :" . $key . "&& ";
        }

        $query = rtrim($query, " &&");

        $query .= " limit $this->limit offset $this->offset";

        $data = array_merge($data, $data_not);
        $results = $this->query($query, $data);
        if (is_array($results) && count($results) > 0) {
            return $results;
        }
        return false;
    }

    // Insert a new row with filtered data columns
    public function insert($data)
    {
        if (!empty($this->allowedColumns)) {
            foreach ($data as $key => $value) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }

        $keys = array_keys($data);
        $query = "insert into $this->table (" . implode(',', $keys) . ") values (:" . implode(',:', $keys) . ")";

        echo $query;
        $this->query($query, $data);
    }

    // Update a row by id with filtered data columns
    public function update($id, $data, $id_column = 'id')
    {
        if (!empty($this->allowedColumns)) {
            foreach ($data as $key => $value) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }

        $keys = array_keys($data);
        $query = "UPDATE $this->table SET ";

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . ", ";
        }

        $query = rtrim($query, ", ");

        $query .= " WHERE $id_column = :$id_column;";  // Added missing semicolon

        $data[$id_column] = $id;

        return $this->query($query, $data);
    }

    // Delete a row by id
    public function delete($id, $id_column = 'id')
    {
        $query = "DELETE FROM $this->table WHERE $id_column = :$id_column";
        $data[$id_column] = $id;

        return $this->query($query, $data);
    }
}
