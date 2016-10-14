<?php

class Outcome extends connect
{
	protected $id;
	protected $name = null;
	protected $value = null;
	protected $explanation;
	protected $reg_date;

	function __construct()
	{
		parent::connect();
	}

	public function setId($id){
		$this->id = $id;
	}
	public function setName($name){
		$this->name = $name; 
	}
	
	public function setvalue($value){
		$this->value = $value; 
	}
	
	public function setExplanation($explanation){
		$this->explanation = $explanation; 
	}
	
	public function getAll() {
        $sql = $this->conn->prepare('SELECT id,name,value,explanation,reg_date FROM outcomePDO');
        $sql->execute();

        $data = $sql->fetchAll();
        return $data;
    }

    public function get($id) {
        $sql = $this->conn->prepare('SELECT id,name,value,explanation,reg_date FROM outcomePDO WHERE id = ?');
        $sql->execute(array($id));

        $data = $sql->fetchAll();
        return $data;
    }

    public function insert() {
        $sql = $this->conn->prepare('INSERT INTO outcomePDO (name,value,explanation) VALUES (?,?,?)');
        if ($this->name!=null||$this->value!=null){
        $sql->execute(array($this->name, $this->value, $this->explanation));
	    echo " <script>alert('Selamat, Data berhasil disimpan. Kembali ke Menu Index.')</script>
	     <meta http-equiv='refresh' content='2; url= index.php'/>  ";
	    } else { echo "<script>alert('Mohon Maaf, Data gagal disimpan. Tetap di Menu Insert')</script>
	        <meta http-equiv='refresh' content='2; url= insert.php'/> ";
	    }
    }

    public function update() {
        $sql = $this->conn->prepare('UPDATE outcomePDO SET name = ?,value = ?,explanation = ? WHERE id = ?');
        $sql->execute(array($this->name, $this->value, $this->explanation, $this->id));
    }

    public function delete() {
        $sql = $this->conn->prepare('DELETE FROM outcomePDO WHERE id = ?');
        $sql->execute(array($this->id));
    }
}
?>